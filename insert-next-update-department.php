<?php
    session_start();
    require_once 'database-connection.php';
    $department_id = $_SESSION['department-id'];
    $department_name = strtoupper($_POST['department-name']);
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT department_id FROM department WHERE department_id = '".$department_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $qury = "UPDATE department SET department_name = '".$department_name."' WHERE 
            department_id = '".$department_id."'";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['update-msg'] = $department_name. " is successfully updated.";
                header('location: admin-index.php');
            }
        }
    }
    mysqli_close($mysqli);
?>