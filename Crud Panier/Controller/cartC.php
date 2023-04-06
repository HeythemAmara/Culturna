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
                echo "Le panier a été supprimé avec succès.";
            }
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    

    public function addCart($product_id, $quantity) {
        $sql = "INSERT INTO cart (product_id, quantity) VALUES (:product_id, :quantity)";
        $db = config::getConnexion();
        
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'product_id' => $product_id,
                'quantity' => $quantity,
            ]);
            echo "Item added to cart successfully";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
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
