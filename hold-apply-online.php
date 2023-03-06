<?php
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $id = $_GET['id'];
    $qury = "SELECT * FROM apply_online WHERE id = '".$id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $mobile = $row['mobile'];
            $email = $row['email'];
            $course_id = $row['course_id'];
            $qury = "INSERT INTO hold_apply_online(name,mobile,email,course_id) 
            VALUES('".$name."','".$mobile."','".$email."','".$course_id."')";
            if(mysqli_query($mysqli,$qury)){
                header('location: apply-by-students.php');
            }
            $qury = "DELETE FROM apply_online WHERE id = '".$id."'";
            if(mysqli_query($mysqli,$qury)){

            }
        }
    }
    mysqli_close($mysqli);
?>