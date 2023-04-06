<?php
include '../Controller/cartC.php';
$cateC = new CarteC();
$cateC->deleteCart($_GET["id"]);
header('Location:panier.php');
?>