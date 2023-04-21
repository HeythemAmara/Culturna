<?php
include "../config.php";
include_once "../Model/Livraison.php";
class LivraisonC
{

    public function listLivraison()
    {
        try 
        {
            $pdo = config::getConnexion();
            $sql = "SELECT * FROM `livraison`";
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

    public function deleteLivraison(int $id)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "DELETE FROM `livraison` WHERE Id_L=" . $id . "";
            $query = $pdo->prepare($sql);
            $query->execute();
            echo $query->rowCount() . " records deleted";
        } catch (PDOException $e) {
            echo "error add: " . $e->getMessage();
        }
    }

    public function addLivraison($Livraison)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "INSERT INTO `livraison`(`Id_L`, `Nom_Colis`, `Frais_Livraison`, `Type_Colis`, `Adresse_Client`, `Id_Client`, `Id_Ch`) 
            VALUES (:idl, :nom, :frais, :typecolis, :adresse, :idclient, :idch)";
            $query = $pdo->prepare($sql);
            $query->execute([
                "idl" => $Livraison->getIdLivraison(),
                "nom" => $Livraison->getNomColis(),
                "frais" => $Livraison->getFrais(),
                "typecolis" => $Livraison->getTypeColis(),
                "adresse" => $Livraison->getAdresseClient(),
                "idclient" => $Livraison->getIdClient(),
                "idch" => $Livraison->getIdChauffeur()
            ]);
        } catch (PDOException $e) {
            echo "Ajout Echouer: " . $e->getMessage();
        }
    }

    public function findLivraisonById($id)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "SELECT * FROM `livraison` WHERE Id_L=" . $id . "";
            $query = $pdo->prepare($sql);
            $query->execute();
            $result = $query->fetch();
            return $result;
        } catch (PDOException $e) {
            echo "Pas de Livraison: " . $e->getMessage();
        }
    }

    public function updateLivraison($Livraison, $id)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "UPDATE `livraison` SET `Id_L`=:idll, `Nom_Colis`=:nom,`Frais_Livraison`=:frais,`Type_Colis`=:typecolis,`Adresse_Client`=:adresse,`Id_Client`=:idclient,`Id_Ch`=:idch WHERE Id_L=:idl";
            $query = $pdo->prepare($sql);
            $query->execute([
                "idll" => $Livraison->getIdLivraison(),
                "nom" => $Livraison->getNomColis(),
                "frais" => $Livraison->getFrais(),
                "typecolis" => $Livraison->getTypeColis(),
                "adresse" => $Livraison->getAdresseClient(),
                "idclient" => $Livraison->getIdClient(),
                "idch" => $Livraison->getIdChauffeur(),
                "idl" => $id
            ]);
        } catch (PDOException $e) {
            echo "Modification Echouer: " . $e->getMessage();
        }
    }
}
