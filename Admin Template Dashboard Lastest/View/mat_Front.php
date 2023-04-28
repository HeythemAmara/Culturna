<?php
include_once '../Controller/MatC.php';

if (isset($_GET['id'])) {
    $id_Club = $_GET['id'];
    $MaterielC = new MaterielC();
    $listMateriel = $MaterielC->getMaterielsByClub($id_Club);

    // Afficher les matériels sous forme de liste
    echo "<ul>";
    foreach ($listMateriel as $Materiel) {
        echo "<li>" . $Materiel['nom_M'] . "</li>";
    }
    echo "</ul>";
}
?>