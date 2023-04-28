<?php
class Materiel
{
    private $idMateriel = null;
    private $name = null;
    private $type = null;
    private $image=null;
    private $id_C=null;
    private $nomcl=null;


    public function __construct($id,$name, $type,$image,$id_C,$nomcl)
    {   $this->idMateriel=$id;
        $this->name = $name;
        $this->type = $type;
        $this->image=$image;
        $this->id_C=$id_C;
        $this->nomcl=$nomcl;


    }

   public function getIdMateriel()
    {
        return $this->idMateriel;
    }
    public function setIdMateriel($idMateriel)
    {
        $this->$idMateriel= $idMateriel;

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
    public function getimage()
    {
        return $this->image;
    }
    public function setimage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getId_C()
    {
        return $this->id_C;
    }
    public function setId_C($id_C)
    {
        $this->id_C = $id_C;

        return $this;
    }
   
    public function getnomCl()
    {
        return $this->nomcl;
    }
    public function setnomCl($nomcl)
    {
        $this->nomcl = $nomcl;

        return $this;
    }
    



}

?>