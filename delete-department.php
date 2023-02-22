<?php
    session_start();
    require_once 'database-connection.php';
    $department_id = $_POST['department-id'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM department WHERE department_id = '".$department_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $department_name = $row['department_name'];
            $qury = "DELETE FROM department WHERE department_id = '".$department_id."'";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['delete-msg'] = $department_name. " is successfully deleted.";
                header('location: admin-index.php');
            }
            else{
                $_SESSION['constrain-msg'] = "Department can't deleted right now. If you want to 
                delete this department atfirst delete from Employee table where it is referencing.";
                header('location: delete-employee.php');
            }
        }
        else{
            $_SESSION['wrong-id-msg'] = "Invalid Department Id! Please check your input!";
            header('location: department-delete.php');
        }
    }
    mysqli_close($mysqli);
?>