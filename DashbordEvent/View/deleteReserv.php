<?php
include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/ReservationC.php';

$reservationC = new ReservationC();
if (isset($_GET['id']) && !empty($_GET['id'])) {

    echo "id event: " . $_GET['id'];
    $reservationC->deleteReservation($_GET['id']);
    header('location:listReserv.php');
} else {
    echo "id is not defined";
}
?>
.