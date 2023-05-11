<?php
// Include the cart and product controllers
include_once '../Controller/cartC.php';
require_once '../Controller/productC.php';

// Create instances of the cart and product controllers
$cart = new CarteC();
$product = new ProductC();

// Get the cart contents
$cart_items = $cart->getitemcart();

// Create an array to store information for all products in the cart
$products_in_cart = array();

// Calculate the total price and quantity
$total_price = 0;
$total_quantity = 0;

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

    // Add to total price and quantity
    
    $total_price += $product_info['price'] * $cart_item->getquantity();
    $total_quantity += $cart_item->getquantity();

   
    

    
    
}
?>
