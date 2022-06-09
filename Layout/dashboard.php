<?php

    /*$host = 'webdynamiquegroupe3.database.windows.net';
    $username = 'Guillaume';
    $password = 'RootRoot3';
    $database = "Books";*/
    /*$servername ="tcp:webdynamiquegroupe3.database.windows.net,1433";
    $connectionOptions = array(
        "Database" => "Books",
        "UID" => "Guillaume",
        "PWD" => "RootRoot3"
    );
    //$conn = mysqli_init();
    $conn = sqlsrv_connect($servername, $connectionOptions);

    if($conn === false){
        die(print_r(sqlsrv_errors(), true));
    }*/

    //mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);
    //$db_handle = mysqli_real_connect($conn, 'webdynamiquegroupe3.database.windows.net', 'Guillaume', 'RootRoot3','Books',1433,NULL,MYSQLI_CLIENT_SSL) or die('Erreur de connexion');
    /*$db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database) or die('Base de données inexistante');*/

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

    //if($db_found) {
        $sql = "SELECT * FROM Book WHERE approbation = 1";
        //$result = mysqli_query($datasource, $sql);//or die('Erreur SQL <br>' . $sql . '<br>' . mysqli_error($datasource));
        $result = $connection->query($sql);
        //if(mysqli_num_rows($result) == 0){
        if($result->rowCount() == 0){
            echo "Il n'y a pas de livres validés";
        }else{
            //while($data = mysqli_fetch_assoc($result)){
            while($data = $connection->fetch(PDO::FETCH_ASSOC)){

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

                /*echo '<b>Titre: ' . $data['Title'] . '</b>';
                echo '<i>Auteur: ' . $data['Author'] . '</i>';
                echo 'Editeur: '.$data['Editor'];*/
            }
        }
    /*}else{
        echo "Database not found";
    }*/
    //mysqli_close($datasource);
    $connection=null;
?>