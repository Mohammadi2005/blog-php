<?php
    $pdo = require_once('../config/database.php');

    if(isset($_POST['sing-up'])){

        try {
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $name = $_POST['name'];

            $sql = "INSERT INTO users(phone, password, email, username) VALUES (:phone, :password, :email, :name)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':phone'=>$phone, ':password'=>$password, ':email'=>$email, ':name'=>$name]);
            header("location: ../index.php");
        } catch(PDOException $e) {
            echo "Error  : " . $e->getMessage();
        }
    }
?>
