<?php

class Livraison
{
    // TODO Partie Déclaration Varialbles
    private int $IdLivraison;
    private string $NomColis;
    private float $Frais;
    private string $TypeColis;
    private string $AdresseClient;
    private int $IdClient;
    private int $IdChauffeur;

    // TODO Constructeur

    public function __construct(int $IdLivraison = null, string $NomColis,float $Frais, string $TypeColis, string $AdresseClient, int $IdClient,int $IdChauffeur)
    {
        $this->IdLivraison = $IdLivraison;
        $this->NomColis = $NomColis;
        $this->Frais = $Frais;
        $this->TypeColis = $TypeColis;
        $this->AdresseClient = $AdresseClient;
        $this->IdClient = $IdClient;
        $this->IdChauffeur = $IdChauffeur;
    }

    // TODO Getters & Setters

    public function getIdLivraison()
    {
        return $this->IdLivraison;
    }

    public function setIdLivraison(int $IdLivraison)
    {
        $this->IdLivraison = $IdLivraison;
    }

    public function getNomColis()
    {
        return $this->NomColis;
    }

    public function setNomColis(string $NomColis)
    {
        $this->NomColis = $NomColis;
    }

    public function getFrais()
    {
        return $this->Frais;
    }

    public function setFrais(float $Frais)
    {
        $this->Frais = $Frais;
    }

    public function getTypeColis()
    {
        return $this->TypeColis;
    }

    public function setTypeColis(string $TypeColis)
    {
        $this->TypeColis = $TypeColis;
    }

    public function getAdresseClient()
    {
        return $this->AdresseClient;
    }

    public function setAdresseClient(string $AdresseClient)
    {
        $this->AdresseClient = $AdresseClient;
    }

    public function getIdClient()
    {
        return $this->IdClient;
    }

    public function setIdClient(int $IdClient)
    {
        $this->IdClient = $IdClient;
    }

    public function getIdChauffeur()
    {
        return $this->IdChauffeur;
    }

    public function setIdChauffeur(int $IdChauffeur)
    {
        $this->IdChauffeur = $IdChauffeur;
    }
}
