<?php
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/ReservationC.php';
include '../Controller/ReservationC.php';
include '../Controller/EventC.php';

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

            $EventC = new EventC();
            $nbrplacemax=$EventC->nbrplace($_POST['idEventu']);
        
        if( $nbrplacemax >=  $_POST['nbrPlaceu'] )
        {
           $ReservationC = new ReservationC();
           $ReservationC->updateReservationpourclient($Reservation, $_POST['idReservu']);
           $EventC->DeccEvent($_POST['idEventu'], $_POST['nbrPlaceu']);
           $ReservationC->updateReservationPrice($_POST['idEventu']);
           header('location:Page_Reservation.php?val_id=' . $valeur_id.'&ajoutfail='. 0 );
        }
        else
        {
            header('location:Page_Reservation.php?val_id=' . $valeur_id.'&ajoutfail='. 1 );
        }
    
    } 
    else 
        {
            header('location:Page_Reservation.php?val_id=' . $valeur_id.'&ajoutfail='. 1 );
        }
    }
else 
    {
        header('location:Page_Reservation.php?val_id=' . $valeur_id.'&ajoutfail='. 1 );
    }
?>