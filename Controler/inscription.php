<?php

$prenom = $_POST['prenom'];
$nom=$_POST['nom'];
$mail = $_POST['mail'];
$numero = $_POST['numero'];
$password=$_POST['password'];


include "Model/user.php";
include "Model/model.php";

if ($prenom and $nom and $mail and $numero and $password){
    $model = new Model();


    $createdUser = new User($prenom,$nom,$mail,$numero,$password);

    $user = $model->getUserByEmail($createdUser->getMail());
    if ($user==null){
        $model->createUser($createdUser);
        include_once "View/created.php";
    }else {
        include_once "View/existing.php";
    }
}else{
    include_once "View/inscriptionfalse.php";
}



?>