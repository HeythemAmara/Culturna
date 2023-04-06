<?php

// Include the controller and product class
include '../Controller/productC.php';
require_once '../Controller/cartC.php';

// Create an instance of the controller
$carte = new CarteC();
$productC = new productC();

// Get all products
$products = $productC->getProducts();

// Check if the "Add to Cart" button was clicked
if (isset($_POST['add_to_cart'])) {

    

    // Get the product id and quantity from the form
    
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Add the product to the cart
    $carte->addCart($product_id,$quantity);

    
    
}














if(isset($message)){
    foreach($message as $message){
       echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
    };
 };
 
 













?>

<!DOCTYPE html>
<html>
<head>
    <title>List of Products</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<a href="panier.php"><img width="50" src="uploads/panier.jpg"></a>
<span id="cart-icon">0</span>
    <h1>List of Products</h1>
    <div class="container">
        <?php if (count($products) > 0): ?>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Add to Cart</th>
                    
                </tr>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product->getName() ?></td>
                        <td><?= $product->getDescription() ?></td>
                        <td><?= $product->getPrice() ?></td>
                        <td><img class="product-image" src="uploads/<?= basename($product->getImage()) ?>" alt="<?= $product->getName() ?>" width="80"></td>
                        <td>
                            <form method="POST" action="">
                           
                                <input type="hidden" name="product_id" value="<?= $product->getId() ?>">
                                <input type="number" name="quantity" min="1" value="1">
                                <input type="submit" name="add_to_cart" id="add-to-cart-btn" value="Add to Cart">
                                
                                     

                            </form>
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
