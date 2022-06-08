<?php
$servername = "webdynamiquegroupe3.database.windows.net"; //127.0.0.1
$bddname = "Users";
$user = "Guillaume";
$password = "RootRoot3";

try {
    $connexion = new PDO("mysql:host=" . $servername . ";dbname=" . $bddname, $user, $password);
} catch (PDOException $exception) {
    echo "<p>Un problème est survenue lors de la connexion:";
    echo "<span>" . $exception . "</span></p>";
    die();
}


?>