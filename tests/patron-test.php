<?php

use App\Patron;

require_once __DIR__."/../vendor/autoload.php";

$patron = new Patron("Maxime","Sermet","19","Porsche GT3 RS");
$patron->presenter();
$patron->deplacer();