<?php

    $database = "books";
    $servername ="localhost";
    $usernameDB = "root";
    $passwordDB = "";
    $charset = "utf8mb4";

    try{
        $datasource = "mysql:host=$servername; dbname=$database; charset=$charset";
        $connection = new PDO($datasource, $usernameDB, $passwordDB);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "connection failed :" . $e->getMessage();
        return $connection;
    }

    $sqlTitle = "SELECT Title FROM Book WHERE approbation = 1";
    $resultTitle = $connection->query($sqlTitle);

    if($resultTitle->rowCount() == 0){
        echo "Il n'y a pas de livres validés";
    }else{
        echo "<h1>Livres correspondants à la recherche</h1>\n";

        //on commence un tableau html
        echo "\n<table>\n<tr>\n" .
             "\n\t<th>Titre</th>" /*.
             "\n\t<th>Date de publication</th>" .
             "\n\t<th>Editeur</th>" .
             "\n\t<th>Genre</th>" .
             "\n\t<th>Collection</th>" .
             "\n</tr>"*/;

        while($row = $resultTitle->fetch(PDO::FETCH_ASSOC)){ //jusqu'à plus de row dans le result
            echo "\n<tr>"; //on commence un row du tableau

            //on sort chacun des attributs comme table data
            foreach ($row as $data)
                echo "\n\t<td> $data </td>";

            //on finit le row
            echo "\n</tr>";
            }
            //finir le tableau
            echo "\n</table>\n";
        }
    $connection=null;
?>