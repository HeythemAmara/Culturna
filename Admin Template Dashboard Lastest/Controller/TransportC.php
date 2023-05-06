<?php
include_once "../config.php";
include_once "../Model/Transport.php";

//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDLIVRAISON/config.php';
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDLIVRAISON/Model/Transport.php';

class TransportC
{

    public function listTransport()
    {
        try 
        {
            $pdo = config::getConnexion();
            $sql = "SELECT * FROM `transport`";
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

    public function listTransportpourclient($var)
    {
        $sql = "SELECT Id_T , Type, Nbr_Pers, Date, Adresse, Nom, Tel, Message FROM transport where idClient = :var";
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

    public function deleteTransport(int $id)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "DELETE FROM `transport` WHERE Id_T=" . $id . "";
            $query = $pdo->prepare($sql);
            $query->execute();
            echo $query->rowCount() . " records deleted";
        } catch (PDOException $e) {
            echo "error add: " . $e->getMessage();
        }
    }

    function addTransport($Transport)
    {
        $sql = "INSERT INTO transport  
        VALUES (NULL, :IdClient, :Id_Ch, :Type, :Nbr_Pers, :Date, :Adresse, :Nom, :Tel ,:Message)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([

                'IdClient' => $Transport->getIdClient(),
                'Id_Ch' => $Transport->getId_Ch(),
                'Type' => $Transport->getType(),
                'Nbr_Pers' => $Transport->getNbr_Pers(),
                'Date' => $Transport->getDate(),
                'Adresse' => $Transport->getAdresse(),
                'Nom' => $Transport->getNom(),
                'Tel' => $Transport->getTel(),
                'Message' => $Transport->getMessagee()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    public function findTransportById($id)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "SELECT * FROM `transport` WHERE Id_T=" . $id . "";
            $query = $pdo->prepare($sql);
            $query->execute();
            $result = $query->fetch();
            return $result;
        } catch (PDOException $e) {
            echo "Pas de Transport: " . $e->getMessage();
        }
    }

    public function updateTransport($Transport, $id)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "UPDATE `transport` SET `IdClient`=:IdClient,`Id_Ch`=:Id_Ch,`Type`=:Type,`Nbr_Pers`=:Nbr_Pers,`Date`=:Date,`Adresse`=:Adresse, `Nom`=:Nom, `Tel`=:Tel ,`Message`=:Message WHERE Id_T=:Id_T";
            $query = $pdo->prepare($sql);
            $query->execute([
                "IdClient" => $Transport->getIdClient(),
                "Id_Ch" => $Transport->getId_Ch(),
                "Type" => $Transport->getType(),
                "Nbr_Pers" => $Transport->getNbr_Pers(),
                "Date" => $Transport->getDate(),
                'Adresse' => $Transport->getAdresse(),
                'Nom' => $Transport->getNom(),
                'Tel' => $Transport->getTel(),
                'Message' => $Transport->getMessagee(),
                "Id_T" => $id
            ]);
        } catch (PDOException $e) {
            echo "Modification Echouer: " . $e->getMessage();
        }
    }

    public function updateTransportpourclient($Transport, $id)
    {
        try {

            $pdo = config::getConnexion();
            $sql = "UPDATE `transport` SET `Type`=:Type,`Nbr_Pers`=:Nbr_Pers,`Date`=:Date,`Adresse`=:Adresse, `Nom`=:Nom, `Tel`=:Tel ,`Message`=:Message WHERE Id_T=:Id_T";
            $query = $pdo->prepare($sql);
            $query->execute([
                "Type" => $Transport->getType(),
                "Nbr_Pers" => $Transport->getNbr_Pers(),
                "Date" => $Transport->getDate(),
                'Adresse' => $Transport->getAdresse(),
                'Nom' => $Transport->getNom(),
                'Tel' => $Transport->getTel(),
                'Message' => $Transport->getMessagee(),
                "Id_T" => $id
            ]);
        } catch (PDOException $e) {
            echo "Modification Echouer: " . $e->getMessage();
        }
    }

    public function countStatType($Type)
    {
        try 
        {
            $pdo = config::getConnexion();
            $sql = "SELECT * FROM `transport` WHERE `Type` = :type";
            $query = $pdo->prepare($sql);
            $query->bindParam(':type', $Type);
            $query->execute();
            $count = $query->rowCount();
            return $count;
        }
        catch (PDOException $e) 
        {
            echo "error add: " . $e->getMessage();
        }
    }
    
    public function countStatMonth($month)
    {
        try 
        {
            $pdo = config::getConnexion();
            $sql = "SELECT * FROM `transport` WHERE DATE_FORMAT(`Date`, '%m') = :month";
            $query = $pdo->prepare($sql);
            $query->bindParam(':month', $month);
            $query->execute();
            $count = $query->rowCount();
            return $count;
        }
        catch (PDOException $e) 
        {
            echo "error add: " . $e->getMessage();
        }
    }
    
    public function listTransportpourchauffeur($var)
    {
        $sql = "SELECT * FROM transport where Id_Ch = :var";
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
    
}