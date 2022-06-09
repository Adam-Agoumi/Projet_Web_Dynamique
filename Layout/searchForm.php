<!DOCTYPE HTML PUBLIC
    "-//W3C//DTD HTML 4.0 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Search Form</title>
</head>
<body>

<?php
require ("navbar.php");

    $database = "books";
    $servername ="localhost";
    $usernameDB = "root";
    $passwordDB = "";
    $charset = "utf8mb4";

    $titre = $_POST["titre"] ?? "";
    $auteur = $_POST["auteur"] ?? "";
    $annee = $_POST["annee"] ?? "";
    $editeur = $_POST["editeur"] ?? "";

    try{
        $datasource = "mysql:host=$servername; dbname=$database; charset=$charset";
        $connection = new PDO($datasource, $usernameDB, $passwordDB);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "connection failed :" . $e->getMessage();
        return $connection;
    }

    if($_POST["submitbtn"]){
        //if($db_found){
            $sql = "SELECT * FROM [Book]";
            if($titre != ""){
                $sql .= " WHERE Title LIKE '%$titre%'";
                if($auteur != ""){
                    $sql .= " AND Autor LIKE '%$auteur%'";
                }
            }
            $result = mysqli_query($datasource, $sql) or die('Erreur SQL <br>' . $sql . '<br>' . mysqli_error($datasource));
            if(mysqli_num_rows($result) == 0){
                echo "Il n'y a pas de livres dans cette recherche";
            }else{
                while($data = mysqli_fetch_assoc($result)){
                    /*echo '<b>Titre: ' . $data['Title'] . '</b>';
                    echo '<i>Auteur: ' . $data['Author'] . '</i>';
                    echo 'Editeur: ' . $data['Editor'];
                    echo 'Année: ' . $data['Year'];
                    echo 'ID: ' . $data['ID'];*/
                    echo "<h1>Livres correspondants à la recherche</h1>\n";

                    //on commence un tableau html
                    echo "\n<table>\n<tr>\n" .
                         "\n\t<th>ID Livre</th>" .
                         "\n\t<th>Titre</th>" .
                         "\n\t<th>Auteur</th>" .
                         "\n\t<th>Editeur</th>" .
                         "\n\t<th>Année</th>" .
                         "\n</tr>";

                    //jusqu'à plus de row dans le result
                    while($row = @ mysqli_fetch_row($result)){
                        //on commence un row du tableau
                        echo "\n<tr>";

                        //on sort chacun des attributs comme table data
                        foreach ($row as $data)
                            echo "\n\t<td> $data </td>";

                        //on finit le row
                        echo "\n</tr>";
                    }
                    //finir le tableau
                    echo "\n</table>\n";

                }
            }
        /*}else{
            echo "Database not found";
        }*/
    }

    mysqli_close($datasource);
?>
</body>
</html>
