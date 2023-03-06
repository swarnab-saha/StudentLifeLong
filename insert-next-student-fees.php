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
    $fee_no = strtoupper($_POST['fee-no']);
    $course_fees = $_POST['course-fees'];
    $amount = $_POST['amount'];
    $student_id = $_SESSION['student-id'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM course_fee WHERE student_id = '".$student_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)<1){
            if($course_fees == $amount){
                $qury = "INSERT INTO course_fee(mr_no,student_id,fees) 
                VALUES('".$fee_no."','".$student_id."','".$course_fees."')";
                if(mysqli_query($mysqli,$qury)){
                    $_SESSION['message'] = "Course fees successfully updated. MR no is " .$fee_no;
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
            else{
                $_SESSION['message'] = "Course fees and amount mismatch!";
                header('location: student-fees.php');
            }
        }
        else{
            $_SESSION['message'] = "Invalid Student Id! Please check your input!";
            //header('location: student-fees.php');
        }
    }
    mysqli_close($mysqli);
?>