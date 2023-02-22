<?php
    session_start();
    require_once 'database-connection.php';
    $course_id = strtoupper($_POST['course-id']);
    $course_name = ucwords($_POST['course-name']);
    $course_fee = $_POST['course-fee'];
    $course_duration = $_POST['course-duration'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT course_id FROM course WHERE course_id = '".$course_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $_SESSION['already-registered-msg'] = $course_name. " is already registered.";
            header('location: admin-index.php');
        }
        else{
            $qury = "INSERT INTO course(course_id,course_name,course_fee,course_duration) 
            VALUES('".$course_id."','".$course_name."','".$course_fee."','".$course_duration."')";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['now-registered-msg'] = $course_name. " has registered.";
                header('location: admin-index.php');
            }
        }
    }
    mysqli_close($mysqli);
?>