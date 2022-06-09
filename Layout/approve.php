<?php
require ("navbar.php");
?>
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
            $connection = null;
            require '../script/bdd_livres_connect.php';
            $sql = "SELECT * FROM Book WHERE approbation = 0";
            $result = $connection->query($sql);
            if($result->rowCount() == 0){
                echo "Il n'y a pas de livres en attente de validation";
            }else{
                echo "<h1>Livres en attente de validation:</h1>\n";

                echo "\n<table>\n<tr>\n" .
                     "\n\t<th>Titre</th>" .
                     "\n\t<th>Date de publication</th>" .
                     "\n\t<th>Editeur</th>" .
                    "\n\t<th>Collection</th>" .
                    "\n\t<th>Edition</th>" .
                    "\n\t<th>Approbation</th>";

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

        <div id="bookTitleForm">
            <form action="../Layout/approve_livre.php" method="post">
                <div class="container">
                    <p>Veuillez saisir le titre du livre que vous voulez valider</p>
                    <hr>

                    <label for="bookTitle"><b>Titre du livre</b></label>
                    <input type="text" placeholder="titre" name="bookTitle" id="bookTitle" required>
                    <button type="submit" class="registerbtn" name="valider">Valider</button>
                    <hr>
                </div>
            </form>
        </div>
        <a href="../Layout/approve_bis.php">Cliquez ici pour approuver les utilisateurs.</a>
    </body>
</html>
