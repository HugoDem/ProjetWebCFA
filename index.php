<?php

$page = isset($_GET['page']) ? $_GET['page'] : null;
$action = isset($_GET['action']) ? $_GET['action'] : null;

function showPage($page){
    include_once "View/header.html";
	include_once $page;
	include_once "View/footer.html";
}

function checkLoggedIn(){
	session_start();
	if (!$_SESSION["user"]){
		header("Location: index.php?page=login");
	}
}
    
if ($page){
    switch ($page) {
    case 'accueil':
        checkLoggedIn();
        showPage('View/home.php');
        break;
    case 'login':
        showPage('View/login.php');
        break;
    case "inscription":
        showPage('View/inscription.php');
        break;
    case "inscriptionfalse":
        showPage('View/inscriptionfalse.php');
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
    showPage("View/home.php");
}

?>