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
    $student_id = strtoupper($_POST['student-id']);
    $student_name = ucwords($_POST['student-name']);
    $student_dob = $_POST['student-dob'];
    $student_gender = $_POST['student-gender'];
    $mobile = $_POST['mobile'];
    $email = strtolower($_POST['email']);
    $address = ucwords($_POST['address']);
    $course_name = $_POST['course-name'];
    $qury = "SELECT student_id FROM student WHERE student_id = '".$student_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $_SESSION['message'] = $student_name. " is already registered.";
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
            $qury = "SELECT course_id FROM course WHERE course_name = '".$course_name."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $row = $result->fetch_assoc();
                    $course_id = $row['course_id'];
                }
            }
            $qury = "SELECT student_mobile FROM student WHERE student_mobile =          
            '".$mobile."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $_SESSION['message'] = "Mobile number is already registered.";
                    header('location: student-entry.php');
                }
                else{
                    $qury = "INSERT INTO        
                    student(student_id,student_name,student_dob,student_gender,student_mobile,
                    student_email,student_address,course_id) 
                    VALUES('".$student_id."','".$student_name."','".$student_dob."',
                    '".$student_gender."','".$mobile."','".$email."','".$address."',
                    '".$course_id."')";
                    if(mysqli_query($mysqli,$qury)){
                        $_SESSION['message'] = 
                        $student_name. " has registered. His/Her student id is " .$student_id. ".";
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