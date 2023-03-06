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
    $employee_id = strtoupper($_POST['employee-id']);
    $employee_name = ucwords($_POST['employee-name']);
    $employee_dob = $_POST['employee-dob'];
    $employee_gender = $_POST['employee-gender'];
    $mobile = $_POST['mobile'];
    $email = strtolower($_POST['email']);
    $address = ucwords($_POST['address']);
    $department_name = $_POST['department-name'];
    $qury = "SELECT employee_id FROM employee WHERE employee_id = '".$employee_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $_SESSION['message'] = $employee_name. " is already registered.";
            if($department_name_session == 'Admin'){
                header('location: admin-index.php');
            }
            else if($department_name_session == 'Admission'){
                header('location: admission-index.php');
            }
            else if($department_name == 'HR'){
                header('location: hr-index.php');
            }
            else if($department_name_session == 'Finance'){
                header('location: finance-index.php');
            }
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
                    $_SESSION['message'] = "Mobile number is already registered.";
                    header('location: employee-entry.php');
                }
                else{
                    $qury = "INSERT INTO        
                    employee(employee_id,employee_name,employee_dob,employee_gender,employee_mobile,
                    employee_email,employee_address,department_id) 
                    VALUES('".$employee_id."','".$employee_name."','".$employee_dob."',
                    '".$employee_gender."','".$mobile."','".$email."','".$address."',
                    '".$department_id."')";
                    if(mysqli_query($mysqli,$qury)){
                        $_SESSION['message'] = 
                        $employee_name. " has registered. His/Her employee id is " 
                        .$employee_id. ".";
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
        }
    }
    mysqli_close($mysqli);
?>