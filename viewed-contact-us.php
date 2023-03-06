<?php
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $id = $_GET['id'];
    $qury = "SELECT * FROM contact_us WHERE id = '".$id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $qury = "DELETE FROM contact_us WHERE id = '".$id."'";
            if(mysqli_query($mysqli,$qury)){
                header('location: try-to-contact-by-visitors.php');
            }
        }
    }
    mysqli_close($mysqli);
?>