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
    $course_id = strtoupper($_POST['course-id']);
    $course_name = ucwords($_POST['course-name']);
    $course_fee = $_POST['course-fee'];
    $course_duration = $_POST['course-duration'];
    $qury = "SELECT course_id FROM course WHERE course_id = '".$course_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $_SESSION['message'] = $course_name. " is already registered.";
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
            $qury = "INSERT INTO course(course_id,course_name,course_fee,course_duration) 
            VALUES('".$course_id."','".$course_name."','".$course_fee."','".$course_duration."')";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['message'] = $course_name. " has registered.";
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