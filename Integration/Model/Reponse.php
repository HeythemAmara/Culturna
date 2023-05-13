<?php
class Reponse
{   private int $IdReponse;
    private string $SujetReponse;
    private string $MessageReponse;
    private int $IdReclamation;
    private int $IdClient;


    public function __construct( $SujetReponse, $MessageReponse, $IdReclamation, $IdClient)
    {
        $this->SujetReponse = $SujetReponse;
        $this->MessageReponse= $MessageReponse;
        $this->IdReclamation=$IdReclamation;
        $this->IdClient=$IdClient;
    }
 
    public function getIdReponse()
    {
        return $this->IdReponse;
    }
    public function setIdReponse($IdReponse)
    {
        $this->IdReponse= $IdReponse;

        return $this;
    }
  
   
    public function getSujetReponse()
    {
        return $this->SujetReponse;
    }
    public function setSujetReponse($SujetReponse)
    {
        $this->SujetReponse = $SujetReponse;

        return $this;
    }
   
    public function getMessageReponse()
    {
        return $this->MessageReponse;
    }
    public function setMessageReponse($MessageReponse)
    {
        $this->MessageReponse= $MessageReponse;

        return $this;
    }
    
    /**
     * Get the value of dob
     */
    public function getIdRleclamation()
    {
        return $this->IdReclamation;
    }

    public function setIdRleclamation($IdReclamation)
    {
        $this->IdReclamation=$IdReclamation;

        return $this;
    }
    public function getIdClient()
    {
        return $this->IdClient;
    }

    public function setIdClient($IdClient)
    {
        $this->IdClient=$IdClient;

        return $this;
    }
   
}
?>