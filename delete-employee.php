<?php
    session_start();
    require_once 'database-connection.php';
    $employee_id = $_POST['employee-id'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM employee WHERE employee_id = '".$employee_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $employee_name = $row['employee_name'];
            $qury = "DELETE FROM employee WHERE employee_id = '".$employee_id."'";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['delete-msg'] = $employee_name. " is successfully deleted.";
                header('location: admin-index.php');
            }
        }
        else{
            $_SESSION['wrong-id-msg'] = "Invalid Employee Id! Please check your input!";
            header('location: employee-delete.php');
        }
    }
    mysqli_close($mysqli);
?>