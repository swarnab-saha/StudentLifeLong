<?php
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role_employee = 'Employee';
    $role_student = 'Student';
    $qury = "SELECT * FROM signup WHERE username = '".$username."' AND password = '".$password."' 
    AND role = '".$role_employee."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $employee_id = $row['emp_stu_id'];
            $qury = "SELECT department_id FROM employee WHERE employee_id = '".$employee_id."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $row = $result->fetch_assoc(); 
                    $department_id = $row['department_id'];
                    $_SESSION['department_id'] = $department_id;
                    $qury = "SELECT * FROM department WHERE department_id = '".$department_id."'";
                    if($result=$mysqli->query($qury)){
                        if(mysqli_num_rows($result)>0){
                            $row = $result->fetch_assoc();
                            $department_name = $row['department_name'];
                            $_SESSION['employee-id'] = $employee_id;
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
        else{
            $qury = "SELECT * FROM signup WHERE username = '".$username."' AND password = 
            '".$password."' AND role = '".$role_student."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $row = $result->fetch_assoc();
                    $student_id = $row['emp_stu_id'];
                    $_SESSION['student-id'] = $student_id;
                    header('location: student-index.php');
                }
                else{
                    $_SESSION['message'] = "Invalid Username or Password!";
                    header('location: user-login.php');
                }
            }
        }
    }
?>