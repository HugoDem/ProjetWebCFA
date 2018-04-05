<?php

/**
* 
*/
class Article
{
    
    private $nom;
    private $prix;
    private $description;
    private $photo;
   	private $id;


    function __construct($nom,$prix,$description,$photo)
    {
        $this->nom=$nom;
        $this->prix=$prix;
        $this->description=$description;
        $this->photo=$photo;
          
   
       }

    function getName(){
		return $this->nom;
    }
    
    function getPrice(){
        return $this->prix;
    }

	function getDescription(){
        return $this->description;
    }
    function getPhoto(){
        return $this->photo;    
    }
    
	function setName($nom){
		$this->nom=$nom;
	}
	function setPrice($prix){
		$this->mail=$mail;
	}

    function setDescription($description){
        $this->description=$description;
    }

    function setPhoto($photo){
        $this->photo=$photo;
    }

}

?>