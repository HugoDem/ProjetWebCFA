<?php

/**
* 
*/
class User 
{
    private $prenom;
    private $nom;
    private $mail;
    private $numero;
    private $password;
	private $id;

	function __construct($prenom,$nom,$mail,$numero,$password)
	{
		$this->prenom=$prenom;
        $this->nom=$nom;
        $this->mail=$mail;
        $this->numero=$numero;
        $this->password=$password;


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
    function getPassword(){
        return $this->password;    
    }
    function getNumero(){
        return $this->numero;

	}
	function setName($nom){
		$this->nom=$nom;
	}
	function setMail($mail){
		$this->mail=$mail;
	}

    function setNumero(){
        $this->numero=$numero;
    }

    function setPassword(){
        $this->password=$password;
    }

}
?>