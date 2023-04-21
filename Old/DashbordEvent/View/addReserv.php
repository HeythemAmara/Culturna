
<?php
include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/ReservationC.php';
var_dump($_POST);
if (
    isset($_POST['idEventa']) &&
    isset($_POST['namea']) &&
    isset($_POST['emaila']) &&
    isset($_POST['nbrPlacea']) &&
    isset($_POST['numa']) 

   ) 
{
    if (
        !empty($_POST['idEventa']) &&
        !empty($_POST['namea']) &&
        !empty($_POST['emaila']) &&
        !empty($_POST['nbrPlacea']) &&
        !empty($_POST['numa']) 
       ) 
        {
        $Reservation = new Reservation(
            $_POST['idEventa'],
            $_POST['namea'],
            $_POST['emaila'],
            $_POST['nbrPlacea'],
            $_POST['numa']
            );
        $ReservationC = new ReservationC();
        $ReservationC->addReservation($Reservation);
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