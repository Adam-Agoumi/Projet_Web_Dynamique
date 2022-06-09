<?php
session_start();
if($_SESSION['isWebPageAllowed']==false){
    header('Location:page_d_acceuil.php');
}
require ("navbar.php");

    $userID = isset($_POST["userID"]) ? $_POST["userID"] : "";
    $connection = null;

    require '../script/bdd_users_connect.php';

    //echo "1";

    if(isset($_POST["Valider"])){
        //echo "2";
        if(session_status() == PHP_SESSION_NONE){
            //echo "3";
            if(!empty($userID)){
                //echo "4";
                $sql = "UPDATE user SET Approved=1 WHERE User_id = '$userID'";
                $result = $connection->query($sql);
                if($result == true){
                    echo "Utilisateur approuvé";
                    header("Location: ../Layout/approve_bis.php");
                    exit();
                }else{
                    echo "Error:" . $sql . "<br>";
                }
            }
        }
    }
    $connection = null;

?>