<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <title>Acceuil</title>
</head>
<body>
<nav class="navbar navbar-custom fixed-top navbar-expand-lg ">
    <!-- Links -->
    <ul class="navbar-nav" >
        <a class="navbar-brand"><img src="../assets/img/logo.png" height=50></a>
        <li class="nav-item">
            <a class="nav-link nav-link-custom text-light" href="../Layout/register.php" style="margin-left: 250px">Inscription</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-custom text-light" href="../Layout/index.php">Connexion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-custom text-light" href="../Layout/Deconnexion.php">Deconnexion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-custom text-light" href="../Layout/page_d_acceuil.php">Acceuil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-custom text-light" href="../Layout/dashboard.php">Voir livres</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-custom text-light" href="../Layout/creation.php">Ajouter un livre</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-custom text-light" href="../Layout/update.php">Modfifier un livre</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-custom text-light" href="../Layout/users.php">Ajouter un utilisateur</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-custom text-light" href="../Layout/users.php">Supprimer un utilisateur</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-custom text-light" href="../Layout/approve.php">Approuver un livre</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-custom text-light" href="#">Approuver un utilisateur</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-custom text-light" >
                <?php  session_start(); if(session_status()==PHP_SESSION_ACTIVE) {echo $_SESSION['FirstName_connected']."  ".  $_SESSION['LastName_connected'];} ?></a>
        </li>
    </ul>

</nav>

<div class="info-container">
    <div class="title-container">
        <h1>Bienvenue dans notre biblioth??que num??rique</h1>
    </div>
    <div class="cover-image">
        <img src="../assets/img/cover.jpg" style="padding: 10px 100px 100px 100px">
    </div>
</div>

<footer>
    <p style="padding:0px 190px "> <strong> Cr???? par Adam AGOUMI, Evan FLAMENT, Boubker HENNOUCHE, JEAN Guillaume, JOUBERT Colin et ROGEZ Mathieu. Copyright &copy; 2022.  </strong> </p>
</footer>


</body>
</html>
