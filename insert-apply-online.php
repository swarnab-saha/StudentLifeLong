<?php
    require_once 'database-connection.php';
    $name = ucwords($_POST['name']);
    $mobile = $_POST['mobile'];
    $email = strtolower($_POST['email']);
    $course = $_POST['course'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT course_id FROM course WHERE course_name = '".$course."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $course_id = $row['course_id'];
        }
    }
    $qury = "INSERT INTO apply_online(name,mobile,email,course_id) 
    VALUES('".$name."','".$mobile."','".$email."','".$course_id."')";
    if(mysqli_query($mysqli,$qury)){
        $_SESSION['message'] = "Thank you " .$name. ", we will contact you soon.";
        header('location: index.php');
    }
    mysqli_close($mysqli);
?>