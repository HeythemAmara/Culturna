<?php
include_once '../config.php';
include '../Model/Reponse.php';
class ReponseC
{
    public function listReponse()
    {
        $sql = "SELECT * FROM reponse";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function addReponse($Reponse)
    {
        try {
            
            
            $pdo = config::getConnexion();
            $sql = "INSERT INTO reponse 
            VALUES(NULL, :SujetRepons, :mr, :idr, :idc)";
            $query = $pdo->prepare($sql);
            $query->execute([
                'SujetRepons' => $Reponse->getSujetReponse(),
                'mr' => $Reponse->getMessageReponse(),
                'idr' => $Reponse->getIdRleclamation(),
                'idc' => $Reponse->getIdClient()  
            ]);
        } catch (PDOException $e) {
            echo "Ajout Echouer: " . $e->getMessage();
        }
    }

    public function listReponseidClient(string $idClient)
    {
        $sql = "SELECT * FROM reponse WHERE idClient='$idClient'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    function findReponseById($idReponse)
    {
        $sql = "SELECT * from reponse where Idr = $idReponse";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $Reponse = $query->fetch();
            return $Reponse;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    function deleteReponse($idReponse)
    {
        $sql = "DELETE FROM reponse WHERE Idr = :idReponse";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idReponse', $idReponse);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

   
    function updateReponse($Reponse, $idReponse)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE reponse SET 
                    Idr = :idReponse,
                    SujetReponse = :SujetReponse, 
                    MessageReponse = :MessageReponse,
                    IdReclamation = :IdReclamation,
                    IdClient = :IdClient

                WHERE Idr= :idReponse'
            );
            $query->execute([
                'idReponse' => $Reponse->getidReponse(),
                'SujetReponse' => $Reponse->getSujetReponse(),
                'MessageReponse' =>$Reponse->getMessageReponse(),
                'IdReclamation' =>$Reponse->getIdRleclamation(),
                'IdClient' =>$Reponse->getIdClient()


            ]);
            echo $query->rowCount() . " records UPDATE  successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }



}
?>