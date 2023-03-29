<?php
include '../config.php';
include '../Model/Club.php';
class ClubC
{
    public function listClub()
    {
        $db = config::getConnexion();
        $sql = "SELECT * FROM club";
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteClub($idClub)
    {
        $sql = "DELETE FROM club WHERE id_Club = :id_Club";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_Club', $idClub);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addClub($Club)
    {
        $db = config::getConnexion();
        $sql = "INSERT INTO club  
        VALUES (NULL, :name, :type)";
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'name' => $Club->getName(),
                'type' => $Club->gettype()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateClub($Club, $idClub)
    {
        try {
            $pdo = config::getConnexion();
            $sql = "UPDATE `club` SET `nom_C`=:nom,`type_C`=:typee WHERE id_Club=:id_c";
            $query = $pdo->prepare($sql);
            $query->execute([
                "nom" => $Club->getName(),
                "typee" => $Club->gettype(),
                "id_c" => $idClub
            ]);
        } catch (PDOException $e) {
            echo "Modification Echouer: " . $e->getMessage();
        }
    }

    function findClubById($idClub)
    {
        $sql = "SELECT * from club where id_Club = $idClub";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $Club = $query->fetch();
            return $Club;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
?>