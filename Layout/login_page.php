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
                    $SESSION["username"]=["pseudo"];
                    $SESSION["Approved"]=$row["Approved"];
                    $SESSION["LastName"]=["nom"];
                    $SESSION["FirstName"]=["prénom"];

                    $password = null;
                    $username = null;
                    echo "connexion reussi";
                    header("location:../Layout/creation.php");
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