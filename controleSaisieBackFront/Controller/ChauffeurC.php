<?php
include_once "../config.php";
include_once "../Model/Chauffeur.php";

//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDLIVRAISON/config.php';
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDLIVRAISON/Model/Chauffeur.php';

class ChauffeurC
{

    public function listChauffeur()
    {
        try 
        {
            $pdo = config::getConnexion();
            $sql = "SELECT * FROM `chauffeur`";
            $query = $pdo->prepare($sql);
            $query->execute();
            $result = $query->fetchAll();
            return $result;
        }
        catch (PDOException $e) 
        {
            echo "error add: " . $e->getMessage();
        }
    }

    public function deleteChauffeur(int $id)
    {
        try {
            $pdo = config::getConnexion();
            $sql = "DELETE FROM `chauffeur` WHERE Id_Ch=" . $id . "";
            $query = $pdo->prepare($sql);
            $query->execute();
            echo $query->rowCount() . " records deleted";
        } catch (PDOException $e) {
            echo "error add: " . $e->getMessage();
        }
    }

    function addChauffeur($Chauffeur)
    {
        $sql = "INSERT INTO chauffeur  
        VALUES (NULL, :nom, :prenom, :tel, :email, :vehicule)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([

                'nom' => $Chauffeur->getNomChauffeur(),
                'prenom' => $Chauffeur->getPrenomChauffeur(),
                'tel' => $Chauffeur->getTelChauffeur(),
                'email' => $Chauffeur->getEmailChauffeur(),
                'vehicule' => $Chauffeur->getVehicule()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function findChauffeurById($id)
    {
        try {
            $pdo = config::getConnexion();
            $sql = "SELECT * FROM `chauffeur` WHERE Id_Ch=" . $id . "";
            $query = $pdo->prepare($sql);
            $query->execute();
            $result = $query->fetch();
            return $result;
        } catch (PDOException $e) {
            echo "Pas de Chauffeur: " . $e->getMessage();
        }
    }

    public function updateChauffeur($Chauffeur, $id)
    {
        try {
            $pdo = config::getConnexion();
            $sql = "UPDATE `chauffeur` SET `nom`=:NomChauffeur,`Prenom`=:PrenomChauffeur,`Tel`=:TelChauffeur,`Email`=:EmailChauffeur,`Vehicule`=:Vehicule WHERE Id_Ch=:Id_Ch";
            $query = $pdo->prepare($sql);
            $query->execute([
                "NomChauffeur" => $Chauffeur->getNomChauffeur(),
                "PrenomChauffeur" => $Chauffeur->getPreNomChauffeur(),
                "TelChauffeur" => $Chauffeur->getTelChauffeur(),
                "EmailChauffeur" => $Chauffeur->getEmailChauffeur(),
                "Vehicule" => $Chauffeur->getVehicule(),
                "Id_Ch" => $id
            ]);
        } catch (PDOException $e) {
            echo "Modification Echouer: " . $e->getMessage();
        }
    }


    public function countStatVehicule($Vehicule)
    {
        try 
        {
            $pdo = config::getConnexion();
            $sql = "SELECT * FROM `chauffeur` WHERE Vehicule= :Veh ";
            $query = $pdo->prepare($sql);
            $query->bindParam(':Veh', $Vehicule);
            $query->execute();
            $count = $query->rowCount();
            return $count;
        }
        catch (PDOException $e) 
        {
            echo "error add: " . $e->getMessage();
        }
    }


}
