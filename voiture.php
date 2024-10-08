<?php

class Voiture {

    private string $marque;
    private string $modele;
    private string $immatriculation;
    private string $disponible;

    public function __construct($marque,$modele,$immatriculation,$disponible){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->immatriculation = $immatriculation;
        $this->disponible = $disponible;

    }

    public function estdisponible(){
        return $this->disponible;
    }

    
    // GET AND SET DE MARQUE
    public function getMarque()
    {
        return $this->marque;
    }
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    // GET AND SET DE MODELE
    public function getModele()
    {
        return $this->modele;
    }
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    // GET AND SET DE IMMATRICULATION
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    // GET AND SET DE DISPONIBLE
    public function getDisponible()
    {
        return $this->disponible;
    }
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

}