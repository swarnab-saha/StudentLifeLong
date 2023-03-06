<?php
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $department_id = $_SESSION['department_id'];
    $qury = "SELECT * FROM department WHERE department_id = '".$department_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $department_name_session = $row['department_name'];   
        }
    }
    $department_id = $_SESSION['department-id'];
    $department_name = ucwords($_POST['department-name']);
    $qury = "SELECT department_id FROM department WHERE department_id = '".$department_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $qury = "UPDATE department SET department_name = '".$department_name."' WHERE 
            department_id = '".$department_id."'";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['message'] = $department_name. " is successfully updated.";
                if($department_name_session == 'Admin'){
                    header('location: admin-index.php');
                }
                else if($department_name_session == 'Admission'){
                    header('location: admission-index.php');
                }
                else if($department_name_session == 'HR'){
                    header('location: hr-index.php');
                }
                else if($department_name_session == 'Finance'){
                    header('location: finance-index.php');
                }
            }
        }
    }
    mysqli_close($mysqli);
?>