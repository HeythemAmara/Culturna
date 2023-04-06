<?php
include '../Controller/productC.php';
$productC = new productC();
$productC->deleteProduct($_GET["id"]);
header('Location:ListProduct.php');
?>