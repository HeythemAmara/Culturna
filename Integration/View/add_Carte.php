<?php

// Include the controller and product class
include '../Controller/productC.php';
require_once '../Controller/cartC.php';

// Create an instance of the controller
$carte = new CarteC();
$productC = new productC();


if (isset($_POST['add_to_cart'])) {
    // Get the product id and quantity from the form
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Check if  the product is already in the cart
    $cart_items = $carte->getitemcart();
$item_found = false;

foreach ($cart_items as $cart_item) {
    if ($cart_item->getProductId() == $product_id) {
        // Check if the requested quantity can be added to the existing quantity
        $existing_quantity = $cart_item->getquantity();
        $product_info = $productC->showProduct($product_id);
        $available_quantity = $product_info['quantity_disp'];
        $requested_quantity = $quantity;
        if ($existing_quantity + $requested_quantity <= $available_quantity) {
            // Update the quantity of the existing item
            $new_quantity = $existing_quantity + $requested_quantity;
            $carte->updateQuantity($cart_item->getIdc(), $new_quantity);
            $item_found = true;
            break;
        } else {
            echo "<script>alert('Error: Requested quantity is not available in stock');</script>";
            echo "<script>setTimeout(function(){window.location.href='Page_Produit.php'},50);</script>";
            $item_found = true;
            break;
        }
    }
}

// If the item is not already in the cart, add it
if (!$item_found) {
    $product_info = $productC->showProduct($product_id);
    $available_quantity = $product_info['quantity_disp'];
    $requested_quantity = $quantity;
    if ($requested_quantity <= $available_quantity) {
        $carte->addCart($product_id, $quantity);
    } else {
        
        echo "<script>alert('Error: Requested quantity is not available in stock');</script>";
        echo "<script>setTimeout(function(){window.location.href='Page_Produit.php'},50);</script>";
        
    }
}



// Get the cart contents
$cart_items = $carte->getitemcart();

// Create an array to store information for all products in the cart
$products_in_cart = array();

// Calculate the total price and quantity
$total_price = 0;
$total_quantity = 0;

foreach ($cart_items as $cart_item) {
    // Get product information for this item
    $product_info = $productC->showProduct($cart_item->getProductId());

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

    // Add to total price and quantity
    
    $total_price += $product_info['price'] * $cart_item->getquantity();
    $total_quantity += $cart_item->getquantity();

   
}
}
?>
