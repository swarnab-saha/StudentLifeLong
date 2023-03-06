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
    $department_id = $_POST['suggestions'];
    $qury = "SELECT * FROM department WHERE department_id = '".$department_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $dept_id = $row['department_id'];
            $qury = "SELECT department_name FROM department WHERE department_id = '".$dept_id."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $row = $result->fetch_assoc();
                    $dept_name = $row['department_name'];
                }
            }
            if($department_name_session == $dept_name){
                $_SESSION['message'] = "You can't update yourself.";
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
            else{
                require_once 'next-update-department.php';
            }
        }
        else{
            $_SESSION['message'] = "Invalid Department Id! Please check your input!";
            header('location: department-update.php');
        }
    }
?>