<?php

if (isset($_POST['submit']) && $_POST['g-recaptcha-response'] != "") {
    include "db_config.php";
    $secret = '6LcnHdElAAAAAEu_Wb-OghQ19Am0Uaju8WGpw433';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {
        
        //first validate then insert in db
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        
        $dsn = 'mysql:host=localhost;dbname=demo';
        $username = 'root';
        $password = '';
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        
        try {
            $conn = new PDO($dsn, $username, $password, $options);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit;
        }
        
        $stmt = $conn->prepare("INSERT INTO signup(name, email ,password) VALUES(:name, :email, :password)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        
        echo "Your registration has been successfully done!";
    }
}
?>
