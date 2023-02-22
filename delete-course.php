<?php
    session_start();
    require_once 'database-connection.php';
    $course_id = $_POST['course-id'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM course WHERE course_id = '".$course_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $course_name = $row['course_name'];
            echo $course_name;
            $qury = "DELETE FROM course WHERE course_id = '".$course_id."'";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['delete-msg'] = $course_name. " is successfully deleted.";
                header('location: admin-index.php');
            }
            else{
                $_SESSION['constrain-msg'] = "Course can't deleted right now. If you want to delete 
                this course atfirst delete from Student table where it is referencing.";
                header('location: delete-student.php');
            }
        }
        else{
            $_SESSION['wrong-id-msg'] = "Invalid Course Id! Please check your input!";
            header('location: course-delete.php');
        }
    }
    mysqli_close($mysqli);
?>