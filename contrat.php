<?php

class Contrat {

    private Client $client;
    private Voiture $voiture;
    private $dateDebut;
    private $dateFin;
    private float $prixLocation;

    public function __construct(Client $client, Voiture $voiture,$dateDebut,$dateFin,$prixLocation){
        $this->client = $client;
        $this->voiture = $voiture;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->prixLocation = $prixLocation;
    }


    // GET AND SET DE CLIENT
    public function getClient()
    {
        return $this->client;
    }
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    // GET AND SET DE VOITURE
    public function getVoiture()
    {
        return $this->voiture;
    }
    public function setVoiture($voiture)
    {
        $this->voiture = $voiture;

        return $this;
    }

    // GET AND SET DE DATEDEBUT
    public function getDateDebut()
    {
        return $this->dateDebut;
    }
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    // GET AND SET DE DATEFIN
    public function getDateFin()
    {
        return $this->dateFin;
    }
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    // GET AND SET DE PRIXLOCATION
    public function getPrixLocation()
    {
        return $this->prixLocation;
    }
    public function setPrixLocation($prixLocation)
    {
        $this->prixLocation = $prixLocation;

        return $this;
    }


}