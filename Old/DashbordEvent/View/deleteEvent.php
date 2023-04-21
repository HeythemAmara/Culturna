<?php
include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/EventC.php';
$eventC = new EventC();
if (isset($_GET['idEvent']) && !empty($_GET['idEvent'])) {

    echo "idEvent event: " . $_GET['idEvent'];
    $eventC->deleteEvent($_GET['idEvent']);
    header('location:listEvent.php');
} else {
    echo "idEvent is not defined";
}
?>
