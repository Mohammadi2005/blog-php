<?php
session_start();

    $pdo = require_once "../config/database.php";
    if(isset($_POST['sing-in'])){
        try {

            $key = $_POST['key'];
            $password = $_POST['password'];

            // sql
            $sql="SELECT * FROM users WHERE (email=:key or mobile=:key or username=:key) AND (password=:password) LIMIT 1";

            // stmt
            $stmt = $pdo->prepare($sql);

            // bind
            $stmt->bindParam(':key', $key);
            $stmt->bindParam(':password', $password);

            // exe
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if($stmt->rowCount() == 1) {
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['mobile'] = $user['mobile'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['login'] = 'ok';

                var_dump($_SESSION);
                header("location: ../index.php?login=ok");
            } else {
                header("location: ./login.php?notUser=ok");
            }

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
