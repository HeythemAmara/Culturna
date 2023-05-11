<?php
require_once '../config.php';
require_once '../Model/cart.php';

class CarteC
{
    public function listCarts()
    {
        $sql = "SELECT * FROM cart";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteCart($idc)
    {
        $sql = "DELETE FROM cart WHERE idc = :idc";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idc', $idc);

        try {
            $req->execute();
            if ($req->rowCount() == 0) {
                echo "Le panier n'a pas été trouvé.";
            } else {
               
            }
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
        header('Location:Page_Produit.php');
    }

    

    public function addCart($product_id, $quantity) {
        $db = config::getConnexion();
        
        // Get the product details
        $query = $db->prepare("SELECT * FROM products WHERE id=:id");
        $query->execute(['id' => $product_id]);
        $product = $query->fetch(PDO::FETCH_ASSOC);
    
        // Check if requested quantity is available in stock
        if ($product['quantity_disp'] < $quantity) {
            echo "<script>alert('Error: Requested quantity is not available in stock');</script>";
            echo "<script>setTimeout(function(){window.location.href='Page_Produit.php'},50);</script>";
            return;
        }
    
        // Insert the item into cart
        $sql = "INSERT INTO cart (product_id, quantity) VALUES (:product_id, :quantity)";
        
        
            $query = $db->prepare($sql);
            $query->execute([
                'product_id' => $product_id,
                'quantity' => $quantity,
            ]);
            echo "<script>alert('Item added to cart successfully');</script>";
            echo "<script>setTimeout(function(){window.location.href='Page_Produit.php'},50);</script>";
        
    }
    
    
    
    
    public function updateQuantity($idc, $quantity) {
        $sql = "UPDATE cart SET quantity = :quantity WHERE idc = :idc";
        $db = config::getConnexion();
    
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'quantity' => $quantity,
                'idc' => $idc
            ]);
            header('Location:Page_Produit.php');
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }












    
    public function getitemcart()
    {
        $db = config::getConnexion();
        $stmt = $db->prepare('SELECT * FROM cart');
        $stmt->execute();
        $cartes = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $Cart = new Cart(
                $row['idc'],
                $row['product_id'],
                $row['quantity'],
                
            );
            $cartes[] = $Cart;
        }
        return $cartes;
    }





























    function updateCart($cart, $idc)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE cart SET 
                    product_id = :product_id, 
                    quantity = :quantity 
                WHERE idc= :idc'
            );
            $query->execute([
                'idc' => $idc,
                'product_id' => $cart->getProductId(),
                'quantity' => $cart->getQuantity()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showCart($idc)
    {
        $sql = "SELECT * from cart where idc = $idc";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $cart = $query->fetch();
            return $cart;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function countCarts()
{
    $sql = "SELECT COUNT(*) as total FROM cart";
    $db = config::getConnexion();
    try {
        $result = $db->query($sql);
        $row = $result->fetch();
        return $row['total'];
    } catch (Exception $e) {
        die('Error:' . $e->getMessage());
    }
}


    public function getCarts()
    {
        $db = config::getConnexion();
        $stmt = $db->prepare('SELECT * FROM cart');
        $stmt->execute();
        $carts = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $cart = new Cart(
                $row['idc'],
                $row['product_id'],
                $row['quantity']
            );
            $carts[] = $cart;
        }
        return $carts;
        }



















        }
        ?>
