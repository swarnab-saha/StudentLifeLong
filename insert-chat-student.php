<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $student_id = $_POST['suggestions'];
    $id = '1265883';
    $message = $_POST['message'];
    $date = date('Y-m-d');
    $qury = "SELECT student_id FROM student WHERE student_id = '".$student_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $qury = "INSERT INTO chat_student(sending_id,chat_date,student_id,message) 
            VALUES('".$id."','".$date."','".$student_id."','".$message."')";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['chat-send'] = "Message has been send.";
                header('location: chat-student.php');
            }
        }
        else{
            $_SESSION['wrong-id'] = "student id is incorrect!";
            header('location: chat-student.php');
        }
    }
    mysqli_close($mysqli);
?>