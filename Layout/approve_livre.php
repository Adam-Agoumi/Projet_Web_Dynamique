<?php
require ("navbar.php");
?>
<?php

    $bookTitle = isset($_POST["bookTitle"]) ? $_POST["bookTitle"] : "";
    $connection = null;

    require '../script/bdd_livres_connect.php';

    if(isset($_POST["valider"])){
        if(session_status() == PHP_SESSION_NONE){
            if(!empty($bookTitle)){
                $sql = "UPDATE book SET approbation=1 WHERE Title = '$bookTitle'";
                $result = $connection->query($sql);
                if($result == true){
                    echo "Livre approuvé";
                }else{
                    echo "Error:" . $sql . "<br>";
                }
            }
        }
    }
    $connection = null;

?>