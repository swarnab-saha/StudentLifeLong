<?php 
    require_once 'database-connection.php';
    require_once 'header-index.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM course WHERE course_name = 'JavaScript'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $course_fee = $row['course_fee'];
            $course_duration = $row['course_duration'];
        }
        else{
            $course_fee = 'N.A';
            $course_duration = 'N.A';
        }
    }
?>

<!-- Navber content -->
<div class="d-flex justify-content-center mt-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb nav-bread">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">JavaScript</li>
    </ol>
    </nav>
</div>
    <div class="full-content mt-5">
        <div class="container">
            <div class="content">
                <h3 class="text-light">JavaScript</h3>
                
                <!-- About course -->
                <p class="text-light text-sm-start text-md-start text-lg-start text-xl-start">
                    Javascript, often abbreviated as JS, is a programming language that is one of 
                    the core technologies of the World Wide Web, alongside HTML and CSS. As of 2022, 
                    98% of websites use javascript on the client side for webpage behaviour, often 
                    incorporating third-party libraries.
                </p>

                <!-- Course fee -->
                <h6 class="text-light">Fee : 
                    <i class="fa-solid fa-indian-rupee-sign"></i> <del>5999</del>
                    <?php echo $course_fee;?>
                </h6>

                <!-- Course duration -->
                <h6 class="text-light">Duration : 
                    <i class="fa-sharp fa-solid fa-business-time"></i> 
                    <?php echo $course_duration;?> Month.
                </h6>

                <!-- Course img -->
                <div class="card float-right card-img">
                    <img src="./courses/javascript.png" class="card-img-top" 
                    alt="javascript_img">
                </div>
            </div>
        </div> 
    </div>

    <!-- Below course details -->
    <div class="container mb-5">
        <div class="card box">
            <div class="card-body">
                <h3>What you will learn ?</h3>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Become an advanced, confident, and modern JavaScript developer from scratch.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Become job-ready by understanding how JavaScript really works behind the scnes.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    JavaScript fundamentals: variables, if/else, operators, boolean logic, 
                    functions, arrays, objects, loops, strings, etc.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Modern OOP: Classes, constructors, prototypal inheritance, encapsulation, 
                    etc.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Asynchronous JavaScript: Event loop, promises, async/await, AJAX calls and 
                    APIs.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Modern tools for 2022 and beyond: NPM, Parcel, Babel and ES6 modules Get 
                    fast and friendly support in the Q&A are.
                </p>
            </div>
        </div>
    </div>
<?php 
    require_once 'footer-index.php';
    mysqli_close($mysqli);   
?>

<script>
    document.getElementById("title").innerHTML = "Student LifeLong | Courses | JavaScript";
</script>