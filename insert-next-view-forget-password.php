<?php 
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $username = $_SESSION['username'];
    $password = $_POST['password'];
    $qury = "UPDATE signup SET password = '".$password."' WHERE username = '".$username."'";
    if(mysqli_query($mysqli,$qury)){
        $_SESSION['message'] = "Your password successfully reset.";
        header('location: user-login.php');
    }
    mysqli_close($mysqli);
?>
