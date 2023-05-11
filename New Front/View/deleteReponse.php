<?php
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/ReservationC.php';
include '../Controller/ReponseC.php';
$valeur_id = isset($_GET['val_id']) ? $_GET['val_id'] : 0;

$reponseC = new ReponseC();
if (isset($_GET['Idr']) && !empty($_GET['Idr'])) {

    echo "id Reserv: " . $_GET['Idr'];
    $reponseC->deleteReponse($_GET['Idr']);
    header('location:Page_Reponse.php?val_id=' . $valeur_id);
} else {
    echo "id is not defined";
}
?>
