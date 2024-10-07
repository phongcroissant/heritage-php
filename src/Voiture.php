<?php

namespace App;
class Voiture extends Vehicule
{
    private int $nombrePortes;
    private string $typeCarburant;

    public function __construct(int $nombrePortes, string $typeCarburant, string $marque, string $modele, int $vitesseMax, float $prixJournalier)
    {
        parent::__construct($marque, $modele, $vitesseMax, $prixJournalier);
        $this->nombrePortes = $nombrePortes;
        $this->typeCarburant = $typeCarburant;
    }

    public function calculerCoutLocation(int $nbJours):float
    {
        if ($this->typeCarburant == "électrique") {
            return(($this->prixJournalier * $nbJours) * 1.1);
        }
        return $this->prixJournalier * $nbJours;
    }

    public function afficherInfos()
    {
        dump("Marque: $this->marque. Modele: $this->modele. Vitesse Max: $this->vitesseMax. Prix Journalier: $this->prixJournalier. Nombre de portes : $this->nombrePortes. Type de carburant: $this->typeCarburant");
    }

    public function getNombrePortes(): int
    {
        return $this->nombrePortes;
    }

    public function setNombrePortes(int $nombrePortes): void
    {
        $this->nombrePortes = $nombrePortes;
    }

    public function getTypeCarburant(): string
    {
        return $this->typeCarburant;
    }

    public function setTypeCarburant(string $typeCarburant): void
    {
        $this->typeCarburant = $typeCarburant;
    }


}