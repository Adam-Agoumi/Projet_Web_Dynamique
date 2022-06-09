<?php
$connection = null;
require '../script/bdd_livres_connect.php';
//recuperer les donnees du form
$Title = isset($_POST["Title"]) ? $_POST["Title"] : "";
$PublicationDate = isset($_POST["PublicationDate"]) ? $_POST["PublicationDate"] : "";
$Editor = isset($_POST["Editor"]) ? $_POST["Editor"] : "";
$Collection = isset($_POST["Collection "]) ? $_POST["Collection "] : "";
$Edition = isset($_POST["Edition"]) ? $_POST["Edition"] : "";
$approbation = isset($_POST["approbation"]) ? $_POST["approbation"] : "";

$sql = "INSERT INTO book(Title, PublicationDate, Editor, Collection, Edition, approbation)
            VALUES($Title, '$PublicationDate', '$Editor', '$Collection', '$Edition', NULL)";

if($connection->query($sql) === true){
    echo "Nouveau livre enregistré";
}else{
    echo "Error: " . $sql . "<br>";
}

$connection = null;

?>