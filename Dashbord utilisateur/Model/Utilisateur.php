<?php

class Utilisateur
{
    // TODO Partie Déclaration Varialbles
    private int $IdU;
    private string $Nom;
    private string $Prenom;
    private string $Email;
    private string $Mdp;
    private string $Dob;
    private string $Perm;

    // TODO Constructeur

    public function __construct(int $IdU = null, string $Nom,string $Prenom, string $Email, string $Mdp, string $Dob,string $Perm)
    {
        $this->IdU = $IdU;
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Email = $Email;
        $this->Mdp = $Mdp;
        $this->Dob = $Dob;
        $this->Perm = $Perm;
    }

    // TODO Getters & Setters

    public function getIdU()
    {
        return $this->IdU;
    }

    public function setIdU(int $IdU)
    {
        $this->IdU = $IdU;
    }

    public function getNom()
    {
        return $this->Nom;
    }

    public function setNom(string $Nom)
    {
        $this->Nom = $Nom;
    }

    public function getPrenom()
    {
        return $this->Prenom;
    }

    public function setPrenom(float $Prenom)
    {
        $this->Prenom = $Prenom;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function setEmail(string $Email)
    {
        $this->Email = $Email;
    }

    public function getMdp()
    {
        return $this->Mdp;
    }

    public function setMdp(string $Mdp)
    {
        $this->Mdp = $Mdp;
    }

    public function getDob()
    {
        return $this->Dob;
    }

    public function setDob(int $Dob)
    {
        $this->Dob = $Dob;
    }

    public function getPerm()
    {
        return $this->Perm;
    }

    public function setPerm(int $Perm)
    {
        $this->Perm = $Perm;
    }
}
