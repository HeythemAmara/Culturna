<?php
class reservation
{
    private $idReserv = null;
    private $idEvent = null;
    private $name = null;
    private $email = null;
    private $nbrPlace = null;
    private $num = null;


    public function __construct($idEvent,$p,$a,$c,$n)
    {
        $this->idEvent = $idEvent;
        $this->name = $p;
        $this->email = $a;
        $this->nbrPlace= $c;
        $this->num= $n;

    }

 /*  public function getId()
    {
        return $this->idReserv;
    }
    public function setId($idReserv)
    {
        $this->idReserv= $idReserv;

        return $this;
    }*/

       public function getIdEvent()
    {
        return $this->idEvent;
    }
    public function setIdEvent($idEvent)
    {
        $this->idEvent= $idEvent;

        return $this;
    }
    
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name= $name;

        return $this;
    }
  
   
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
   
    public function getnbrPlace()
    {
        return $this->nbrPlace;
    }
    public function setnbrPlace($nbrPlace)
    {
        $this->nbrPlace= $nbrPlace;

        return $this;
    }
    
    public function getNum()
    {
        return $this->num;
    }
    public function setNum($num)
    {
        $this->num= $num;

        return $this;
    }

}
?>