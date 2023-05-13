<?php
include_once "../Controller/ReclamationC.php";
$valeur_id = isset($_GET['val_id']) ? $_GET['val_id'] : 0;
$ReclamationC = new ReclamationC();
if (isset($_GET['id_R']) && !empty($_GET['id_R'])) {

    echo "id Reclamation: " . $_GET['id_R'];
    $ReclamationC->deleteReclamation($_GET['id_R']);
    header('location:Page_Reclamation.php?val_id=' . $valeur_id);
} else {
    echo "id is not defined";
    header('location:Page_Reclamation.php?val_id=' . $valeur_id);
}
?>

