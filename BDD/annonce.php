<?php
    class  annonce{
    
    // attribut privé : 
    private $_idUser;
    private $_nom;
    private $_prix;
    private $_boite;
    private $_km;
    private $_chevaux;
    private $_annee;
    private $_modele;
    private $_couleur
    private $_date_annonce
    private $_path_image
    private $_marque  

    public function __construct($bdd, $login, $mdp)
    {
        $data = $bdd->query("SELECT * from user where email = '".$login."' && mdp = '".$mdp."'");// TODO connexion à la bdd et selectiond de tout les champs
        $tabData = $data->fetch();
        
        $this->_idUser = $tabData['id_user'];
        $this->_nom = $tabData['nom'];
        $this->_prix= $tabData['prix'];
        $this->_boite = $tabData['boite'];
        $this->_km = $tabData['km'];
        $this->_chevaux = $tabData['chevaux'];
        $this->_annee = $tabData['annee'];
        $this->_modele = $tabData['modele'];
        $this->_couleur = $tabData['couleur'];
        $this->_date_annonce = $tabData['date_annonce'];
        $this->_image = $tabData['path_image'];
        $this->_marque = $tabData['marque'];
    }
    /* GET METHOD */
    public function getId(){
        return $this->_idUser;
    }
    public function GetNom() {
        return $this->_nom;
    }
    public function getprix(){
        return $this->_prix;
    }
    public function Getboite() {
        return $this->_boite;
    }
    public function Getkm() {
        return $this->_km;
    }
    public function Getchevaux() {
        return $this->_chevaux;
    }
    public function Getannee() {
        return $this->_annee;
    }
    public function Getmodele() {
        return $this->_modele;
    }
    public function Getcouleur() {
        return $this->_couleur;
    }
    public function Getdate_annonce() {
        return $this->_date_annnonce;
    }
    public function Getpath_image() {
        return $this->_path_image;
    }
    public function Getmarque() {
        return $this->_marque;
    }



/* SET METHOD */

    public function setIdUser($newIdUser) {
        $this->_idUser = $newIdUser;
    }

    public function setNom($newNom){
        $this->_nom = $newNom;
    }

    public function setLogin($newprix){
        $this->_login = $newprix;
    }

    public function setMdp($newboite) {
        $this->_mdp = $newboite;
    }

    public function setEmail($newkm) {
        $this->_email = $newkm;
    }

    public function setEmail($newchevaux) {
        $this->_grade = $newchevaux;
    }

    public function setEmail($newannee) {
        $this->_grade = $newannee;
    }

    public function setEmail($newmodele) {
        $this->_grade = $newmodele;
    }
    public function setEmail($newcouleur) {
        $this->_grade = $newcouleur;
    }
    public function setEmail($newdate_annonce) {
        $this->_grade = $newdate_annonce;
    }
    public function setEmail($newpath_image) {
        $this->_grade = $newpath_image;
    }
    public function setEmail($newmarque) {
        $this->_grade = $newmarque;
    }
}


