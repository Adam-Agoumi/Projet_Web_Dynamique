<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/register.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script type="text/javascript" src="../assets/js/vue-connexion.js" async></script>
</head>
<body>
    <div id="login-form">
        <form action="../Layout/login_page.php" method="post">
            <login></login>
        </form>
    </div>
</body>
</html>
<?php

$username = isset($_POST["username"]) ? $_POST["username"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";
$connection=null;
require './deconnexion.php';

    if(isset($_POST["LoginButton"])){

        if(session_status() == PHP_SESSION_NONE){



            if(!empty($username)&& !empty($password)){
                require './script/bdd_users_connect.php';
                $sql = "SELECT * FROM user INNER JOIN userrole ON user = userrole.RoleID WHERE( user.Username = '" . $username . "' AND user.password = '" . $password . "')";
                $result = $connection->query($sql);

                if(!$result){
                    $connection = null;
                    exit();
                }

            if ($result->rowCount() > 0){
                foreach ($result as $row){
                    $isAllowed = true;
                    session_start();
                    $SESSION["role"]=$row["Roles"];
                    $SESSION["username"]=$username;
                    $SESSION["Approved"]=$row["Approved"];
                    $SESSION["LastName"]=["nom"];
                    $SESSION["FirstName"]=["prénom"];

                    $password = null;
                    $username = null;
                }
            }
            if (!$isAllowed){
                $error = "le mot de passe est incorrect";
                echo "<div style='color: #DA291C; background-color: lightgray; border: 3px solid firebrick;'> Le mot de passe est incorrect  </div><br><br>";
                session_destroy();
            }
        } else {
                $error = "l'utilisateur n'est pas dans la base de donnée";
                echo "<div style='color: #DA291C; background-color: lightgray; border: 3px solid firebrick;'> l'utilisateur n'est pas dans la base de donnée  </div><br><br>";
                session_destroy();
            }
    }else{
            $error = "il manque des informations";
            echo "<div style='color: #DA291C; background-color: lightgray; border: 3px solid firebrick;'> il manque des informations  </div><br><br>";
            session_destroy();

        }
}

$connection=null;
?>