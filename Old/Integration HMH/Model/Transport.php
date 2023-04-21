<?php

class Transport
{
    // TODO Partie Déclaration Varialbles
    private $Id_T = null;
    private $IdClient = null;
    private $Id_Ch = null;
    private $Type = null;
    private $Nbr_Pers = null;
    private $Date = null;
    private $Adresse = null;
    private $Nom = null;
    private $Tel = null;
    private $Message = null;

    // TODO Constructeur

    public function __construct($IdClient,$Id_Ch,$Type,$Nbr_Pers,$Date,$Adresse,$Nom,$Tel,$Message)
    {
        $this->IdClient = $IdClient;
        $this->Id_Ch = $Id_Ch;
        $this->Type = $Type;
        $this->Nbr_Pers = $Nbr_Pers;
        $this->Date = $Date;
        $this->Adresse = $Adresse;
        $this->Nom = $Nom;
        $this->Tel = $Tel;
        $this->Message = $Message;
    }

    // TODO Getters & Setters

    public function getId_T()
    {
        return $this->Id_T;
    }

    public function setId_T(int $Id_T)
    {
        $this->Id_T = $Id_T;
    }

    public function getIdClient()
    {
        return $this->IdClient;
    }

    public function setIdClient(string $IdClient)
    {
        $this->IdClient = $IdClient;
    }

    public function getId_Ch()
    {
        return $this->Id_Ch;
    }

    public function setId_Ch(float $Id_Ch)
    {
        $this->Id_Ch = $Id_Ch;
    }

    public function getType()
    {
        return $this->Type;
    }

    public function setType(int $Type)
    {
        $this->Type = $Type;
    }

    public function getNbr_Pers()
    {
        return $this->Nbr_Pers;
    }

    public function setNbr_Pers(string $Nbr_Pers)
    {
        $this->Nbr_Pers = $Nbr_Pers;
    }

    public function getDate()
    {
        return $this->Date;
    }

    public function setDate(int $Date)
    {
        $this->Date = $Date;
    }

    public function getAdresse()
    {
        return $this->Adresse;
    }

    public function setAdresse(int $Adresse)
    {
        $this->Adresse = $Adresse;
    }

    public function getNom()
    {
        return $this->Nom;
    }

    public function setNom(int $Nom)
    {
        $this->Nom = $Nom;
    }

    public function getTel()
    {
        return $this->Tel;
    }

    public function setTel(int $Tel)
    {
        $this->Tel = $Tel;
    }

    public function getMessagee()
    {
        return $this->Message;
    }

    public function setMessagee(int $Message)
    {
        $this->Message = $Message;
    }

}
