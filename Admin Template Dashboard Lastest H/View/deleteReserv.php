<?php
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/ReservationC.php';
include '../Controller/ReservationC.php';
$reservationC = new ReservationC();
if (isset($_GET['idReserv']) && !empty($_GET['idReserv'])) {

    echo "id Reserv: " . $_GET['idReserv'];
    $reservationC->deleteReservation($_GET['idReserv']);
    header('location:listReserv.php');
} else {
    echo "id is not defined";
}
?>
