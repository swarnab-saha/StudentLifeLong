<?php
    session_start();
    require_once 'database-connection.php';
    $department_id = strtoupper($_POST['department-id']);
    $department_name = ucwords($_POST['department-name']);
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT department_id FROM department WHERE department_id = '".$department_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $_SESSION['already-registered-msg'] = $department_name. " is already registered.";
            header('location: admin-index.php');
        }
        else{
            $qury = "INSERT INTO department(department_id,department_name) 
            VALUES('".$department_id."','".$department_name."')";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['now-registered-msg'] = $department_name. " has registered.";
                header('location: admin-index.php');
            }
        }
    }
    mysqli_close($mysqli);
?>