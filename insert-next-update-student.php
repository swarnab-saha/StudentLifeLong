<?php
    session_start();
    require_once 'database-connection.php';
    $student_id = $_SESSION['student-id'];
    $mobile = $_POST['mobile'];
    $email = strtolower($_POST['email']);
    $address = strtoupper($_POST['address']);
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT student_id FROM student WHERE student_id = '".$student_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $qury = "SELECT student_mobile FROM student WHERE student_mobile ='".$mobile."' AND NOT 
            student_id = '".$student_id."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $_SESSION['already-registered-mobile-msg'] = $mobile. " is already registered.";
                    header('location: admin-index.php');
                }
                else{
                    $qury = "UPDATE student SET student_mobile = '".$mobile."', student_email = 
                    '".$email."', student_address = '".$address."' WHERE student_id = 
                    '".$student_id."'";
                    if(mysqli_query($mysqli,$qury)){
                        $_SESSION['update-msg'] = $student_name. " is successfully updated.";
                        header('location: admin-index.php');
                    }
                }
            }
        }
    }
    mysqli_close($mysqli);
?>