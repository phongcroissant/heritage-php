<?php

use App\Employe;

require_once __DIR__."/../vendor/autoload.php";

$emp=new Employe("Phong","Nguyen",20);
$emp->presenter();