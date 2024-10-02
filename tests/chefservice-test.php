<?php
use App\ChefService;

require_once __DIR__ . "/../vendor/autoload.php";
$chefService = new ChefService("Senku", "Ishigami",19,"Science");
$chefService->presenter();