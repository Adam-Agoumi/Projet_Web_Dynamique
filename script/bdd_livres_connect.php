<?php

$database = "books";
$servername ="localhost";
$usernameDB = "root";
$passwordDB = "";
$charset = "utf8mb4";

try{
    $datasource = "mysql:host=$servername; dbname=$database; charset=$charset";
    $connection = new PDO($datasource, $usernameDB, $passwordDB);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "connection failed :" . $e->getMessage();
    return $connection;
}


?>