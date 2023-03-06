<?php 
    require_once 'database-connection.php';
    $course_id = $_POST['suggestions'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM course WHERE course_id = '".$course_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            require_once 'next-update-course.php';
        }
        else{
            $_SESSION['message'] = "Invalid Course Id! Please check your input!";
            header('location: course-update.php');
        }
    }
?>