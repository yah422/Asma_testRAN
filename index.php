<?php

require 'client.php';
require 'voiture.php';
require 'contrat.php';

// création de clients
$client1 = new Client("Jean","Dujardin","jeandujardin12@gmail.com","0652102000");


// création de voitures
$voiture1 = new Voiture("nissan","qashkai","14FG32","disponible");


// création de contrats
$contrat1 = new Contrat($client1,$voiture1,"16/10/25","25/10/25","300");













?>