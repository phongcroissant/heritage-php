<?php

use App\Voiture;

require_once __DIR__."/../vendor/autoload.php";

$voiture = new Voiture("4","électrique","Tesla","Model 3","220","100");
$voiture->afficherInfos();