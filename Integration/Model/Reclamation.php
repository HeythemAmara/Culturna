<?php

class Reclamation
{
    // TODO Partie Déclaration Varialbles
    private int $IdReclamation;
    private int $IdClient;
    private string $Email;
    private string $SujetReclamation;
    private string $MessageReclamation;
    private string $StatutReclamation;

    // TODO Constructeur

    public function __construct( int $IdClient,string $Email, string $SujetReclamation, string $MessageReclamation, string $StatutReclamation)
    {
        $this->IdClient = $IdClient;
        $this->Email = $Email;
        $this->SujetReclamation = $SujetReclamation;
        $this->MessageReclamation = $MessageReclamation;
        $this->StatutReclamation = $StatutReclamation;
       
    }

    // TODO Getters & Setters

    public function getIdReclamation()
    {
        return $this->IdReclamation;
    }

    public function setIdReclamation(int $IdReclamation)
    {
        $this->IdReclamation = $IdReclamation;
    }

    public function getIdClient()
    {
        return $this->IdClient;
    }

    public function setIdClient(int $IdClient)
    {
        $this->IdClient = $IdClient;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function setEmail(string $Email)
    {
        $this->Email = $Email;
    }

    public function getSujetReclamation()
    {
        return $this->SujetReclamation;
    }

    public function setSujetReclamation(string $SujetReclamation)
    {
        $this->SujetReclamation = $SujetReclamation;
    }

    public function getMessageReclamation()
    {
        return $this->MessageReclamation;
    }

    public function setMessageReclamation(string $MessageReclamation)
    {
        $this->MessageReclamation = $MessageReclamation;
    }

    public function getStatutReclamation()
    {
        return $this->StatutReclamation;
    }

    public function setStatutReclamation(string $StatutReclamation)
    {
        $this->StatutReclamation = $StatutReclamation;
    }

 
}
