

<?php
require ("navbar.php");

    $connection = null;
    require '../script/bdd_users_connect.php';
    //recuperer les donnees du form
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $psw = isset($_POST["psw"]) ? $_POST["psw"] : "";
    $firstName = isset($_POST["firstName"]) ? $_POST["firstName"] : "";
    $lastName = isset($_POST["lastName"]) ? $_POST["lastName"] : "";
    $birthDate = isset($_POST["birthDate"]) ? $_POST["birthDate"] : "";
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    //psw-repeat


    $sql = "INSERT INTO User(User_id, Username, FirstName, LastName, Birthdate, Email, Password, Approved)
            VALUES(null, '$username', '$firstName', '$lastName', '$birthDate', '$email', '$psw', '0')";

    if($connection->query($sql) === true){
        echo "Nouvel utilisateur enregistré";
    }else{
        echo "Error: " . $sql . "<br>";
    }

    $connection = null;

?>