<?php

$login = $_POST['login'];
$password = $_POST['password'];
$tableau = array($login,$password);

switch($tableau){
    case array("admin","4321"):
        include "../View/accueil.html";
        break;
    
    case array("user","1234"):
        include "../View/accueil.html";
        break;
    
    default:
        include "../View/Erreur.html";
        break;
}

?>