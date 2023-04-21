<?php
include '../Controller/productC.php';
$error = "";
$product = null;
$productC = new productC();

if (isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["price"]) && isset($_FILES["image"])) {
    if (!empty($_POST['name']) && !empty($_POST["description"]) && !empty($_POST["price"]) && !empty($_FILES["image"])) {
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
                $target_file
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
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="test.css">
</head>
<body>
    <h1>Admin Panel</h1>
    <div class="container">
        <h2>Add a Product</h2>
        <form action="add_product.php" method="POST" enctype="multipart/form-data">
            <table class="form-table">
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td><label for="description">Description:</label></td>
                    <td><textarea name="description" required></textarea></td>
                </tr>
                <tr>
                    <td><label for="price">Price:</label></td>
                    <td><input type="number" name="price" step="0.00" min="0" required></td>
                </tr>
                <tr>
                    <td><label for="image">Image URL:</label></td>
                    <td><input type="file" name="image" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Add Product"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>