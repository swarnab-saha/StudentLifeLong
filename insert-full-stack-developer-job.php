<?php
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $qury = "SELECT mobile FROM apply_fullstackdeveloper WHERE mobile = '".$mobile."'";
    if($ressult=$mysqli->query($qury)){
        if(mysqli_num_rows($ressult)<1){
            $qury = "INSERT INTO apply_fullstackdeveloper(name,mobile,email) 
            VALUES('".$name."','".$mobile."','".$email."')";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['message'] = "Thank you " .$name. ", we will contact you soon.";
                header('location: index.php');
            }
        }
        else{
            $_SESSION['message'] = "You already applied for this job.";
            header('location: index.php');
        }
    }
    mysqli_close($mysqli);
?>