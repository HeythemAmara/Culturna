<?php
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/ReservationC.php';
include '../Controller/ReservationC.php';
include '../Controller/EventC.php';

$valeur_id = $_GET['val_id'];

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



            $EventC = new EventC();
            $nbrplacemax=$EventC->nbrplace($_POST['idEventu']);
            
             if( $nbrplacemax >=  $_POST['nbrPlaceu'] )
             {
                $ReservationC = new ReservationC();
                $ReservationC->updateReservation($Reservation, $_POST['idReservu']);
                $EventC->DeccEvent($_POST['idEventu'], $_POST['nbrPlaceu']);
                $ReservationC->updateReservationPrice($_POST['idEventu']);
                header('location:listEvent.php?val_id=' . $valeur_id.'&ajoutfail='. 0 );
             }
             else
             {
                header('location:listEvent.php?val_id=' . $valeur_id.'&ajoutfail='. 1 );
             }

        } 
    else 
        {
            header('location:listEvent.php?val_id=' . $valeur_id.'&ajoutfail='. 1 );
        }
    }
else 
    {
        header('location:listEvent.php?val_id=' . $valeur_id.'&ajoutfail='. 1 );
    }
?>