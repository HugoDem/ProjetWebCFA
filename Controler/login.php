<?php

$login = $_POST['login'];
$password = $_POST['password'];
$tableau = array($login,$password);

/*
if ($login=="abc" && $password=="123"){
	include "View/home.php";
}else {
	include "View/error.php";
}
*/

switch($tableau){
    case array("admin","4321"):
        include "View/home.php";
        break;
    case array("user","1234"):
        include "View/home.php";
        break;
    default:
        include "View/error.php";
        break;
}

?>