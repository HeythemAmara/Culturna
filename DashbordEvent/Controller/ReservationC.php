<?php
include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/config.php';
include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Model/Reservation.php';

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
        VALUES (NULL, :idEvent, :ln, :ad, :em, :dob)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([

                'idEvent'=>$reservation->getIdEvent(),
                'ln' => $reservation->getName(),
                'ad' => $reservation->getEmail(),
                'em' => $reservation->getnbrPlace(),
                'dob' => $reservation->getNum()
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
                    num = :num 
                WHERE idReserv= :idReserv'
            );
            $query->execute([
                'idReserv' => $idReserv,
                'idEvent' => $reservation->getIdEvent(),
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
}
?>
