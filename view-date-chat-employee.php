<?php
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $id = $_SESSION['employee-id'];
    $chat_date = $_POST['chat_date'];
    $_SESSION['chat_date'] = $chat_date;
    $qury = "SELECT * FROM chat_employee WHERE employee_id = '".$id."' AND chat_date = 
     '".$chat_date."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            require_once 'next-view-date-chat-employee.php'; 
        }
        else{
            $_SESSION['message'] = "You have no messages on this specific date.";
            header('location: date-chat-employee.php');
            mysqli_close($mysqli);
        }
    }
?>