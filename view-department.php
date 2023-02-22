<?php 
    session_start();
    require_once 'database-connection.php';
    $department_id = $_POST['department-id'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM department WHERE department_id = '".$department_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            require_once 'next-view-department.php';
        }
        else{
            $_SESSION['wrong-id-msg'] = "Invalid Department Id! Please check your input!";
            header('location: department-view.php');
        }
    }
    mysqli_close($mysqli);
?>