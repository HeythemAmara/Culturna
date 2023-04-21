<?php
require_once '../config.php';
require_once '../Model/products.php';

class ProductC
{
    public function listProducts()
    {
        $sql = "SELECT * FROM products";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteProduct($id)
    {
        $sql = "DELETE FROM products WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
            if ($req->rowCount() == 0) {
                echo "Le produit n'a pas été trouvé.";
            } else {
                echo "Le produit a été supprimé avec succès.";
            }
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addProduct($product)
    {
        $sql = "INSERT INTO products  
        VALUES (NULL, :name, :description, :price, :image)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'name' => $product->getName(),
                'description' => $product->getDescription(),
                'price' => $product->getPrice(),
                'image' => $product->getImage()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateProduct($product, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE products SET 
                    name = :name, 
                    description = :description, 
                    price = :price, 
                    image = :image
                WHERE id= :id'
            );
            $query->execute([
                'id' => $id,
                'name' => $product->getName(),
                'description' => $product->getDescription(),
                'price' => $product->getPrice(),
                'image' => $product->getImage()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showProduct($id)
    {
        $sql = "SELECT * from products where id = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $product = $query->fetch();
            return $product;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function getProducts()
    {
        $db = config::getConnexion();
        $stmt = $db->prepare('SELECT * FROM products');
        $stmt->execute();
        $products = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $product = new Product(
                $row['id'],
                $row['name'],
                $row['description'],
                $row['price'],
                $row['image']
            );
            $products[] = $product;
        }
        return $products;
    }


    function showproduit($name)
    {
        $sql = "SELECT * FROM products WHERE name LIKE '%" . $name . "%'";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $courses = $query->fetchAll();
            return $courses;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    













}
