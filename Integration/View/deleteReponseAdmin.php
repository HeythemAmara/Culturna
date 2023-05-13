<?php
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/ReservationC.php';
include '../Controller/ReponseC.php';
$reponseC = new ReponseC();
if (isset($_GET['Idr']) && !empty($_GET['Idr'])) {

    echo "id Reserv: " . $_GET['Idr'];
    $reponseC->deleteReponse($_GET['Idr']);
    header('location:listReclamation.php');
   


} else {
    echo "id is not defined";
}

?>
<script src="./assets/JS/InputControl.js"></script>
