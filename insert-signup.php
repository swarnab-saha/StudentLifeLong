<?php 
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $id = strtoupper($_POST['id']);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role_employee = 'Employee';
    $role_student = 'Student';

    // For employee
    $qury = "SELECT employee_id FROM employee WHERE employee_id = '".$id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){ 
            $qury = "SELECT username FROM signup WHERE username = '".$username."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)<1){
                    $qury = "SELECT emp_stu_id FROM signup WHERE emp_stu_id = '".$id."'";
                    if($result=$mysqli->query($qury)){
                        if(mysqli_num_rows($result)<1){
                            $qury = "INSERT INTO signup(emp_stu_id,username,password,role) 
                            VALUES('".$id."','".$username."','".$password."','".$role_employee."')";
                            if(mysqli_query($mysqli,$qury)){
                                $_SESSION['message'] = "Thank You for creating account.";
                                header('location: user-login.php');
                            }
                        }
                        else{
                            $_SESSION['message'] = 
                            "We notice that you have already create an account.";
                            header('location: user-login.php');
                        }
                    }
                }
                else{
                    $_SESSION['message'] = $username. " is already taken by others.";
                    header('location: signup.php');
                }
            }
        }
        else{

            // For student
            $qury = "SELECT student_id FROM student WHERE student_id = '".$id."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $qury = "SELECT emp_stu_id FROM signup WHERE emp_stu_id = '".$id."'";
                    $qury = "SELECT username FROM signup WHERE username = '".$username."'";
                    if($result=$mysqli->query($qury)){
                        if(mysqli_num_rows($result)<1){
                            if($result=$mysqli->query($qury)){
                                if(mysqli_num_rows($result)<1){
                                    $qury = "INSERT INTO signup(emp_stu_id,username,password,role) 
                                    VALUES('".$id."','".$username."','".$password."',
                                    '".$role_student."')";
                                    if(mysqli_query($mysqli,$qury)){
                                        $_SESSION['message'] = "Thank You for creating account.";
                                        header('location: user-login.php'); 
                                    }
                                }
                                else{
                                    $_SESSION['message'] = "We notice that you have already 
                                    create an account.";
                                    header('location: user-login.php');
                                }
                            }
                        }
                        else{
                            $_SESSION['message'] = $username. " is already taken by    
                            others.";
                            header('location: signup.php');
                        }
                    }
                }
                else{
                    $_SESSION['message'] = "Invalid Employee/Student Id! Please check your 
                    input!";
                    header('location: signup.php');
                }
            }
        }
    }
    mysqli_close($mysqli);
?>
