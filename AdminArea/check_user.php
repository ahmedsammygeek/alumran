<?php session_start();
    if(!isset($_SESSION['is_system_user']) || $_SESSION['is_system_user'] !== true) {
        header("location: login.php");
    }
    

?>