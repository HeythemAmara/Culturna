<?php
include '../config.php';
include '../Model/Club.php';
class ClubC
{
    public function countType($type) //stat
    {
        try 
        {
            $pdo = config::getConnexion();
            $sql = "SELECT * FROM club WHERE type_C = :ty";
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
    function updateNoteClub($note, $nomClub) {
        $db = config::getConnexion();
        $sql = "UPDATE club SET noteC = :note WHERE nom_C = :nomClub";
        try {
            $query = $db->prepare($sql);
            $query->execute(['note' => $note, 'nomClub' => $nomClub]);
            return true;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    

    function findClubByName($name) {
        $db = config::getConnexion();
        $sql = "SELECT * FROM club WHERE nom_C = :name";
        try {
            $query = $db->prepare($sql);
            $query->execute(['name' => $name]);
            $clubData = $query->fetch(PDO::FETCH_ASSOC);
            if ($clubData) {
                $club = new Club($clubData['id_Club'], $clubData['nom_C'], $clubData['type_C'], $clubData['mailC'], $clubData['image'],$clubData['noteC']);
                return $club;
            } else {
                return null;
            }
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    



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
   

    public function listClubtype(string $typee)
    {
        $sql = "SELECT * FROM club WHERE type_C='$typee'";
        $db = config::getConnexion();
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
        
        try {$sql2 = "DELETE FROM materiel WHERE id_Club_fk = :id_M2";
            $req2 = $db->prepare($sql2);
            $req2->bindValue(':id_M2', $idClub);
    
            try {
                $req2->execute();
            } catch (Exception $e) {
                die('Error:' . $e->getMessage());
            }
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addClub($Club)
    {   
        $n=5;
        $db = config::getConnexion();
        $sql = "INSERT INTO club  
        VALUES (NULL, :name, :type ,:mail,:image,:note)";
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'name' => $Club->getName(),
                'type' => $Club->gettype(),
                'mail'=>$Club->getmail() ,
                'image'=>$Club->getimage(),
                'note'=>$n
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
   

    function updateClub($Club, $idClub)
    {
        try {
            $pdo = config::getConnexion();
            $sql = "UPDATE `club` SET `nom_C`=:nom,`type_C`=:typee, `mailC`=:mail ,`image`=:imageC WHERE id_Club=:id_c";
            $sql2 = "UPDATE `materiel` SET `nom_cl`=:nc WHERE id_Club_fk=:id_cc";

            $query = $pdo->prepare($sql);
            $query2=$pdo->prepare($sql2);
            $query->execute([
                "nom" => $Club->getName(),
                "typee" => $Club->gettype(),
                "id_c" => $idClub ,
                "mail"=>$Club->getmail(),
                "imageC"=>$Club->getImage()
            ]);
            $query2->execute([
                "nc" => $Club->getName(),
                "id_cc" => $idClub 
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



    public function getMaterielsByClub($id_club)
{
    $db = config::getConnexion();
    $sql = "SELECT * FROM materiel WHERE id_club_fk = :id_club";
    try {
        $query = $db->prepare($sql);
        $query->execute(['id_club' => $id_club]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (Exception $e) {
        die('Error:' . $e->getMessage());
    }
}






}
?>