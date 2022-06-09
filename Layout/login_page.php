<?php

$email = isset($_POST["email"]) ? $_POST["email"] : "";
$password = isset($_POST["psw"]) ? $_POST["psw"] : "";
$isAllowed = false;
$connection=null;
//require './deconnexion.php';
require '../script/bdd_users_connect.php';

if(isset($_POST["LoginButton"])){
    if(session_status() == PHP_SESSION_NONE){
        if(!empty($email)&& !empty($password)){

            $sql = "SELECT * FROM user 
                    INNER JOIN userrole 
                    ON User_id = userrole.UserID 
                    WHERE( user.Email = '" . $email . "' AND user.password = '" . $password . "')";
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