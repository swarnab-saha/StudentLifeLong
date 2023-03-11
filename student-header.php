<?php require_once 'database-connection.php';?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- Logo -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <title id="student-title"></title>
</head>

<body>

    <!-- Navber -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid link-color">
            <a class="navbar-brand" href="student-index.php">Student LifeLong</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-right" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-active" aria-current="page" id="home"
                        href="student-index.php">Home</a>
                    </li>   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Update
                        </a>
                        <ul class="dropdown-menu scrollable-menu" aria-labelledby="navbarDropdown" >
                            <li><a class="dropdown-item" href="update-my-details.php">My Details</a> 
                            </li>
                        </ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Chat
                        </a>
                        <ul class="dropdown-menu scrollable-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="student-chat-employee.php">
                                with Employee</a> 
                        </ul>
                    </li>
                    <li class="nav-item search-link">
                        <a class="nav-link" href="#" onclick="search_ber_show()">Search</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu scrollable-menu dropdown-menu-lg-end" 
                        aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="view-my-admission.php">
                            My Admission</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php 
                                $student_id = $_SESSION['student-id'];
                                $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                $qury = "SELECT student_name FROM student WHERE student_id = 
                                '".$student_id."'";
                                if($result=$mysqli->query($qury)){
                                    if(mysqli_num_rows($result)>0){
                                        $row = $result->fetch_assoc();
                                        if(strpos($row['student_name'],' ',0)>0)
                                            $student_name = 
                                            substr($row['student_name'],0,
                                            strpos($row['student_name'],' ',0));
                                        else
                                            $student_name = $row['student_name'];
                                    }
                                }
                                $username = $student_name;
                                echo $username;
                                mysqli_close($mysqli);
                            ?>
                        </a>
                        <ul class="dropdown-menu scrollable-menu dropdown-menu-lg-end" 
                        aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="student-my-profile.php">
                                My Profile</a> 
                            </li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a> 
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Search ber -->
    <div class="container mt-3" id="search_bar">
        <form>
            <div class="row div-search">
                <div class="text-end search-cross">
                    <i class="fa-sharp fa-regular fa-circle-xmark" onclick="search_ber_show()"> 
                    </i>
                </div>
                <div>
                    <input class="form-control search-ber padding-search" type="search" 
                    placeholder="Search" aria-label="Search">
                </div>
                <div class="div-search-img">
                    <i class="fa-solid fa-magnifying-glass img-magnifying-admin" ></i>
                </div>
            </div>
        </form>
    </div>

<!-- Custom JavaScript for search ber -->
<script>
    function search_ber_display(x) {
    if (x.matches) { 
        document.getElementById("search_bar").hidden = false;
    } else {
        document.getElementById("search_bar").hidden = true;
    }
  }

  var length = window.matchMedia("(max-width: 576px)")
  search_ber_display(length) 
  length.addListener(search_ber_display)
</script>