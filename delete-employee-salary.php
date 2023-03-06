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
    $employee_id = $_POST['suggestions'];
    $emp_id = $_SESSION['employee-id'];
    if($emp_id == $employee_id){
        $_SESSION['message'] = "You can't delete salary yourself.";
        header('location: employee-delete.php');
    }
    else{
        $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        $qury = "SELECT * FROM employee_salary WHERE employee_id = '".$employee_id."'";
        if($result=$mysqli->query($qury)){
            if(mysqli_num_rows($result)>0){
                $row = $result->fetch_assoc();
                $qury = "DELETE FROM employee_salary WHERE employee_id = '".$employee_id."'";        
                if(mysqli_query($mysqli,$qury)){
                    $_SESSION['message'] = "'Salary is successfully deleted.";
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
            else{
                $_SESSION['message'] = "Invalid Employee Id! Please check your input!";
                header('location: employee-salary-delete.php');
            }
        }
    }
    mysqli_close($mysqli);
?>