<?php


/**
* 
*/
class Model
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

	function createUser($user){
        $this->connexion->exec("INSERT INTO `user` (`nom`,`prenom`, `mail`,`motdepasse`,`numero`) VALUES ('".$user->getName()."',
        '".$user->getFirstName()."',
        '".$user->getMail()."','".$user->getPassword()."','".$user->getNumero()."')");
	}
	function getUserByEmail($mail){

		$sql =  "SELECT * FROM `user` WHERE mail='".$mail."'";
		$user = null;
		include_once "Model/user.php";
	    foreach  ($this->connexion->query($sql) as $row) {
	    	$user = new User($row['prenom'],$row['nom'],$row['mail'],$row['password'],$row['numero']);
	  	}
	  	return $user;
	}
}

?>