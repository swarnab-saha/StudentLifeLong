<?php
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $search_box = $_GET['search-box'];
    $qury = "SELECT file FROM search WHERE search_key = '".$search_box."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            header('location: '.$row['file']);
        }
        else{
            echo '1';
        }
    }
    mysqli_close($mysqli);
?>