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

    public function listEventtype(string $typee,$trie)
    {
        if($trie==0)
        {
            $sql = "SELECT * FROM event WHERE type='$typee' ";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch (Exception $e) {
                die('Error:' . $e->getMessage());
            }
        }
        else
        {
            $sql = "SELECT * FROM event WHERE type='$typee' ORDER BY date ASC";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch (Exception $e) {
                die('Error:' . $e->getMessage());
            }
        }
    }
    

    function deleteEvent($idEvent)
{
    $sql = "DELETE FROM event WHERE idEvent = :idEvent;
            DELETE FROM reservation WHERE idEvent = :idEvent 
            "; // Ajout de la suppression des réservations
    $db = config::getConnexion();
    $req = $db->prepare($sql);
    $req->bindValue(':idEvent', $idEvent);

    try {
        $req->execute();
    } catch (Exception $e) {
        die('Error:' . $e->getMessage());
    }
}
function deleteExpiredEvents()
{
    $sql = "DELETE FROM event WHERE CONCAT(date, ' ', time) < NOW()";
    $db = config::getConnexion();
    $req = $db->prepare($sql);

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
     function historiqueMail($idClient, $Date)
    {
        try {
            $pdo = config::getConnexion();
            $sql = "INSERT INTO `rappelevent`(`idClient`, `Date`)
                    VALUES (:idClient, :Date)";
            $query = $pdo->prepare($sql);
            $query->execute([
                "idClient" =>$idClient,
                "Date" => $Date
            ]);
            echo " mich mawjouda ";
            return 0;
        } catch (PDOException) { // Add variable name for catch block
            echo " mawjouda     ";
            return 1;
        }
    }
    public function DateEvent($id)
    {
        try 
        {
            $pdo = config::getConnexion();
                $sql = "SELECT * FROM `event` where idEvent=" . $id . "";
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

    function getDatesEvenements() {
        try 
        {
            $pdo = config::getConnexion();

            $requete = "SELECT date FROM event";
            $resultat = $pdo->query($requete);
            $evenements = array();
            while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
                $evenements[] = $ligne['date'];
            }
                $dates_evenements = array();
            foreach ($evenements as $evenement) {
                $date_evenement = new DateTime($evenement);
                $dates_evenements[] = $date_evenement->format('Y-m-d');
            }
        
            return $dates_evenements;
        }
        catch (PDOException $e) 
        {
            echo "error add: " . $e->getMessage();
            return 0;
        }  

    }
    function DeccEvent($idEventa, $nbrPlacea) {
        try {
            $db = config::getConnexion();
            $query = $db->prepare("
                UPDATE event 
                SET nbrPlaceMax = nbrPlaceMax - :nbrPlacea
                WHERE idEvent=:idEventa
            ");
            $query->execute([
                ':idEventa' => $idEventa,
                ':nbrPlacea' => $nbrPlacea
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
}
?>


