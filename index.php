<?php

$page = $_GET['page'];

switch ($page){
    case "accueil":
        include "View/accueil.html";
        break;
    case "login":
        include "View/Connexion.html";
        break;
    default:
        include "View/Connexion.html";
}

// pour les formulaires, utiliser post, pas get

?>