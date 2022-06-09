<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <title>Accueil</title>
</head>

<body>
    <nav class="navbar navbar-custom fixed-top navbar-expand-lg ">
        <!-- Links -->
        <ul class="navbar-nav">
            <a class="navbar-brand"><img src="../assets/img/logo.png" height=50></a>
            <li class="nav-item inscription">
                <a class="nav-link nav-link-custom" href="../Layout/register.php">Inscription</a>
            </li>
            <li class="nav-item connexion">
                <a class="nav-link nav-link-custom" href="../Layout/index.php">Connexion</a>
            </li>
            <li style="color:white;padding: 0 15px;">|</li>
            <li class="nav-item">
                <a class="nav-link nav-link-custom" href="../Layout/page_d_acceuil.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-custom" href="../Layout/dashboard.php">Voir livres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-custom" href="../Layout/creation.php">Ajouter un livre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-custom" href="../Layout/update.php">Modifier un livre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-custom" href="../Layout/users.php">Ajouter un utilisateur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-custom" href="../Layout/users.php">Supprimer un utilisateur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-custom" href="../Layout/approve.php">Approuver un livre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-custom" href="#">Approuver un utilisateur</a>
            </li>
        </ul>
    </nav>
    <div class="info-container">
        <div class="title-container">
            <h1>Bienvenue dans notre bibliothèque numérique</h1>
        </div>
        <div class="cover-image">
            <img src="../assets/img/cover.jpg" style="padding: 10px 100px 100px 100px">
        </div>
    </div>
    <footer>
        <p> <strong> Créé par Adam AGOUMI, Evan FLAMENT, Boubker HENNOUCHE, JEAN Guillaume,
                JOUBERT Colin et ROGEZ Mathieu. Copyright &copy; 2022. </strong> </p>
    </footer>
</body>

</html>
