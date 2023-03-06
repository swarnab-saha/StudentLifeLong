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
    $course_id = $_SESSION['course-id'];
    $course_name = ucwords($_POST['course-name']);
    $course_fee = $_POST['course-fee'];
    $course_duration = $_POST['course-duration'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT course_id FROM course WHERE course_id = '".$course_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $qury = "UPDATE course SET course_name = '".$course_name."', course_fee =       
            '".$course_fee."', course_duration = '".$course_duration."' WHERE course_id = 
            '".$course_id."'";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['message'] = $course_name. " is successfully updated.";
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
    mysqli_close($mysqli);
?>