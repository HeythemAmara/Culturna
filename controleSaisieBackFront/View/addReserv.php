
<?php
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/ReservationC.php';
include '../Controller/ReservationC.php';
$valeur_id = $_GET['val_id'];

var_dump($_POST);
if (
    isset($_POST['idEventa']) &&
    isset($_POST['namea']) &&
    isset($_POST['emaila']) &&
    isset($_POST['nbrPlacea']) &&
    isset($_POST['numa']) &&
    isset($_POST['idClienta'])
   ) 
{
    if (
        !empty($_POST['idEventa']) &&
        !empty($_POST['namea']) &&
        !empty($_POST['emaila']) &&
        !empty($_POST['nbrPlacea']) &&
        !empty($_POST['numa'])&&
        !empty($_POST['idClienta'])
       ) 
        {
        $Reservation = new Reservation(
            $_POST['idEventa'],
            $_POST['namea'],
            $_POST['emaila'],
            $_POST['nbrPlacea'],
            $_POST['numa'],
            $_POST['idClienta']
            );
        $ReservationC = new ReservationC();
        $ReservationC->addReservation($Reservation);
        header('location:listEvent.php?val_id=' . urlencode($valeur_id));
        } 
    else 
        {
        header('location:listEvent.php?val_id=' . urlencode($valeur_id));
        }
    }
else 
    {
        header('location:listEvent.php?val_id=' . urlencode($valeur_id));
    }
?>