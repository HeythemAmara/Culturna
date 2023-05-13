<?php

class Utilisateur
{
    // TODO Partie Déclaration Varialbles
    private  $IdU = null;
    private  $Username = null;
    private  $Email = null;
    private  $Mdp = null;
    private  $Dob = null;
    private  $Perm = null;

    // TODO Constructeur

    public function __construct($Username, $Email, $Mdp, $Dob,$Perm)
    {
        $this->Username = $Username;
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

    public function getUsername()
    {
        return $this->Username;
    }

    public function setUsername(string $Username)
    {
        $this->Username = $Username;
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
