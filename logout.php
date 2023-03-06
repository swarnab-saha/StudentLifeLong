<?php
    require_once 'database-connection.php';
    $_SESSION['message'] = "You are successfully logged off.";
    header('location: index.php');
?>