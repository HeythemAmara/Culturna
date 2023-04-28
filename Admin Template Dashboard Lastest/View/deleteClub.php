<?php
include '../Controller/ClubC.php';
$ClubC = new ClubC();
if (isset($_GET['id_Club']) && !empty($_GET['id_Club'])) {

    echo "id_Club Club: " . $_GET['id_Club'];
    $ClubC->deleteClub($_GET['id_Club']);
    header('location:listClubNew.php');
} else {
    echo "id_Club is not defined";
}
?>
