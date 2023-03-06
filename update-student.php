<?php 
    require_once 'database-connection.php';
    $student_id = $_POST['suggestions'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM student WHERE student_id = '".$student_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            require_once 'next-update-student.php';
        }
        else{
            $_SESSION['message'] = "Invalid Student Id! Please check your input!";
            header('location: student-update.php');
        }
    }
?>