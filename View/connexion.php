<?php

$page = $_GET['page'];
echo $page;

if ($page=="accueil"){
    include "Vue/home.php";
}else{
    echo "Erreur";
}
switch ()
?>
*/pour les formulaires, utiliser post, pas get /*