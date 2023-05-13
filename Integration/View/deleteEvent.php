<?php
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/EventC.php';
include '../Controller/EventC.php';
$valeur_id = $_GET['val_id'];
$eventC = new EventC();
if (isset($_GET['idEvent']) && !empty($_GET['idEvent'])) {

    echo "idEvent event: " . $_GET['idEvent'];
    $eventC->deleteEvent($_GET['idEvent']);
    header('location:listEvent.php?val_id=' . urlencode($valeur_id));
} else {
    echo "idEvent is not defined";
}
?>
