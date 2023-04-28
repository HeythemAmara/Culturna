<?php
class Club
{
    private $idClub = null;
    private $name = null;
    private $type = null;

    private $mail=null;
    private $image=null;
    public function __construct($id,$name, $type,$mail,$image)
    {
        $this->idClub = $id;

        $this->name = $name;
        $this->type = $type;
        $this->mail = $mail;
        $this->image = $image;
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
    public function getmail()
    {
        return $this->mail;
    }
    public function setmail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    public function getimage()
    {
        return $this->image;
    }
    public function setimage($image)
    {
        $this->image = $image;

        return $this;
    }
   


}
?>