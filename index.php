<?php

$page = $_GET['page'];

switch ($page){
    case "accueil":
        include "View/login.php";
        break;
    case "login":
        include "Controler/login.php";
        break;
    default:
        include "View/login.php";
}

?>