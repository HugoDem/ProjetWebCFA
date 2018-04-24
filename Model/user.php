<?php

/**
* 
*/
class User 
{
    private $nom;
    private $prenom;
    private $mail;
    private $password;
    private $numero;
	private $id;

	function __construct($nom,$prenom,$mail,$password,$numero)
	{
        $this->nom=$nom;
		$this->prenom=$prenom;
        $this->mail=$mail;
        $this->password=$password;
        $this->numero=$numero;


	}

	function getName(){
		return $this->nom;
    }
    
    function getFirstName(){
        return $this->prenom;
    }

	function getMail(){
        return $this->mail;
    }
    function getNumero(){
        return $this->numero;
	}
    function getPassword(){
        return $this->password;    
    }
	function setName($nom){
		$this->nom=$nom;
	}
	function setMail($mail){
		$this->mail=$mail;
	}


    function setPassword(){
        $this->password=$password;
    }

    function setNumero(){
        $this->numero=$numero;
    }
}
?>
