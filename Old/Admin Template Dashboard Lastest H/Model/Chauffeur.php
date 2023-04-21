<?php

class Chauffeur
{
    // TODO Partie Déclaration Varialbles
    private $Id_Ch = null;
    private $NomChauffeur = null;
    private $PrenomChauffeur = null;
    private $TelChauffeur = null;
    private $EmailChauffeur = null;
    private $Vehicule = null;

    // TODO Constructeur

    public function __construct($NomChauffeur,$PrenomChauffeur,$TelChauffeur,$EmailChauffeur,$Vehicule)
    {
        $this->NomChauffeur = $NomChauffeur;
        $this->PrenomChauffeur = $PrenomChauffeur;
        $this->TelChauffeur = $TelChauffeur;
        $this->EmailChauffeur = $EmailChauffeur;
        $this->Vehicule = $Vehicule;
    }

    // TODO Getters & Setters

    public function getId_Ch()
    {
        return $this->Id_Ch;
    }

    public function setId_Ch(int $Id_Ch)
    {
        $this->Id_Ch = $Id_Ch;
    }

    public function getNomChauffeur()
    {
        return $this->NomChauffeur;
    }

    public function setNomChauffeur(string $NomChauffeur)
    {
        $this->NomChauffeur = $NomChauffeur;
    }

    public function getPrenomChauffeur()
    {
        return $this->PrenomChauffeur;
    }

    public function setPrenomChauffeur(float $PrenomChauffeur)
    {
        $this->PrenomChauffeur = $PrenomChauffeur;
    }

    public function getTelChauffeur()
    {
        return $this->TelChauffeur;
    }

    public function setTelChauffeur(int $TelChauffeur)
    {
        $this->TelChauffeur = $TelChauffeur;
    }

    public function getEmailChauffeur()
    {
        return $this->EmailChauffeur;
    }

    public function setEmailChauffeur(string $EmailChauffeur)
    {
        $this->EmailChauffeur = $EmailChauffeur;
    }

    public function getVehicule()
    {
        return $this->Vehicule;
    }

    public function setVehicule(int $Vehicule)
    {
        $this->Vehicule = $Vehicule;
    }


}
