<?php
include '../Controller/MatC.php';
$MatC = new MaterielC();
if (isset($_GET['id_M']) && !empty($_GET['id_M'])) {

    echo "id_M materiel " . $_GET['id_M'];
    $MatC->deleteMateriel($_GET['id_M']);
    header('location:listClub.php');
} else {
    echo "id_M is not defined";
}

?>
