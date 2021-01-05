<?php
class user
{
    // attribut privé : 
    private $_idUser;
    private $_nom;
    private $_prenom;
    private $_mail;
    private $_mdp;
    private $_login;
    private $_dateCreation
    private $_grade

    public function __construct($bdd, $login, $mdp)
    {
        $data = $bdd->query("SELECT * from user where mail = '".$login."' && mdp = '".$mdp."'");// TODO connexion à la bdd et selectiond de tout les champs
        $tabData = $data->fetch();
        
        $this->_idUser = $tabData['id_user'];
        $this->_nom = $tabData['nom'];
        $this->_prenom = $tabData['prenom'];
        $this->_mail = $tabData['mail'];
        $this->_mdp = $tabData['mdp'];
        $this->_login = $tabData['login'];
        $this->_grade = $tabData['grade'];
        $this->_dateCreation = $tabData['date_creation'];
    }
    /* GET METHOD */
    public function getId()
    {
        return $this->_idUser;
    }

    public function GetPrenom() {
        return $this->_prenom;
    }

    public function GetNom() {
        return $this->_nom;
    }

    public function getLogin(){
        return $this->_login;
    }

    public function GetMdp() {
        return $this->_mdp;
    }

    public function GetMail() {
        return $this->_mail;
    }

    public function GetGrade() {
        return $this->_grade;
    }
    /* SET METHOD */
    public function setIdUser($newIdUser) {
    
        $this->_idUser = $newIdUser;
    }
    public function setPrenom($newPrenom) {
    
        $this->_prenom = $newPrenom;
    }

    public function setNom($newNom) 
    {
        $this->_nom = $newNom;
    }

    public function setLogin($newLogin){
    
        $this->_login = $newLogin;
    }

    public function setMdp($newMdp) {
    
        $this->_mdp = $newMdp;
    }

    public function setMail($newMail) {
    
        $this->_mail = $newMail;
    }

    public function setEmail($newGrade) {
    
        $this->_grade = $newGrade;
    }
}

