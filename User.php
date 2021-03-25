<?php

Class User {

    private $_id;
    private $_login;
    private $_mdp;
    private $_nom;
    private $_prenom;

    private $_bdd;


    public function __construct($_bdd){
        $this->_bdd = $_bdd;
    }

    public setUser($id,$_login,$mdp,$_nom)
    {

    }

    public function Connexion() {

        return true;
    }
}

?>