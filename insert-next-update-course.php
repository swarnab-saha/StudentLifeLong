<?php
    session_start();
    require_once 'database-connection.php';
    $course_id = $_SESSION['course-id'];
    $course_name = ucwords($_POST['course-name']);
    $course_fee = $_POST['course-fee'];
    $course_duration = $_POST['course-duration'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT course_id FROM course WHERE course_id = '".$course_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $qury = "UPDATE course SET course_name = '".$course_name."', course_fee =       
            '".$course_fee."', course_duration = '".$course_duration."' WHERE course_id = 
            '".$course_id."'";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['update-msg'] = $course_name. " is successfully updated.";
                header('location: admin-index.php');
            }
        }
    }
    mysqli_close($mysqli);
?>