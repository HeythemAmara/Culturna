<?php
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/config.php';
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Model/Event.php';

include_once '../config.php';
include '../Model/Event.php';
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

    public function listEventtype(string $typee)
    {
        $sql = "SELECT * FROM event WHERE type='$typee'";
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
        VALUES (NULL, :ln, :dob, :tm, :dt, :ad, :im, :nb)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([

                'ln' => $Event->getName(),
                'dob' => $Event->gettype(),
                'tm' => $Event->getTime(),
                'dt' => $Event->getDate(),
                'ad' => $Event->getPrix(),
                'im' => $Event->getImage(),
                'nb' => $Event->getNbrPlaceMax()

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
                    image = :image,
                    nbrPlaceMax = :nbrPlaceMax 

                WHERE idEvent= :idEvent'
            );
            $query->execute([
                    'name' => $Event->getName(),
                'type' => $Event->gettype(),
                'time' =>$Event->getTime(),
                'date' =>$Event->getDate(),
                'prix' =>$Event->getPrix(),
                'image' =>$Event->getImage(),
                'nbrPlaceMax' =>$Event->getNbrPlaceMax(),
                'idEvent' => $idEvent


            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


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