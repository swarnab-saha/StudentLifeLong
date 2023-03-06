<?php
    require_once 'database-connection.php';
    $name = ucwords($_POST['name']);
    $mobile = $_POST['mobile'];
    $email = strtolower($_POST['email']);
    $message = $_POST['message'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "INSERT INTO contact_us(name,mobile,email,message) 
    VALUES('".$name."','".$mobile."','".$email."','".$message."')";
    if(mysqli_query($mysqli,$qury)){
        $_SESSION['message'] = "Thank you " .$name. ", we will contact you soon.";
        header('location: index.php');
    }
    mysqli_close($mysqli);
?>