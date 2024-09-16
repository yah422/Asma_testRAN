<?php

require 'client.php';
require 'voiture.php';
require 'contrat.php';

// création de clients
$client1 = new Client("Jean","Dujardin","jeandujardin12@gmail.com","0652102000");


// création de voitures
$voiture1 = new Voiture("Nissan","qashkai","14FG32","disponible");
$voiture2 = new Voiture("Citroen","C4","FB399JH","disponible");

// création de contrats
$contrat1 = new Contrat($client1,$voiture1,"24-09-25","25-09-25","300");
$contrat2 = new Contrat($client1,$voiture2,"20-10-25","30-10-25","50");

echo "Contrat de " . $client1->getNom() . " " . $client1->getPrenom() ."<br> <br>";
echo "Détails du contrat : <br> " ;
$client1->afficherContrat();











?>