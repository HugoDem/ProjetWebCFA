<?php


/**
* 
*/
class ModelArticle
{
	private $connexion;
	
	function __construct()
	{
		$servername = "localhost";
		$username = "root";
        $password = "root";
        

		try {
		    $conn = new PDO("mysql:host=$servername;dbname=projetwebcfa", $username, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $this->connexion=$conn;
		    //echo "Connected successfully"; 
	    }
		catch(PDOException $e)
	    {
	    	echo "Connection failed: " . $e->getMessage();
	    }

	}

	function createArticle($article){
        $this->connexion->exec("INSERT INTO `article` (`nom`,`prix`, `description`,`photo`) VALUES ('".$article->getName()."',
        '".$article->getPrice()."',
        '".$article->getDescription()."','".$article->getPhoto()."')");
	}
	function getArticleByName($nom){

		$sql =  "SELECT * FROM `article` WHERE nom='".$nom."'";
		$nom = null;
		include_once "article.php";
	    foreach  ($this->connexion->query($sql) as $row) {
	    	$article = new Article($row['nom'],$row['prix'],$row['description'],$row['photo']);
	  	}
	  	return $article;
	}
}

?>