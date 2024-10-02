<?php

namespace App;
// La classe Patron hérite de la classe Employe
// Elle hérite de tous les attributs et méthodes de la classe Employe
// Un objet de la classe Patron est également un objet de la classe Employe
class Patron extends Employe
{
    // Les attributs spécifiques
    private string $voiture;

    /**
     * @param string $voiture
     */
    public function __construct(string $prenom, string $nom, int $age, string $voiture)
    {
        // Appel au constructure de la super-class (Classe Employe)
        parent::__construct($prenom, $nom, $age);
        $this->voiture = $voiture;
    }

    public function getVoiture(): string
    {
        return $this->voiture;
    }

    public function setVoiture(string $voiture): void
    {
        $this->voiture = $voiture;
    }
    // Méthodes spécifiques
    public function deplacer():void{
        dump("Je me déplace en $this->voiture");
    }
    // Redéfinir la méthode présenter
    public function presenter ():void
    {
        dump("Bonjour je suis {$this->getNom()} {$this->getPrenom()}, j'ai {$this->getAge()} ans. Je suis le PDG de Porsche.");
        dump("Bonjour je suis $this->nom $this->prenom, j'ai $this->age ans. Je suis le PDG de Porsche.");
    }
}