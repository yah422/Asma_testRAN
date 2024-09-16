<?php

class Client {

    private $nom;
    private $prenom;
    private $mail;
    private $tel;
    private $contrat;
    

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