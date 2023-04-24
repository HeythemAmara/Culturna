<?php
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/ReservationC.php';
include '../Controller/ReservationC.php';
$valeur_id = $_GET['val_id'];
$reservationC = new ReservationC();
if (isset($_GET['idReserv']) && !empty($_GET['idReserv'])) {

    echo "id Reserv: " . $_GET['idReserv'];
    $reservationC->deleteReservation($_GET['idReserv']);
    header('location:listEvent.php?val_id=' . urlencode($valeur_id));
} else {
    echo "id is not defined";
}
?>
