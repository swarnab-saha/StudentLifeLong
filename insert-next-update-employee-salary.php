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
    $employee_id = $_SESSION['empl-id'];
    $employee_salary = $_POST['employee-salary'];
    $qury = "SELECT * FROM employee_salary WHERE employee_id = '".$employee_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $qury = "UPDATE employee_salary SET salary = '".$employee_salary."'";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['message'] = "Salary is successfully updated.";
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
    mysqli_close($mysqli);
?>