<?php
    session_start();
    require_once 'database-connection.php';
    $employee_id = strtoupper($_POST['employee-id']);
    $employee_name = ucwords($_POST['employee-name']);
    $employee_dob = $_POST['employee-dob'];
    $employee_gender = $_POST['employee-gender'];
    $mobile = $_POST['mobile'];
    $email = strtolower($_POST['email']);
    $address = ucwords($_POST['address']);
    $department_name = $_POST['department-name'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT employee_id FROM employee WHERE employee_id = '".$employee_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $_SESSION['already-registered-msg'] = $employee_name. " is already registered.";
            header('location: admin-index.php');
        }
        else{
            $qury = "SELECT department_id FROM department WHERE department_name = 
            '".$department_name."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $row = $result->fetch_assoc();
                    $department_id = $row['department_id'];
                }
            }
            $qury = "SELECT employee_mobile FROM employee WHERE employee_mobile =           
            '".$mobile."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $_SESSION['already-registered-mobile-msg'] = $mobile. " is already registered.";
                    header('location: admin-index.php');
                }
                else{
                    $qury = "INSERT INTO        
                    employee(employee_id,employee_name,employee_dob,employee_gender,employee_mobile,
                    employee_email,employee_address,department_id) 
                    VALUES('".$employee_id."','".$employee_name."','".$employee_dob."',
                    '".$employee_gender."','".$mobile."','".$email."','".$address."',
                    '".$department_id."')";
                    if(mysqli_query($mysqli,$qury)){
                        $_SESSION['now-registered-msg'] = $employee_name. " has registered.";
                        header('location: admin-index.php');
                    }
                }
            }
        }
    }
    mysqli_close($mysqli);
?>