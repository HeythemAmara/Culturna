<?php
include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/config.php';
include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Model/Event.php';
class EventC
{
    public function listEvent()
    {
        $sql = "SELECT * FROM event";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteEvent($idEvent)
    {
        $sql = "DELETE FROM event WHERE idEvent = :idEvent";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idEvent', $idEvent);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addEvent($Event)
    {
        $sql = "INSERT INTO event  
        VALUES (NULL, :ln, :dob, :tm, :dt, :ad, :im)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([

                'ln' => $Event->getName(),
                'dob' => $Event->gettype(),
                'tm' => $Event->getTime(),
                'dt' => $Event->getDate(),
                'ad' => $Event->getPrix(),
                'im' => $Event->getImage()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateEvent($Event, $idEvent)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE event SET 
                    name = :name,
                    type = :type, 
                    time = :time,
                    date = :date,
                    prix = :prix,
                    image = :image 
                WHERE idEvent= :idEvent'
            );
            $query->execute([
                'idEvent' => $idEvent,
                'name' => $Event->getName(),
                'type' => $Event->gettype(),
                'time' =>$Event->getTime(),
                'date' =>$Event->getDate(),
                'prix' =>$Event->getPrix(),
                'image' =>$Event->getImage()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    /*public function updateLivraison($Livraison, $id)
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
    }*/


    function findEventById($idEvent)
    {
        $sql = "SELECT * from event where idEvent = $idEvent";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $Event = $query->fetch();
            return $Event;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
?>