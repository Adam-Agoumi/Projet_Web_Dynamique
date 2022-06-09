<?php
session_start();
if($_SESSION['isWebPageAllowed']==false){
    header('Location:page_d_acceuil.php');
}
require ("navbar.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Création de compte</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script type="text/javascript" src="../assets/js/vue-form-create-livre.js" async></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/register.css">

</head>
<body>

<div id="supprimer-form">
    <form action="../script/delete_book.php" method="post">
        <supprimer></supprimer>
    </form>
</div>
</body>
</html>