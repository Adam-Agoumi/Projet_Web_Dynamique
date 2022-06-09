<?php
session_start();
if($_SESSION['isWebPageAllowed']==false){
    header('Location:page_d_acceuil.php');
}
require ("navbar.php");

    $userID = isset($_POST["userID"]) ? $_POST["userID"] : "";
    $connection = null;

    require '../script/bdd_users_connect.php';

    if(isset($_POST["valider"])){
        if(session_status() == PHP_SESSION_NONE){
            if(!empty($userID)){
                $sql = "UPDATE user SET approbation=1 WHERE User_id = $userID";
                $result = $connection->query($sql);
                if($result === true){
                    echo "Utilisateur approuvé";
                }else{
                    echo "Error:" . $sql . "<br>";
                }
            }
        }
    }
    $connection = null;

?>