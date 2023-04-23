
<?php
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/ReservationC.php';
include '../Controller/TransportC.php';
//$_POST['prixeventa']
$test=2;
var_dump($_POST);
if (
    isset($_POST['nbrPlacea']) &&
    isset($_POST['Typea']) &&
    isset($_POST['idcha']) &&
    isset($_POST['namea']) &&
    isset($_POST['dateeventa']) &&
    isset($_POST['adressea']) &&
    isset($_POST['idclienta']) &&
    isset($_POST['numa']) &&
    isset($_POST['Notea']) 

   ) 
{
    if (
        !empty($_POST['nbrPlacea']) &&
        !empty($_POST['Typea']) &&
        !empty($_POST['idcha']) &&
        !empty($_POST['namea']) &&
        !empty($_POST['dateeventa']) &&
        !empty($_POST['adressea']) &&
        !empty($_POST['idclienta']) &&
        !empty($_POST['numa']) &&
        !empty($_POST['Notea']) 
       ) 
        {
        $Transport = new Transport(
            $_POST['idclienta'] ,
            $_POST['idcha'] ,
            $_POST['Typea'] ,
            $_POST['nbrPlacea'] ,
            $_POST['dateeventa'] ,
            $_POST['adressea'] ,
            $_POST['namea'] ,
            $_POST['numa'] ,
            $_POST['Notea']
            );
        $TransportC = new TransportC();
        $TransportC->addTransport($Transport);
        $test=1;
        header('location:Page_Evenement.php?val_id=' . $_POST['idclienta'].'&creationreserv='.$test .'&dateevent='.$_POST['dateeventa'] .'&nbrpersonne='.$_POST['nbrPlacea']);
        echo "done";
        } 
    else 
        {
        header('location:Page_Evenement.php?val_id=' . $_POST['idclienta'].'&creationreserv='.$test .'&dateevent='.$_POST['dateeventa'] .'&nbrpersonne='.$_POST['nbrPlacea']);
        echo "nope1";
        }
    }
else 
    {
        header('location:Page_Evenement.php?val_id=' . $_POST['idclienta'].'&creationreserv='.$test .'&dateevent='.$_POST['dateeventa'] .'&nbrpersonne='.$_POST['nbrPlacea']);
        echo "nope2";
    }
?>