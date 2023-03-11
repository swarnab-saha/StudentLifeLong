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
    $admission_id = strtoupper($_POST['admission-id']);
    $admission_data = $_POST['admission-data'];
    $mr_no = strtoupper($_POST['mr-no']);
    $student_id = $_POST['suggestions'];
    $qury = "SELECT student_id FROM student WHERE student_id = '".$student_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $qury = "SELECT mr_no FROM course_fee WHERE mr_no = '".$mr_no."' AND student_id = 
            '".$student_id."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $qury = "SELECT admission_id FROM admission WHERE admission_id = 
                    '".$admission_id."'";
                    if($result=$mysqli->query($qury)){
                        if(mysqli_num_rows($result)<1){
                            $qury = "SELECT student_id FROM admission WHERE student_id = 
                            '".$student_id."'";
                            if($result=$mysqli->query($qury)){
                                if(mysqli_num_rows($result)<1){
                                    $qury = "INSERT INTO 
                                    admission(admission_id,admission_date,student_id)
                                    VALUES('".$admission_id."','".$admission_data."',
                                    '".$student_id."')";
                                    if(mysqli_query($mysqli,$qury)){
                                        $_SESSION['message'] = 
                                        "Admission completed. His/Her admission no is " 
                                        .$admission_id.".";
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
                                    $_SESSION['message'] = "Student already taken admission.";
                                    header('location: admission.php');
                                }
                            }
                        }
                        else{
                            $_SESSION['message'] = "Admission id already taken by others.";
                            header('location: admission.php');
                        }
                    }
                }
                else{
                    $_SESSION['message'] = "Invalid MR No! Please check your input!";
                    header('location: admission.php');
                }
            }
        }
        else{
            $_SESSION['message'] = "Invalid Student Id! Please check your input!";
            header('location: admission.php');
        }
    }
    mysqli_close($mysqli);
?>