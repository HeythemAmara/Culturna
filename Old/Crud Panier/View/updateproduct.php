<?php

include '../Controller/productC.php';

$error = "";

// create product
$product = null;

// create an instance of the controller
$productC = new productC();
if (
    isset($_POST["id"]) &&
    isset($_POST["name"]) &&
    isset($_POST["description"]) &&
    isset($_POST["price"]) &&
    isset($_FILES["image"])
) {
    if (
        !empty($_POST["id"]) &&
        !empty($_POST['name']) &&
        !empty($_POST["description"]) &&
        !empty($_POST["price"]) &&
        !empty($_FILES["image"])
    ) {
        $product = new product(
            $_POST['id'],
            $_POST['name'],
            $_POST['description'],
            $_POST['price'],
            $_FILES['image']['name']
        );
        $productC->updateProduct($product, $_POST["id"]);
        header('Location:ListProduct.php');
    } else {
        $error = "Missing information";
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Display</title>
</head>
<body>
    <button><a href="ListProduct.php">Back to list</a></button>
    <hr>
    <div id="error">
    <?php echo $error; ?>
</div>

<?php
if (isset($_POST['id'])) {
    $product = $productC->showProduct($_POST['id']);

?>

<form action="updateproduct.php" method="POST" enctype="multipart/form-data">
        <table border="1" align="center">
            <tr>
                <td>
                    <label for="id">Id Product:
                    </label>
                </td>
                <td><input type="text" name="id" id="id" value="<?php echo $product['id']; ?>" readonly></td>
</tr>
<tr>
<td>
<label for="name">Name Product:
</label>
</td>
<td><input type="text" name="name" id="name" value="<?php echo $product['name']; ?>"></td>
</tr>
<tr>
<td>
<label for="description">Description:
</label>
</td>
<td><input type="text" name="description" id="description" value="<?php echo $product['description']; ?>"></td>
</tr>
<tr>
<td>
<label for="price">Price:
</label>
</td>
<td><input type="number" name="price" id="price" value="<?php echo $product['price']; ?>"></td>
</tr>
<tr>
<td>
<label for="image">Image:
</label>
</td>
<td><input type="file" name="image" id="image"></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Update">
</td>
</tr>
</table>
</form>

<?php
}
?>
</body>
</html>
