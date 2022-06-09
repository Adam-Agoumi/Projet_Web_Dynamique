<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/register.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script type="text/javascript" src="../assets/js/vue-connexion.js" async></script>
    </head>
    <body>
        <?php
        require ("navbar.php");
        $connection = null;
            require '../script/bdd_users_connect.php';
            $sql = "SELECT User_id, Username, FirstName, LastName, Birthdate, Email FROM user WHERE Approved = '0'";
            $result = $connection->query($sql);
            if($result->rowCount() == 0){
                echo "Il n'y a pas d'utilisateurs en attente de validation";
            }else{
                echo "<h1>Utilisateurs en attente de validation:</h1>\n";

                echo "\n<table>\n<tr>\n" .
                        "\n\t<th>UID</th>" .
                        "\n\t<th>Username</th>" .
                        "\n\t<th>Prénom</th>" .
                        "\n\t<th>Nom</th>" .
                        "\n\t<th>Birthdate</th>" .
                        "\n\t<th>Email</th>";

                while($row = $result->fetch(PDO::FETCH_ASSOC)){ //jusqu'à plus de row dans le result
                    echo "\n<tr>"; //on commence un row du tableau

                    //on sort chacun des attributs comme table data
                    foreach ($row as $dataTitle) {
                        echo "\n\t<td> $dataTitle</td>";
                    }

                    //on finit le row
                    echo "\n</tr>";
                }
                //finir le tableau
                echo "\n</table>\n";
            }
        ?>
        <br>
        <br>
        <br>
        <div id="userIDForm">
            <form action="../Layout/approve_user.php" method="post">
                <div class="container">
                    <p>Veuillez saisir l'UID pour l'utilisateur que vous voulez valider</p>
                    <hr>

                    <label for="userID"><b>UID</b></label>
                    <input type="text" placeholder="0" name="userID" id="userID" required>
                    <button type="submit" class="registerbtn" name="Valider">Valider</button>
                </div>
            </form>
        </div>
        <a href="../Layout/approve.php">Cliquez ici pour approuver les livres.</a>
    </body>
</html>
