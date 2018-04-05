<?php

$nom = $_POST['nom'];
$prix=$_POST['prix'];
$description = $_POST['description'];
$photo = $_POST['photo'];

include "../Model/article.php";
include "../Model/modelarticle.php";

$model = new ModelArticle();

$createdArticle = new Article($nom,$prix,$description,$photo);

$article = $model->getArticleByName($createdArticle->getName());
if ($article==null){
	$model->createArticle($createdArticle);
	include_once "../View/createdarticle.php";
}else {
	include_once "../View/existingarticle.php";
}




?>