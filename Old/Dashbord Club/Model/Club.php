<?php
class Club
{
    private $idClub = null;
    private $name = null;
    private $type = null;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

   public function getIdClub()
    {
        return $this->idClub;
    }
    public function setIdClub($idClub)
    {
        $this->$idClub= $idClub;

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
  
   
    public function gettype()
    {
        return $this->type;
    }
    public function settype($type)
    {
        $this->type = $type;

        return $this;
    }
   
}
?>