<?php
include '../config.php';
include '../Model/Mat.php';
class MaterielC
{
    public function listMateriel()
    {
        $db = config::getConnexion();
        $sql = "SELECT * FROM materiel";
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    public function countTypeMat($type) //stat
    {
        try 
        {
            $pdo = config::getConnexion();
            $sql = "SELECT * FROM materiel WHERE type_M	 = :ty";
            $query = $pdo->prepare($sql);
            $query->bindParam(':ty', $type);
            $query->execute();
            $count = $query->rowCount();
            return $count;
        }
        catch (PDOException $e) 
        {
            echo "error add: " . $e->getMessage();
        }
    }  
    public function listMattype(string $typee)
    {
        $sql = "SELECT * FROM materiel WHERE type_M='$typee'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteMateriel($idMateriel)
    {
        $sql = "DELETE FROM materiel WHERE id_M = :id_M";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_M', $idMateriel);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

   /* function addMateriel($materiel)
    {
        $db = config::getConnexion();
        $sql = "INSERT INTO materiel  
        VALUES (NULL, :name, :type, :img, :id)";
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'name' => $materiel->getName(),
                'type' => $materiel->gettype(),
                'img' => $materiel->getimage(),
                'id'=> $materiel->getId_C()


            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }*/
    
    function checkMaterielType($id_club_fk, $materiel_type)
    {
        $db = config::getConnexion();
        $sql = "SELECT COUNT(*) as count
                FROM club c
                INNER JOIN materiel m
                ON c.id_club = m.id_club_fk
                WHERE c.id_club = :id_club AND c.type = :type";
    
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id_club' => $id_club_fk,
                'type' => $materiel_type
            ]);
    
            $result = $query->fetch(PDO::FETCH_ASSOC);
            if ($result['count'] > 0) {
                // Les types sont égaux
                return 1;
            } else {
                // Les types sont différents
                return 0;
            }
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

  /*  function addMateriel($materiel)
{
    $db = config::getConnexion();
    $nom = $materiel->gettype();
    $id_club_fk = $materiel->getId_C();
    if (checkMaterielType($id_club_fk, $nom)>0) {
        $sql = "INSERT INTO materiel  
        VALUES (NULL, :name, :type, :img, :id)";
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'name' => $materiel->getName(),
                'type' => $materiel->gettype(),
                'img' => $materiel->getimage(),
                'id'=> $materiel->getId_C()


            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    } else {
        echo "Les types sont différents";
    }
}
*/
function addMateriel($materiel)
{
    $db = config::getConnexion();
    $nom = $materiel->gettype();
    $id_club_fk = $materiel->getId_C();
    
    $sql = "SELECT type_C FROM club WHERE id_club = :id_club_fk";
    $query = $db->prepare($sql);
    $query->execute(['id_club_fk' => $id_club_fk]);
    $result = $query->fetch();
    $type_club = $result['type_C'];
    
    if ($type_club == $nom) {
        $sql = "INSERT INTO materiel  
                VALUES (NULL, :name, :type, :img, :id ,:nc)";
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'name' => $materiel->getName(),
                'type' => $nom,
                'img' => $materiel->getimage(),
                'id'=> $id_club_fk,
                'nc'=>$materiel->getnomCl()
            ]);
            echo "L'attribut a été ajouté avec succès";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    } else {
        echo "Les types sont différents";
       
    }
  
}



    function updateMateriel($materiel, $idMateriel)
    {
        try {
            $pdo = config::getConnexion();
            $sql = "UPDATE `materiel` SET `nom_M`=:nom,`type_M`=:typee, `image`=:img ,`id_Club_fk`=:id_Cl ,`nom_cl`=:nc  WHERE id_M=:id_c";
            $query = $pdo->prepare($sql);
            $query->execute([
                "nom" => $materiel->getName(),
                "typee" => $materiel->gettype(),
                "id_c" => $idMateriel,
                "img" => $materiel->getimage(),
                "id_Cl" => $materiel->getId_C(),
                "nc" => $materiel->getnomCl()

            ]);
        } catch (PDOException $e) {
            echo "Modification Echouer: " . $e->getMessage();
        }
    }

    function findMaterielById($idMateriel)
    {
        $sql = "SELECT * from materiel where id_M = $idMateriel";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $m = $query->fetch();
            return $m;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
    public function getMaterielsByClub($club_id)
    {
        $db = config::getConnexion();
        $stmt = $db->prepare("SELECT * FROM materiel WHERE id_Club = :club_id");
        $stmt->bindValue(":club_id", $club_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }










}
?>