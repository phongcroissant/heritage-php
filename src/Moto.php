<?php

namespace App;

class Moto extends Vehicule
{
    private string $typeGuidon;

    /**
     * @param string $typeGuidon
     */
    public function __construct(string $typeGuidon,string $marque,string $modele, int $vitesseMax, float $prixJournalier)
    {
        parent::__construct($marque, $modele, $vitesseMax,$prixJournalier);
        $this->typeGuidon = $typeGuidon;
    }
    public function afficherInfos():void
    {
        dump("Marque: $this->marque. Modele: $this->modele. Vitesse Max: $this->vitesseMax. Prix Journalier: $this->prixJournalier. Type Guidon: $this->typeGuidon");
    }
    public function calculerCoutLocation(int $nbJours):float
    {
        if($nbJours > 7){
            return $this->prixJournalier*$nbJours*0.95;
        }
        return($this->prixJournalier*$nbJours);

    }

    public function getTypeGuidon(): string
    {
        return $this->typeGuidon;
    }

    public function setTypeGuidon(string $typeGuidon): void
    {
        $this->typeGuidon = $typeGuidon;
    }

}