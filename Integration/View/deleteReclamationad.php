<?php
include_once "../Controller/ReclamationC.php";

$ReclamationC = new ReclamationC();
if (isset($_GET['id_R']) && !empty($_GET['id_R'])) {

    echo "id Reclamation: " . $_GET['id_R'];
    $ReclamationC->deleteReclamation($_GET['id_R']);
    $message = "Done!";
    echo "<script>alert('$message');</script>";
    header('location:listReclamation.php');

} else {
    echo "id is not defined";
    header('location:listReclamation.php');

}
?>

