<?php
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $department_id = $_SESSION['department_id'];
    $qury = "SELECT * FROM department WHERE department_id = '".$department_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $department_name = $row['department_name'];   
        }
    }
    $employee_id = $_SESSION['employee-id'];
    $mobile = $_POST['mobile'];
    $email = strtolower($_POST['email']);
    $address = ucwords($_POST['address']);
    $qury = "SELECT * FROM employee WHERE employee_id = '".$employee_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $employee_name = $row['employee_name'];
            $qury = "SELECT employee_mobile FROM employee WHERE employee_mobile ='".$mobile."' AND 
            NOT employee_id = '".$employee_id."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $_SESSION['message'] = "Mobile number is already registered.";
                    header('location: employee-update.php');
                }
                else{
                    $qury = "UPDATE employee SET employee_mobile = '".$mobile."', employee_email = 
                    '".$email."', employee_address = '".$address."' WHERE employee_id = 
                    '".$employee_id."'";
                    if(mysqli_query($mysqli,$qury)){
                        $_SESSION['message'] = $employee_name. " is successfully updated.";
                        if($department_name == 'Admin'){
                            header('location: admin-index.php');
                        }
                        else if($department_name == 'Admission'){
                            header('location: admission-index.php');
                        }
                        else if($department_name == 'HR'){
                            header('location: hr-index.php');
                        }
                        else if($department_name == 'Finance'){
                            header('location: finance-index.php');
                        }
                    }
                }
            }
        }
    }
    mysqli_close($mysqli);
?>