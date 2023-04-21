<?php
include '../Controller/productC.php';
$error = "";
$productC = new productC();

if (isset($_GET['name']) && !empty($_GET['name'])) {
    $list = $productC->showproduit($_GET['name']);
} else {
    $list = $productC->listProducts();
}

if (empty($list)) {
    $error = "No products found";
}
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="test.css">
</head>
<body>
<div class="form-style">
  <form action="" method="GET">
    <input type="text" name="name" id="label" placeholder="Enter product name">
    <input type="submit" value="Search">
  </form>
</div>
    <center>
        <h1>List of products</h1>
    </center>
    <?php if (!empty($error)): ?>
        <h2><a href="add_product.php">Add product</a></h2>
        <p><?= $error ?></p>
    <?php else: ?>
        <table class="product-table" align="center">
            <tr>
                
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
            <?php foreach ($list as $product): ?>
                <tr>
                   
                    <td><?= $product['name']; ?></td>
                    <td><?= $product['description']; ?></td>
                    <td><?= $product['price']; ?></td>
                    <td><img class="product-image" src="uploads/<?= basename($product['image']) ?>" alt="<?= $product['name'] ?>"></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>



