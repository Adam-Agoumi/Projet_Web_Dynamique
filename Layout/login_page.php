
<?php
require ("navbar.php");

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
                    WHERE( user.Email = '" . $email . "' AND user.password = '" . $password . "')";
            $result = $connection->query($sql);

            if(!$result){
                $connection = null;
                exit();
            }

            while ($result->rowCount() > 0){

                    while ($rows = $result->fetch()){
                        $isAllowed = true;
                        session_start();
                        $userID = $rows['User_id'];
                        $Username = $rows['Username'];
                        $FirstName = $rows['FirstName'];
                        $LastName = $rows['LastName'];
                        $BirthDate   = $rows['BirthDate'];
                        $Email = $rows['Email'];
                        $password = $rows['password'];
                        $Approved = $rows['Approved'];

                        $password = null;
                        $username = null;
                        echo "connexion reussi",$Username, $FirstName, $LastName;

                        $sql = "SELECT RoleID   
                                FROM userrole 
                                WHERE( userrole.UserID = '" . $userID . "')";
                        $result = $connection->query($sql);

                        while ($row = $result->fetch(PDO::FETCH_ASSOC))
                        {
                            $Roleid = $row['RoleID'];
                        }

                        $_SESSION['UserID_connected'] = $userID;
                        $_SESSION['Username_connected'] = $Username;
                        $_SESSION['FirstName_connected'] = $FirstName;
                        $_SESSION['LastName_connected'] = $LastName;
                        $_SESSION['RoleID_connected'] = $Roleid;

                        header('Location:page_d_acceuil.php');
                        exit();
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