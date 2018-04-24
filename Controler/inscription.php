<?php
     
$prenom = $_POST['prenom'];
$nom=$_POST['nom'];
$mail = $_POST['mail'];
$numero = $_POST['numero'];
$password=$_POST['password'];
     
     
include "Model/user.php";
include "Model/model.php";
     
$model = new Model();
     
$pass = password_hash($password, PASSWORD_DEFAULT);

$createdUser = new User($prenom,$nom,$mail,$numero,$pass);
$user = $model->getUserByEmail($createdUser->getMail());
if ($user==null){
    $model->createUser($createdUser);
    include_once "index.php";
}else {
    include_once "View/existing.php";
}   
     
     
     
?>
