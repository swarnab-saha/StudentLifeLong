<?php 
    require_once 'database-connection.php';
    $employee_id = $_POST['suggestions'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM employee WHERE employee_id = '".$employee_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            require_once 'next-view-employee.php';
        }
        else{
            $_SESSION['message'] = "Invalid Employee Id! Please check your input!";
            header('location: employee-view.php');
        }
    }
?>