<?php

$page = $_GET['page'];

switch ($page){
    case "accueil":
        include "View/index.html";
        break;
    case "login":
        include"View/Connexion.html";
        break;
    default:
        echo "Erreur";
}

// pour les formulaires, utiliser post, pas get

?>    