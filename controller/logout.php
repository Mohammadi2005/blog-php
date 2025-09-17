<?php
session_start();
    try {
//        var_dump($_SESSION);
        $hasLogin = $_SESSION['login'];

        if($hasLogin == "ok") {
            unset($_SESSION['username']);
            unset($_SESSION['email']);
            unset($_SESSION['mobile']);
            unset($_SESSION['role']);
            unset($_SESSION['login']);

            header("location: ../index.php?logout=ok");
        } else {
            header("location: ../index.php");
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

?>
