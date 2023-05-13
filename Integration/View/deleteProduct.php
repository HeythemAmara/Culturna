<?php
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/EventC.php';
include '../Controller/productC.php';
$valeur_id = $_GET['val_id'];
$productC = new productC();
if (isset($_GET['id']) && !empty($_GET['id'])) {

    echo "idEvent event: " . $_GET['id'];
    $productC->deleteProduct($_GET["id"]);
    header('location:ListProduct.php?val_id=' . urlencode($valeur_id));
   

} else {
    echo "id product  is not defined";
}
?>
