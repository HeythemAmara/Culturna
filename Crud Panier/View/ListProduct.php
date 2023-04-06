<?php
// Include the controller and product class
include '../Controller/productC.php';

// Create an instance of the controller
$productC = new productC();

// Get all products
$products = $productC->getProducts();

?>

<!DOCTYPE html>
<html>
<head>
    <title>List of Products</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="test.css">
    <h2><a href="add_product.php">Add product</a></h2>
    <h3><a href="searchProduct.php">search product</a></h3>
</head>
<body>
    <h1>List of Products</h1>
    <div class="container">
        <?php if (count($products) > 0): ?>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product->getName() ?></td>
                        <td><?= $product->getDescription() ?></td>
                        <td>$<?= $product->getPrice() ?>/-</td>
                        <td><img class="product-image" src="uploads/<?= basename($product->getImage()) ?>" alt="<?= $product->getName() ?>" width="80"></td>

                        <td align="center">
                        <form method="POST" action="updateproduct.php">
						
    <input type="hidden" name="id" value="<?= $product->getId() ?>">
    <input class="update" type="submit" name="update" value="Update">
    
     
	
</form>

<td>
<a class="delete" href="deleteproduct.php?id=<?php echo $product->getId(); ?>">Delete</a>

                </td>

                       
						
                            
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>No products found.</p>
        <?php endif; ?>
    </div>
</body>
</html>
