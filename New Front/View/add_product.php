<?php
include_once "../Model/products.php";
include_once "../Controller/productC.php";
$error = "";
$product = null;
$productC = new productC();


if (isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["price"]) && isset($_FILES["image"]) && isset($_POST["quantity_disp"])) {
    if (!empty($_POST['name']) && !empty($_POST["description"]) && !empty($_POST["price"]) && !empty($_POST["quantity_disp"])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_extensions = array("jpg", "jpeg", "png", "gif");

        if (in_array($imageFileType, $allowed_extensions)) {
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

            $product = new Product(
                null,
                $_POST['name'],
                $_POST['description'],
                $_POST['price'],
                $target_file,
                $_POST['quantity_disp']
            );

            $productC->addProduct($product);
            header('Location:ListProduct.php');
        } else {
            $error = "Invalid image file type. Allowed types: " . implode(", ", $allowed_extensions);
        }
    } else {
        $error = "Missing information";
    }
}
?>