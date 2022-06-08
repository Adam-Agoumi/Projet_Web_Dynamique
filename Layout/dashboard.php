<?php
    $database = "Books";
    $db_handle = mysqli_connect('webdynamiquegroupe3.database.windows.net', 'Guillaume', 'RootRoot3') or die('Erreur de connexion');
    $db_found = mysqli_select_db($db_handle, $database) or die('Base de données inexistante');

    if($db_found) {
        $sql = "SELECT * FROM Book WHERE BookApproved = 1";
        $result = mysqli_query($db_handle, $sql) or die('Erreur SQL <br>' . $sql . '<br>' . mysqli_error($db_handle));
        if(mysqli_num_rows($result) == 0){
            echo "Il n'y a pas de livres validés";
        }else{
            while($data = mysqli_fetch_assoc($result)){
                echo '<b>Titre: ' . $data['Title'] . '</b>';
                echo '<i>Auteur: ' . $data['Author'] . '</i>';
                echo 'Editeur: '.$data['Editor'];
            }
        }
    }else{
        echo "Database not found";
    }
    mysqli_close($db_handle);
?>