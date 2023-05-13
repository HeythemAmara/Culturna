<?php
class Club
{
    private $idClub = null;
    private $name = null;
    private $type = null;

    private $mail=null;
    private $image=null;

    private $note=null;
    public function __construct($id,$name, $type,$mail,$image,$note)
    {
        $this->idClub = $id;

        $this->name = $name;
        $this->type = $type;
        $this->mail = $mail;
        $this->image = $image;
        $this->note=$note;
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
    public function getnote()
    {
        return $this->note;
    }
    public function setnote($note)
    {
        $this->note = $note;

        return $this;
    }


}
?>