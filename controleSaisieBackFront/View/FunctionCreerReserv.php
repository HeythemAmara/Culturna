
<?php
include '../Controller/ReservationC.php';
include '../Controller/EventC.php';

$test=2;
echo $_POST['dateeventa'];
var_dump($_POST);
if (
    isset($_POST['idEventa']) &&
    isset($_POST['namea']) &&
    isset($_POST['emaila']) &&
    isset($_POST['idclienta']) &&
    isset($_POST['nbrPlacea']) &&
    isset($_POST['numa']) 

   ) 
{
    if (
        !empty($_POST['idEventa']) &&
        !empty($_POST['namea']) &&
        !empty($_POST['emaila']) &&
        !empty($_POST['idclienta']) &&
        !empty($_POST['nbrPlacea']) &&
        !empty($_POST['numa']) 
       ) 
        {
        $Reservation = new Reservation(
            $_POST['idEventa'],
            $_POST['namea'],
            $_POST['emaila'],
            $_POST['nbrPlacea'],
            $_POST['numa'],
            $_POST['idclienta']
            );
        $ReservationC = new ReservationC();
        $ReservationC->addReservation($Reservation);
        $test=1;
        header('location:Page_Transp_Event.php?val_id=' . $_POST['idclienta'].'&creationreserv='.$test .'&dateevent='.$_POST['dateeventa'] .'&nbrpersonne='.$_POST['nbrPlacea']);
        echo "done";
        } 
    else 
        {
        header('location:Page_Transp_Event.php?val_id=' . $_POST['idclienta'].'&creationreserv='.$test .'&dateevent='.$_POST['dateeventa'] .'&nbrpersonne='.$_POST['nbrPlacea']);
        echo "nope1";
        }
    }
else 
    {
        header('location:Page_Transp_Event.php?val_id=' . $_POST['idclienta'].'&creationreserv='.$test .'&dateevent='.$_POST['dateeventa'] .'&nbrpersonne='.$_POST['nbrPlacea']);
        echo "nope2";
    }
?>