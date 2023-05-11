<?php
include_once "../config.php";
include_once "../Model/Reclamation.php";

class ReclamationC
{

    public function listReclamation()
    {
        $sql = "SELECT * FROM reclamation";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    public function listReclamationByID(int $id)
    {
        $sql = "SELECT * FROM reclamation WHERE id_Client=" . $id . "";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    public function tri(int $id)
    {
        
        $sql = "SELECT * FROM reclamation   WHERE id_Client=' 5 ' ORDER BY `id_R` DESC";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
  
    public function listReclamationByIDR(int $id)
    {
        $sql = "SELECT * FROM reclamation WHERE id_R=" . $id . "";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
  

    public function addReclamation($Reclamation)
    {
        try {
            
            
            $pdo = config::getConnexion();
            $sql = "INSERT INTO `reclamation`
            VALUES (NULL, :idc, :email, :sujetr, :msg, :statutr)";
            $query = $pdo->prepare($sql);
            $query->execute([
                "idc" => $Reclamation->getIdClient(),
                "email" => $Reclamation->getEmail(),
                "sujetr" => $Reclamation->getSujetReclamation(),
                "msg" => $Reclamation->getMessageReclamation(),
                "statutr" => $Reclamation->getStatutReclamation()
               
            ]);
        } catch (PDOException $e) {
            echo "Ajout Echouer: " . $e->getMessage();
        }
    }

    public function deleteReclamation(int $id)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "DELETE FROM `reclamation` WHERE id_R=" . $id . "";
            $query = $pdo->prepare($sql);
            $query->execute();
            echo $query->rowCount() . " records deleted";
        } catch (PDOException $e) {
            echo "error add: " . $e->getMessage();
        }
    }    
    
    public function findReclamationById($id)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "SELECT * FROM `reclamation` WHERE id_R=" . $id . "";
            $query = $pdo->prepare($sql);
            $query->execute();
            $result = $query->fetch();
            return $result;
        } catch (PDOException $e) {
            echo "Pas de Reclamation: " . $e->getMessage();
        }
    }

    public function updateReclamation($Reclamation, $id)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "UPDATE `reclamation` SET  `id_Client`=:idc,`Email`=:email,`Sujet_R`=:sujetr,`Message_R`=:msg ,`Statut_R`=:statutr WHERE id_R=:idrr";
            $query = $pdo->prepare($sql);
            $query->execute([
                
                "idc" => $Reclamation->getIdClient(),
                "email" => $Reclamation->getEmail(),
                "sujetr" => $Reclamation->getSujetReclamation(),
                "msg" => $Reclamation->getMessageReclamation(),
                "statutr" => $Reclamation->getStatutReclamation(),
                "idrr" => $id
            ]);
        } catch (PDOException $e) {
            echo "Modification Echouer: " . $e->getMessage();
        }
    }
    public function getmail($Id)
    {
        try 
        {
            $pdo = config::getConnexion();
            $sql = "SELECT Email FROM `reclamation` where id_R=" . $Id . "";
            $query = $pdo->prepare($sql);
            $query->execute();
            $result = $query->fetchAll();
            return $result;
            
        }
        catch (PDOException $e) 
        {
            echo "error add: " . $e->getMessage();
            return 0;
        }
    }

}

