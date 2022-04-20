<?php

class membre{

    private $num_M;
    private $nom;
    private $prenom;
    private $email;
    private $mdp;
    private $fonction;
    private $image;

    public function __construct()
    {
        $this->num_M = 0;
        $this->nom = "";
        $this->prenom = "";
        $this->email = "";
        $this->mdp = "";
        $this->fonction = "";
    }

    public function getNum_M(){
        return $this->num_M;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getMdp(){
        return $this->mdp;
    }

    public function getFonction(){
        return $this->fonction;
    }

    public function getImage(){
        return $this->image;
    }

    public function setNum_M($num_M){
        $this->num_M = $num_M;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setMdp($mdp){
        $this->mdp = $mdp;
    }

    public function setFonction($fonction){
        $this->fonction = $fonction;
    }

    public function setImage($image){
        $this->image = $image;
    }

    public function insert(){
        $c = new connexion();
        $dbco = $c->connexion();
        $sth = $dbco->prepare("INSERT INTO membre(Nom,Prenom,email,mdp,fonction,image) VALUES (?,?,?,?,?,?) ");
        $sth->execute(array($this->nom, $this->prenom, $this->email, $this->mdp, $this->fonction, $this->image));
    }

}

?>