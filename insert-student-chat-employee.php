<?php
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $employee_id = $_POST['suggestions'];
    $id = $_SESSION['student-id'];
    $message = $_POST['message'];
    $date = date('Y-m-d');
    $qury = "SELECT employee_id FROM employee WHERE employee_id = '".$employee_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){ 
            $qury = "INSERT INTO chat_employee(sending_id,chat_date,employee_id,message) 
            VALUES('".$id."','".$date."','".$employee_id."','".$message."')";
            if(mysqli_query($mysqli,$qury)){ 
                $_SESSION['message'] = "Message has been send.";
                header('location: student-chat-employee.php');
            }
        }
        else{
            $_SESSION['message'] = "Employee id is incorrect!";
            header('location: student-chat-employee.php');
        }
    }
    mysqli_close($mysqli);
?>