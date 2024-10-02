<?php

namespace App;

class ChefService extends Employe
{
    protected string $service;
    public function __construct(string $prenom, string $nom, int $age, string $service)
    {
        parent::__construct($prenom, $nom, $age);
        $this->service = $service;
    }

    public function getService(): string
    {
        return $this->service;
    }

    public function setService(string $service): void
    {
        $this->service = $service;
    }
    public function presenter(): void
    {
        dump("Bonjour, je suis $this->prenom $this->nom, j'ai $this->age et je suis le chef du service $this->service");
    }
}