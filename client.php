<?php

class Client {

    private string $nom;
    private string $prenom;
    private string $mail;
    private float $tel;
    private $contrat = [];


    public function __construct($nom,$prenom,$mail,$tel){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->tel = $tel;

    }

    public function ajouterContrat(Contrat $contrat){
        $this->contrats [] = $contrat;
    }

    public function afficherContrat(){
        foreach($this->contrats as $contrat){
            echo "Véhicule : " . $contrat->getVoiture()->getMarque() . " " . $contrat->getVoiture()->getModele();
        }
    }
    

    // GET AND SET DE NOM
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    // GET AND SET DE PRENOM
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }


    // GET AND SET DE MAIL
    public function getMail()
    {
        return $this->mail;
    }
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    // GET AND SET DE TEL
    public function getTel()
    {
        return $this->tel;
    }
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    // GET AND SET DE CONTRAT
    public function getContrat()
    {
        return $this->contrat;
    }
    public function setContrat($contrat)
    {
        $this->contrat = $contrat;

        return $this;
    }
}