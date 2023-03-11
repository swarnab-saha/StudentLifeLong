<?php
    require_once 'database-connection.php';
    $username = $_POST['username'];
    $_SESSION['username'] = $username;
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT username FROM signup WHERE username = '".$username."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            header('location: next-view-forget-password.php');
        }
        else{
            $_SESSION['message'] = "Username incorrect!";
            header('location: forget-password.php');
        }
    }
?>