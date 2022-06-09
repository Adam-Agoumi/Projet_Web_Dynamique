<?php

    $database = "Users";
    $servername ="localhost";
    $usernameDB = "root";
    $passwordDB = "";
    $charset = "utf8mb4";

    try {
        $datasource = "mysql:host=$servername; dbname=$database; charset=$charset";
        $connection = new PDO($datasource, $usernameDB, $passwordDB);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        print("Connection reussie.");
    }
    catch (PDOException $e) {
        print("Error connecting to SQL Server.");
        die(print_r($e));
    }

    $email = $_POST["email"] ?? "";
    $psw = $_POST["psw"] ?? "";

    if($_POST["registerbtn"]){
        $sql = "SELECT * FROM [User] WHERE Email=? AND Password=?";
        if()
    }

?>
