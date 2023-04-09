
<?php
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/EventC.php';
include '../Controller/EventC.php';

$EventC = new EventC();
var_dump($_POST);
if (
    isset($_POST['typeu']) &&
    isset($_POST['nameu']) &&
    isset($_POST['timeu']) &&
    isset($_POST['dateu']) &&
    isset($_POST['prixu']) &&
    isset($_POST['imageu'])&&
    isset($_POST['nbrPlaceMaxu'])

   ) 
   {
    if (
        !empty($_POST['nameu']) &&
        !empty($_POST['typeu']) &&
        !empty($_POST['timeu']) &&
        !empty($_POST['dateu']) &&
        !empty($_POST['prixu']) &&
        !empty($_POST['imageu'])&&
        !empty($_POST['nbrPlaceMaxu'])

       ) 
       {
        $r = $EventC->findEventById($_POST['idEvent']);
        $Event = new Event(
            $_POST['nameu'],
            $_POST['typeu'],
            $_POST['timeu'],
            $_POST['dateu'],
            $_POST['prixu'],
            $_POST['imageu'],
            $_POST['nbrPlaceMaxu']

            );
        $EventC = new EventC();
        $EventC->updateEvent($Event, $_POST['idEvent']);
        header('location:listEvent.php');
        } 
    else 
        {
            header('location:listEvent.php');
        }
    }
else 
    {
        header('location:listEvent.php');
    }
?>