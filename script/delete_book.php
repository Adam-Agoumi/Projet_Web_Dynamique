<?php
$connection = null;
require '../script/bdd_livres_connect.php';
//recuperer les donnees du form
$Title = isset($_POST["Title"]) ? $_POST["Title"] : "";

$sql = "DELETE FROM book WHERE Title = $Title";

if($connection->query($sql) === true){
    echo " livre supprimé";
}else{
    echo "Error: " . $sql . "<br>";
}

$connection = null;

?>