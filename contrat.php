<?php

class Contrat {

    private Client $client;
    private Voiture $voiture;
    private $dateDebut;
    private $dateFin;
    private $prixLocation;

    public function __construct(Client $client, Voiture $voiture,$dateDebut,$dateFin,$prixLocation){
        $this->client = $client;
        $this->voiture = $voiture;

        $this->dateDebut =  new DateTime($dateDebut);
        $this->dateFin = new DateTime($dateFin);
        $this->prixLocation = $prixLocation;
    
        // ajouter un contrat a un client
        $this->client->ajouterContrat($this);
    
        if ($dateDebut > $dateFin) {
            echo "La date doit être antérieur ou égale à la date de fin !";
            return;
        }

        if (!$voiture->estdisponible()) {
            echo "La voiture n'est pas disponible :(";
            return;

        }
    }


    public function calculPrixTotal(){
        $difference = $this->dateDebut->diff($this->dateFin)->days + 1;
        return $difference * $this->prixLocation . "\n €";
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