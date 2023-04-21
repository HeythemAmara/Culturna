<?php
class Event
{
    private $idEvent = null;
    private $name = null;
    private $type = null;
    private $time = null;
    private $date= null;
    private $prix= null;
    private ?string $image= null;


    public function __construct($name, $type,$time,$date,$prix,$img)
    {
        //$this->idEvent = $idEvent;
        $this->name = $name;
        $this->type = $type;
        $this->time= $time;
        $this->date=$date;
        $this->prix=$prix;
        $this->image=$img;

    }

   public function getIdEvent()
    {
        return $this->idEvent;
    }
    public function setIdEvent($idEvent)
    {
        $this->$idEvent= $idEvent;

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
   
    public function getTime()
    {
        return $this->time;
    }
    public function setTime($time)
    {
        $this->time= $time;

        return $this;
    }
    
    /**
     * Get the value of dob
     */
    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date=$date;

        return $this;
    }
    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix=$prix;

        return $this;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image= $image;

        return $this;
    }
}
?>