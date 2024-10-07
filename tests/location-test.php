<?php

use App\Location;
use App\Moto;
use App\Vehicule;
use App\Voiture;

require_once __DIR__."/../vendor/autoload.php";

$location= new Location(5);
$moto = new Moto("Acier", "Yamaha", "MT-07", "210", "50");
$voiture = new Voiture("4","électrique","Tesla","Model 3","220","100");


$location->louerVehicule($moto);
$location->louerVehicule($voiture);
$location->afficherDetailsLocation();