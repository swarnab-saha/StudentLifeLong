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
    $department_id = $_POST['suggestions'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM department WHERE department_id = '".$department_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $department_name = $row['department_name'];
            $qury = "DELETE FROM department WHERE department_id = '".$department_id."'";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['message'] = $department_name. " is successfully deleted.";
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
            else{
                $_SESSION['message'] = 
"If you want to delete this department atfirst delete from Employee where it is referencing.";
                header('location: employee-delete.php');
            }
        }
        else{
            $_SESSION['message'] = "Invalid Department Id! Please check your input!";
            header('location: department-delete.php');
        }
    }
    mysqli_close($mysqli);
?>