
<?php
include_once "../Model/products.php";
include_once "../Controller/productC.php";
$productC = new ProductC();
var_dump($_POST);
if (
    isset($_POST['id']) &&
    isset($_POST['nameuu']) &&
    isset($_POST['descriptionu']) &&
    isset($_POST['priceu']) &&
    isset($_FILES['imageu'])&&
    isset($_POST['quantity_dispu'])

   ) 
   {
    if (
        !empty($_POST['id']) &&
        !empty($_POST['nameuu']) &&
        !empty($_POST['descriptionu']) &&
        !empty($_POST['priceu']) &&
        !empty($_FILES["imageu"])&&
        !empty($_POST['quantity_dispu'])
       ) 
       {
        $r = $productC->findproduitById($_POST['id']);
        $Product = new Product(
            $_POST['id'],
            $_POST['nameuu'],
            $_POST['descriptionu'],
            $_POST['priceu'],
            $_FILES['imageu']['name'],
            $_POST['quantity_dispu']
            
            );
            $productC = new ProductC();
        $productC->updateProduct($Product, $_POST['id']);
        header('location:ListProduct.php');
        } 
    else 
        {
            header('location:ListProduct.php');
        }
    }
else 
    {
        header('location:ListProduct.php');
    }
?>