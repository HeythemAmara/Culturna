<?php
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/ReservationC.php';
include '../Controller/ReservationC.php';

$ReservationC = new ReservationC();
var_dump($_POST);

if (
    isset($_POST['idEventu']) &&
    isset($_POST['nameu']) &&
    isset($_POST['emailu']) &&
    isset($_POST['nbrPlaceu']) &&
    isset($_POST['numu']) &&
    isset($_POST['idClientu']) 
   ) 
   {
    if (
        !empty($_POST['idEventu']) &&
        !empty($_POST['nameu']) &&
        !empty($_POST['emailu']) &&
        !empty($_POST['nbrPlaceu']) &&
        !empty($_POST['numu']) &&
        !empty($_POST['idClientu'])

       ) 
       {
       $r = $ReservationC->findReservById($_POST['idReservu']);
        $Reservation = new Reservation(
            $_POST['idEventu'],
            $_POST['nameu'],
            $_POST['emailu'],
            $_POST['nbrPlaceu'],
            $_POST['numu'],
            $_POST['idClientu']
            );
        $ReservationC = new ReservationC();
        $ReservationC->updateReservation($Reservation, $_POST['idReservu']);
        header('location:listReserv.php');
        } 
    else 
        {
            header('location:listReserv.php');
        }
    }
else 
    {
        header('location:listReserv.php');
    }
?>