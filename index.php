<?php

$page = $_GET['page'];
$action = $_GET['action'];

function showPage($page){
    include_once "View/header.html";
	include_once $page;
	include_once "View/footer.html";
}
if ($page){
    switch ($page) {
    case 'accueil':
        showPage('View/login.php');
        break;
    case 'login':
        showPage('View/login.html');
        break;
    case "inscription":
        showPage('View/inscription.html');
        break;
    default:
        showPage('View/home.php');
        break;
    }

}else if ($action){
	switch ($action) {
		case 'inscription':
			include_once "Controler/inscription.php";
			break;
		case 'login':
			include_once "Controler/login.php";
			break;
		case 'logout':
			include_once "Controler/logout.php";
			break;
		default:
			include "View/home.php";
            break;
    }
}else{
    showPage("View/login.php");
}           

?>