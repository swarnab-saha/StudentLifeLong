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

    <title id="title"></title>
</head>

<body>

    <!-- Top header -->
    <div class="text-top-header link-color">
        <div class="container-fluid">
            <span class="break-line"><a href="tel:+917908031808"><i class="fa-solid fa-phone"></i> 
            +91-7908031808</a></span>
            <span class="mail-space"><a href="mailto:sa.swarnab@gmail.com">
            <i class="fa-solid fa-envelope"></i> sa.swarnab@gmail.com</a></span>
        </div>
    </div>

    <!-- Navber -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid link-color">
            <a class="navbar-brand" href="index.php">Student LifeLong</a>
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
                        href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"        
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Courses
                        </a>
                        <ul class="dropdown-menu scrollable-menu" aria-labelledby="navbarDropdown" onclick="f1()">
                            <li><a class="dropdown-item" href="angular.php">Angular</a></li>
                            <li><a class="dropdown-item" href="bootstrap.php">Bootstrap</a></li>
                            <li><a class="dropdown-item" href="cloud-computing.php">Cloud 
                                Computing</a></li>
                            <li><a class="dropdown-item" href="cyber-security.php">Cyber 
                                Security</a></li>
                            <li><a class="dropdown-item" href="data-science.php">Data Science</a> 
                            </li>
                            <li><a class="dropdown-item" href="django.php">Django</a></li>
                            <li><a class="dropdown-item" href="full-stack-developer.php">Full Stack 
                                Developer</a></li>
                            <li><a class="dropdown-item" href="java.php">Java</a></li>
                            <li><a class="dropdown-item" href="javascript.php">Javascript</a></li>
                            <li><a class="dropdown-item" href="mean-stack-developer.php">MEAN Stack 
                                Developer</a></li>
                            <li><a class="dropdown-item" href="mern-stack-developer.php">MERN Stack 
                                Developer</a></li>
                            <li><a class="dropdown-item" href="node-js.php">Node JS</a></li>
                            <li><a class="dropdown-item" href="php.php">PHP</a></li>
                            <li><a class="dropdown-item" href="python.php">Python</a></li>
                            <li><a class="dropdown-item" href="react-js.php">React JS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-active" href="apply-online.php">
                        Apply Online</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-active" href="about-us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-active" href="contact-us.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-active" href="careers.php">Careers</a>
                    </li>
                    <li class="nav-item nav-login">
                        <a class="btn btn-success login-btn" href="user-login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login button for mobile view -->
   <div class="login link-color">
        <a class="btn btn-success login-btn" href="user-login.php">Login</a>
    </div>


    <!-- Search ber -->
    <div class="container mt-3">
        <form action="search.php" method="get">
            <div class="row div-search">
                <div>
                    <input class="form-control search-ber padding-search" type="search" 
                    placeholder="Search" aria-label="Search" name="search-box">
                </div>
                <div class="div-search-img">
                    <i class="fa-solid fa-magnifying-glass img-magnifying"></i>
                </div>
            </div>
        </form>
    </div>