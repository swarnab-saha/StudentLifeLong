<?php 
    session_start();
    require_once 'database-connection.php';
    $student_id = $_POST['student-id'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM student WHERE student_id = '".$student_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            require_once 'next-view-student.php';
        }
        else{
            $_SESSION['wrong-id-msg'] = "Invalid Student Id! Please check your input!";
            header('location: student-view.php');
        }
    }
    mysqli_close($mysqli);
?>