<?php

use App\Moto;

require_once __DIR__ . "/../vendor/autoload.php";

$moto = new Moto("Acier", "Yamaha", "MT-07", "210", "50");

$moto->afficherInfos();
dump($moto->calculerCoutLocation(2));