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
        VALUES (NULL, :nom, :prenom, :tel, :email, :vehicule, :id_compte)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([

                'nom' => $Chauffeur->getNomChauffeur(),
                'prenom' => $Chauffeur->getPrenomChauffeur(),
                'tel' => $Chauffeur->getTelChauffeur(),
                'email' => $Chauffeur->getEmailChauffeur(),
                'vehicule' => $Chauffeur->getVehicule(),
                'id_compte' => $Chauffeur->getid_compte()
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


    public function idChauffeur($id_Compte)
{
    try 
    {
        $pdo = config::getConnexion();
        $sql = "SELECT * FROM `chauffeur` WHERE id_compte = :id_compte";
        $query = $pdo->prepare($sql);
        $query->bindParam(':id_compte', $id_Compte);
        $query->execute();
        $result = $query->fetch();
        return $result['Id_Ch'];
    }
    catch (PDOException $e) 
    {
        echo "Error: " . $e->getMessage();
        return 0;
    }
}


function Sharelocation($id_Chauffeur,$id_Client,$latitude,$longitude)
    {
        $sql = "INSERT INTO DriverLocation  
        VALUES (:IdClient, :IdChauffeur, :Latitude, :Longitude)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([

                'IdClient' => $id_Client,
                'IdChauffeur' => $id_Chauffeur,
                'Latitude' => $latitude,
                'Longitude' => $longitude
            ]);
        } catch (Exception $e) {
            try {
                $sql = "UPDATE `DriverLocation` SET `Latitude`=:Latitude,`Longitude`=:Longitude WHERE `IdClient`=:IdClient AND`IdChauffeur`=:IdChauffeur";
                $query = $db->prepare($sql);
                $query->execute([
                    'IdClient' => $id_Client,
                    'IdChauffeur' => $id_Chauffeur,
                    'Latitude' => $latitude,
                    'Longitude' => $longitude
                ]);
            } catch (PDOException $e) {
                echo "Modification Echouer: " . $e->getMessage();
            }
        }
    }


    public function getLocation($idChauffeur, $idClient)
    {
        try {
            $pdo = config::getConnexion();
            $sql = "SELECT * FROM `DriverLocation` WHERE idChauffeur = ? AND idClient = ?";
            $query = $pdo->prepare($sql);
            $query->execute([$idChauffeur, $idClient]);
            $result = $query->fetchAll();
            return $result;
        } catch (PDOException $e) {
            error_log("Error getting location: " . $e->getMessage());
            throw new Exception("Error getting location");
        }
    }


}