<?php

namespace App;

class Location
{
    private int $nbJours;
    private array $vehicules=[];
    public function __construct(int $nbJours){
        $this->nbJours = $nbJours;
    }
    public function louerVehicule(Vehicule $vehicule):void{
        $this->vehicules[]=$vehicule;
    }
    public function afficherDetailsLocation():void {
        $prixTotal = 0;
        foreach ($this->vehicules as $vehicule) {
            $vehicule->afficherInfos();
            echo $vehicule->calculerCoutLocation($this->nbJours)." €".PHP_EOL;
            $prixTotal += $vehicule->calculerCoutLocation($this->nbJours);
        }
        dump($prixTotal." € au total");
    }

}