<?php
// Include the cart and product controllers
require_once '../Controller/cartC.php';
require_once '../Controller/productC.php';

// Create instances of the cart and product controllers
$cart = new CarteC();
$product = new ProductC();

// Get the cart contents
$cart_items = $cart->getitemcart();

// Create an array to store information for all products in the cart
$products_in_cart = array();

// Calculate the total price
$total_price = 0;

foreach ($cart_items as $cart_item) {
    // Get product information for this item
    $product_info = $product->showProduct($cart_item->getProductId());

    // Add the product information to the new array
    $products_in_cart[] = array(
        'idc'=> $cart_item->getIdc(),
        'name' => $product_info['name'],
        'description' => $product_info['description'],
        'price' => $product_info['price'],
        'quantity' => $cart_item->getquantity(),
        'subtotal' => $product_info['price'] * $cart_item->getquantity(),
        'product_id' => $cart_item->getProductId()
    );

    // Add to total price
    $total_price += $product_info['price'] * $cart_item->getquantity();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <h1>Cart</h1>
    <div class="container">
        <?php if (count($products_in_cart) > 0): ?>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                    <th>update</th>
                    
                </tr>
                <?php foreach ($products_in_cart as $product_in_cart): ?>
                    <tr>
                        <td><?= $product_in_cart['name'] ?></td>
                        <td><?= $product_in_cart['description'] ?></td>
                        <td><?= $product_in_cart['price'] ?></td>
                        <td><?= $product_in_cart['quantity'] ?></td>
                        <td><?= $product_in_cart['subtotal'] ?></td>
                        
                        
                        <td>
                            <form method="POST" action="">
                                
                                

                                
                                <input type="hidden" name="idc" value="<?= $product_in_cart['idc']  ?>">
                                <a href="deleteCarte.php?id=<?php echo $product_in_cart['idc']; ?>">Delete</a>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4">Total Price:</td>
                    <td> $<?= $total_price ?> /-</td>
                    <td></td>
                </tr>
            </table>
        <?php else: ?>
            <p>No items
            <?php endif; ?>
    </div>
</body>
</html>
