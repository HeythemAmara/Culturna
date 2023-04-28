<?php
include '../Controller/MatC.php';
$MatC = new MaterielC();
if (isset($_GET['id_M']) && !empty($_GET['id_M'])) {

    echo "id_M materiel " . $_GET['id_M'];
    $MatC->deleteMateriel($_GET['id_M']);
    header('location:listMat_new.php');
} else {
    echo "id_M is not defined";
}
/*
<?php
include '../Controller/ClubC.php';
$ClubC = new ClubC();
if (isset($_GET['id_Club']) && !empty($_GET['id_Club'])) {

    echo "id_Club Club: " . $_GET['id_Club'];
    $ClubC->deleteClub($_GET['id_Club']);
    header('location:listClub.php');
} else {
    echo "id_Club is not defined";
}
?>



*/
?>
