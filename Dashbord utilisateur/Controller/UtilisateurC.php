<?php
include "../config.php";
include_once "../Model/Utilisateur.php";
class UtilisateurC
{

    public function listUtilisateur()
    {
        try 
        {
            $pdo = config::getConnexion();
            $sql = "SELECT * FROM `utilisateur`";
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

    public function deleteUtilisateur(int $id)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "DELETE FROM `utilisateur` WHERE IdU=" . $id . "";
            $query = $pdo->prepare($sql);
            $query->execute();
            echo $query->rowCount() . " records deleted";
        } catch (PDOException $e) {
            echo "error add: " . $e->getMessage();
        }
    }

    public function addUtilisateur($Utilisateur)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "INSERT INTO `utilisateur`(`IdU`, `Nom`, `Prenom`, `Email`, `Mdp`, `Dob`, `Perm`) 
            VALUES (:idu, :nom, :prenom, :email, :mdp, :dob, :perm)";
            $query = $pdo->prepare($sql);
            $query->execute([
                "idu" => $Utilisateur->getIdU(),
                "nom" => $Utilisateur->getNom(),
                "prenom" => $Utilisateur->getPrenom(),
                "email" => $Utilisateur->getEmail(),
                "mdp" => $Utilisateur->getMdp(),
                "dob" => $Utilisateur->getDob(),
                "perm" => $Utilisateur->getPerm()
            ]);
        } catch (PDOException $e) {
            echo "Ajout Echouer: " . $e->getMessage();
        }
    }

    public function findUtilisateurById($id)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "SELECT * FROM `utilisateur` WHERE IdU=" . $id . "";
            $query = $pdo->prepare($sql);
            $query->execute();
            $result = $query->fetch();
            return $result;
        } catch (PDOException $e) {
            echo "Pas de Livraison: " . $e->getMessage();
        }
    }

    public function updateUtilisateur($Utilisateur, $id)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "UPDATE `utilisateur` SET `IdU`=:iduu, `Nom`=:nom,`Prenom`=:prenom,`Email`=:email,`Mdp`=:mdp,`Dob`=:dob,`Perm`=:perm WHERE IdU=:id_u";
            $query = $pdo->prepare($sql);
            $query->execute([
                "iduu" => $Utilisateur->getIdU(),
                "nom" => $Utilisateur->getNom(),
                "prenom" => $Utilisateur->getPrenom(),
                "email" => $Utilisateur->getEmail(),
                "mdp" => $Utilisateur->getMdp(),
                "dob" => $Utilisateur->getDob(),
                "perm" => $Utilisateur->getPerm(),
                "id_u" => $id
            ]);
        } catch (PDOException $e) {
            echo "Modification Echouer: " . $e->getMessage();
        }
    }
}
