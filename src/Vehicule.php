<?php

namespace App;

class Vehicule
{
    protected string $marque;
    protected string $modele;
    protected int $vitesseMax;
    protected float $prixJournalier;

    /**
     * @param string $marque
     * @param string $modele
     * @param int $vitesseMax
     * @param float $prixJournalier
     */
    public function __construct(string $marque, string $modele, int $vitesseMax, float $prixJournalier)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesseMax = $vitesseMax;
        $this->prixJournalier = $prixJournalier;
    }
    public function afficherInfos(){
        dump("Marque: $this->marque. Modele: $this->modele. Vitesse Max: $this->vitesseMax. Prix Journalier: $this->prixJournalier");
    }
    public function calculerCoutLocation(int $nbJours):float {
        return($this->prixJournalier*$nbJours);
    }
    public function getMarque(): string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    public function getModele(): string
    {
        return $this->modele;
    }

    public function setModele(string $modele): void
    {
        $this->modele = $modele;
    }

    public function getVitesseMax(): int
    {
        return $this->vitesseMax;
    }

    public function setVitesseMax(int $vitesseMax): void
    {
        $this->vitesseMax = $vitesseMax;
    }

    public function getPrixJournalier(): float
    {
        return $this->prixJournalier;
    }

    public function setPrixJournalier(float $prixJournalier): void
    {
        $this->prixJournalier = $prixJournalier;
    }


}