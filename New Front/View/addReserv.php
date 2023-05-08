
<?php
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/ReservationC.php';
include '../Controller/ReservationC.php';
include '../Controller/EventC.php';

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
            
            $EventC = new EventC();
            $nbrplacemax=$EventC->nbrplace($_POST['idEventa']);

                /*echo "Before:<br>";
                echo " nbrPlace In ".$_POST['nbrPlacea']."<br>";
                echo " nbrplace Out ".$nbrplacemax."<br>";*/
            
             if( $nbrplacemax >=  $_POST['nbrPlacea'] )
             {
                $ReservationC = new ReservationC();
                $ReservationC->addReservation($Reservation);
                $EventC->DeccEvent($_POST['idEventa'], $_POST['nbrPlacea']);
                $ReservationC->updateReservationPrice($_POST['idEventa']);
                header('location:listEvent.php?val_id=' . $valeur_id.'&ajoutfail='. 0 );
             }
             else
             {
                header('location:listEvent.php?val_id=' . $valeur_id.'&ajoutfail='. 1 );
             }

             /*echo "After:<br>";
                echo " nbrPlace In ".$_POST['nbrPlacea']."<br>";
                echo " nbrplace Out ".$nbrplacemax."<br>";*/
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