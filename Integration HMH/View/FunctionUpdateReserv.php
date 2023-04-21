<?php
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/ReservationC.php';
include '../Controller/ReservationC.php';

$ReservationC = new ReservationC();
var_dump($_POST);
$valeur_id=$_POST['idclienta'];

if (
    isset($_POST['nameu']) &&
    isset($_POST['emailu']) &&
    isset($_POST['nbrPlaceu']) &&
    isset($_POST['numu'])
   ) 
   {
    if (
        !empty($_POST['nameu']) &&
        !empty($_POST['emailu']) &&
        !empty($_POST['nbrPlaceu']) &&
        !empty($_POST['numu'])

       ) 
       {
       $r = $ReservationC->findReservById($_POST['idReservu']);
        $Reservation = new Reservation(
            NULL,
            $_POST['nameu'],
            $_POST['emailu'],
            $_POST['nbrPlaceu'],
            $_POST['numu'],
            NULL
            );
        $ReservationC = new ReservationC();
        $ReservationC->updateReservationpourclient($Reservation, $_POST['idReservu']);
        header('location:Page_Reservation.php?val_id=' . urlencode($valeur_id));
        } 
    else 
        {
            header('location:Page_Reservation.php?val_id=' . urlencode($valeur_id));
        }
    }
else 
    {
        header('location:Page_Reservation.php?val_id=' . urlencode($valeur_id));
    }
?>