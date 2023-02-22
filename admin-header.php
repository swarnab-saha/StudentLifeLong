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
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <title id="admin-title"></title>
</head>

<body>

    <!-- Navber -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid link-color">
            <a class="navbar-brand view-short" href="index.php">Student LifeLong</a>
            <button class="navbar-toggler view-short" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-right" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 view-short">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" id="home"
                        href="admin-index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Entry
                        </a>
                        <ul class="dropdown-menu scrollable-menu" aria-labelledby="navbarDropdown" >
                            <li><a class="dropdown-item" href="course-entry.php">Course</a></li>
                            <li><a class="dropdown-item" href="department-entry.php">Department</a> 
                            </li>
                            <li><a class="dropdown-item" href="employee-entry.php">Employee</a> 
                            </li>
                            <li><a class="dropdown-item" href="student-entry.php">Student</a> 
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            View
                        </a>
                        <ul class="dropdown-menu scrollable-menu" aria-labelledby="navbarDropdown" >
                            <li><a class="dropdown-item" href="course-view.php">Course</a></li>
                            <li><a class="dropdown-item" href="department-view.php">Department</a> 
                            </li>
                            <li><a class="dropdown-item" href="employee-view.php">Employee</a> 
                            </li>
                            <li><a class="dropdown-item" href="student-view.php">Student</a> 
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Update
                        </a>
                        <ul class="dropdown-menu scrollable-menu" aria-labelledby="navbarDropdown" >
                            <li><a class="dropdown-item" href="course-update.php">Course</a></li>
                            <li><a class="dropdown-item" href="department-update.php">Department</a> 
                            </li>
                            <li><a class="dropdown-item" href="employee-update.php">Employee</a> 
                            </li>
                            <li><a class="dropdown-item" href="student-update.php">Student</a> 
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Delete
                        </a>
                        <ul class="dropdown-menu scrollable-menu" aria-labelledby="navbarDropdown" >
                            <li><a class="dropdown-item" href="course-delete.php">Course</a></li>
                            <li><a class="dropdown-item" href="department-delete.php">Department</a> 
                            </li>
                            <li><a class="dropdown-item" href="employee-delete.php">Employee</a> 
                            </li>
                            <li><a class="dropdown-item" href="student-delete.php">Student</a> 
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Admission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Attendance</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Chat
                        </a>
                        <ul class="dropdown-menu scrollable-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="chat-employee.php">with Employee</a> 
                            </li>
                            <li><a class="dropdown-item" href="chat-student.php">with Student</a> 
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item search-link">
                        <a class="nav-link" href="#" onclick="search_ber_show()">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Test</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
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
                    <input class="form-control search-ber padding-search view-short" type="search" 
                    placeholder="Search" aria-label="Search">
                </div>
                <div class="div-search-img">
                    <i class="fa-solid fa-magnifying-glass img-magnifying-admin view-short" ></i>
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