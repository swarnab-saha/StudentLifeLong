<?php
    session_start();
    require_once 'database-connection.php';
    $employee_id = $_SESSION['employee-id'];
    $mobile = $_POST['mobile'];
    $email = strtolower($_POST['email']);
    $address = strtoupper($_POST['address']);
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT employee_id FROM employee WHERE employee_id = '".$employee_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $qury = "SELECT employee_mobile FROM employee WHERE employee_mobile ='".$mobile."' AND 
            NOT employee_id = '".$employee_id."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $_SESSION['already-registered-mobile-msg'] = $mobile. " is already registered.";
                    header('location: admin-index.php');
                }
                else{
                    $qury = "UPDATE employee SET employee_mobile = '".$mobile."', employee_email = 
                    '".$email."', employee_address = '".$address."' WHERE employee_id = 
                    '".$employee_id."'";
                    if(mysqli_query($mysqli,$qury)){
                        $_SESSION['update-msg'] = $employee_name. " is successfully updated.";
                        header('location: admin-index.php');
                    }
                }
            }
        }
    }
    mysqli_close($mysqli);
?>