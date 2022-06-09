<?php
// Initialiser la session
session_start();
// Détruire la session.
if(session_destroy())
{
    $_SESSION['FirstName_connected']=NULL;
    $_SESSION['LastName_connected']=NULL;
    // Redirection vers la page de connexion
    header("Location:page_d_acceuil.php");
}
?>