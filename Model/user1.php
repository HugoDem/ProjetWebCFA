<?php

class User
{
    private $name;
    private $mail;
    private $id;

    function __construct($name,$mail)
    {
        $this->$name=$name;
        $this->$mail=$mail;
    }

    function getName()
    {
        return $this->$name;
    }

}

?>