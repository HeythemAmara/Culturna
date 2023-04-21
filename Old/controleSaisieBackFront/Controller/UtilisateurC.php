<?php
include_once "../config.php";
include_once "../Model/Utilisateur.php";
class UtilisateurC
{

    public function listUtilisateur()
    {
        try 
        {
            $pdo = config::getConnexion();
            $sql = "SELECT * FROM `utilisateurs`";
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

    public function listUserId($var)
    {
        $sql = "SELECT * FROM utilisateurs where IdU = :var";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':var', $var);
        try {
            $req->execute();
            return $req;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function deleteUtilisateur(int $id)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "DELETE FROM `utilisateurs` WHERE IdU=" . $id . "";
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
            $sql = "INSERT INTO `utilisateurs`(`IdU`, `Username`,`Email`, `Mdp`, `Dob`, `Perm`) 
            VALUES (:idu, :Username, :email, :mdp, :dob, :perm)";
            $query = $pdo->prepare($sql);
            $query->execute([
                "idu" => $Utilisateur->getIdU(),
                "Username" => $Utilisateur->getUsername(),
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
            $sql = "SELECT * FROM `utilisateurs` WHERE IdU=" . $id . "";
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
            $sql = "UPDATE `utilisateurs` SET `Username`=:Username,`Email`=:email,`Mdp`=:mdp,`Dob`=:dob,`Perm`=:perm WHERE IdU=:id_u";
            $query = $pdo->prepare($sql);
            $query->execute([
                "Username" => $Utilisateur->getUsername(),
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

    public function login($Username,$Mdp)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "INSERT INTO `utilisateurs`(`IdU`, `Username`,`Email`, `Mdp`, `Dob`, `Perm`) 
            VALUES (:IdU, :Username, :email, :mdp, :dob, :perm)";
            $query = $pdo->prepare($sql);
            $query->execute([
                "IdU" => 9999999,
                "Username" => $Username,
                "email" => "NULL",
                "mdp" => $Mdp,
                "dob" => "NULL",
                "perm" => "NULL"
            ]);
            echo " mich mawjouda ";
            $sqll = "DELETE FROM `utilisateurs` WHERE IdU=" . 9999999 . "";
            $queryy = $pdo->prepare($sqll);
            $queryy->execute();
            echo $queryy->rowCount() . " records deleted";
            
            return 0;
        } catch (PDOException) {
            echo " mawjouda     ";
            try 
        {
            $pdo = config::getConnexion();
            $sql = "SELECT * FROM `utilisateurs` where Username=" . $Username ."";
            $query = $pdo->prepare($sql);
            $query->execute();
            $result = $query->fetchAll();
            foreach ($result as $User) 
        {
            echo $User['IdU'];
        }
            return $User['IdU'];
        }
        catch (PDOException $e) 
        {
            echo "error add: " . $e->getMessage();
            return 0;
        }
        }
    }

    public function nomUtilisateur($Id)
    {
        try 
        {
            $pdo = config::getConnexion();
            $sql = "SELECT * FROM `utilisateurs` where IdU=" . $Id . "";
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


    public function inscripUtilisateur($Utilisateur)
    {
        try {
            $pdo = config::getConnexion();
            $sql = "INSERT INTO `utilisateurs`(`IdU`, `Username`,`Email`, `Mdp`, `Dob`, `Perm`) 
            VALUES (:idu, :Username, :email, :mdp, :dob, :perm)";
            $query = $pdo->prepare($sql);
            $query->execute([
                "idu" => $Utilisateur->getIdU(),
                "Username" => $Utilisateur->getUsername(),
                "email" => $Utilisateur->getEmail(),
                "mdp" => $Utilisateur->getMdp(),
                "dob" => $Utilisateur->getDob(),
                "perm" => $Utilisateur->getPerm()
            ]);
            echo $Utilisateur->getIdU();
            return $Utilisateur->getIdU();

        } catch (PDOException $e) {
            echo "Ajout Echouer: " . $e->getMessage();
        }
            
    }

    //hereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee

    public function updateNomUser($Utilisateur, $id)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "UPDATE `utilisateurs` SET `Username`=:Username WHERE IdU=:id_u";
            $query = $pdo->prepare($sql);
            $query->execute([
                "Username" => $Utilisateur->getUsername(),
                "id_u" => $id
            ]);
        } catch (PDOException $e) {
            echo "Modification Echouer: " . $e->getMessage();
        }
    }

    public function updateMailUser($Utilisateur, $id)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "UPDATE `utilisateurs` SET `Email`=:email WHERE IdU=:id_u";
            $query = $pdo->prepare($sql);
            $query->execute([
                "email" => $Utilisateur->getEmail(),
                "id_u" => $id
            ]);
        } catch (PDOException $e) {
            echo "Modification Echouer: " . $e->getMessage();
        }
    }

    public function updateDobUser($Utilisateur, $id)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "UPDATE `utilisateurs` SET `Dob`=:dob WHERE IdU=:id_u";
            $query = $pdo->prepare($sql);
            $query->execute([
                "dob" => $Utilisateur->getDob(),
                "id_u" => $id
            ]);
        } catch (PDOException $e) {
            echo "Modification Echouer: " . $e->getMessage();
        }
    }
}
