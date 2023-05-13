<?php
include '../Controller/cartC.php';
$cateC = new CarteC();
$cateC->deleteCart($_GET["idc"]);
header('Location:Page_Produit.php');
?>