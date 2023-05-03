<?php
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/config.php';
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Model/Reservation.php';
include_once '../config.php';
include '../Model/Reservation.php';

class reservationC
{
    public function listReservation()
    {
        $sql = "SELECT * FROM reservation";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function listReservationpourclient($var)
    {
        $sql = "SELECT * FROM reservation where idClient = :var";
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

    function deleteReservation($idReserv)
    {
        $sql = "DELETE FROM reservation WHERE idReserv = :idReserv";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idReserv', $idReserv);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addReservation($reservation)
    {
        $sql = "INSERT INTO reservation  
        VALUES (NULL, :idEvent, :ln, :ad, :em, :dob , :idc ,0)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([

                'idEvent'=>$reservation->getIdEvent(),
                'ln' => $reservation->getName(),
                'ad' => $reservation->getEmail(),
                'em' => $reservation->getnbrPlace(),
                'dob' => $reservation->getNum(),
                'idc' => $reservation->getIdClient()

            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateReservation($reservation, $idReserv)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE reservation SET 
                    idEvent = :idEvent,
                    name = :Name, 
                    email = :email, 
                    nbrPlace = :nbrPlace,
                    num = :num, 
                    idClient = :idClient
                WHERE idReserv= :idReserv'
            );
            $query->execute([
                'idReserv' => $idReserv,
                'idEvent' => $reservation->getIdEvent(),
                'Name' => $reservation->getName(),
                'email' => $reservation->getEmail(),
                'nbrPlace' =>$reservation->getnbrPlace(),
                'num' =>$reservation->getnum(),
                'idClient' => $reservation->getIdClient()

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function updateReservationpourclient($reservation, $idReserv)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE reservation SET 
                    name = :Name, 
                    email = :email, 
                    nbrPlace = :nbrPlace,
                    num = :num
                WHERE idReserv= :idReserv'
            );
            $query->execute([
                'idReserv' => $idReserv,
                'Name' => $reservation->getName(),
                'email' => $reservation->getEmail(),
                'nbrPlace' =>$reservation->getnbrPlace(),
                'num' =>$reservation->getnum()

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function findReservById($idReserv)
    {
        $sql = "SELECT * from reservation where idReserv = $idReserv";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $reservation = $query->fetch();
            return $reservation;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function DateReservation($id)
    {
        try 
        {
            $pdo = config::getConnexion();
                $sql = "SELECT * FROM `reservation` WHERE idClient=" . $id . " ORDER BY idReserv ASC LIMIT 1";
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
    /*function updateReservationPrice($idEvent, $prix) {
        try {
            $db = config::getConnexion();
            $query = $db->prepare("
                UPDATE reservation 
                SET prixReserv = nbrPlace * (
                    SELECT prix FROM event WHERE idEvent = :idEvent
                )
                WHERE idEvent = :idEvent
            ");
            $query->execute([
                ':idEvent' => $idEvent,
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }*/
    function updateReservationPrice($idEvent) {
        try {
            $db = config::getConnexion();
            
            $reservations = $db->prepare("SELECT idReserv, nbrPlace FROM reservation WHERE idEvent = :idEvent");
            $reservations->execute([':idEvent' => $idEvent]);
            
            $event = $db->prepare("SELECT prix FROM event WHERE idEvent = :idEvent");
            $event->execute([':idEvent' => $idEvent]);
            $prix = $event->fetchColumn();
            
            $query = $db->prepare("
                UPDATE reservation 
                SET prixReserv = :prix * nbrPlace
                WHERE idEvent = :idEvent AND idReserv = :idReserv
            ");
            
            foreach($reservations as $reservation) {
                $query->execute([
                    ':idEvent' => $idEvent,
                    ':idReserv' => $reservation['idReserv'],
                    ':prix' => $prix,
                ]);
            }
    
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    


}
?>
