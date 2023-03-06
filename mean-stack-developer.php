<?php 
    require_once 'database-connection.php';
    require_once 'header-index.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM course WHERE course_name = 'MEAN Stack Developer'";
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
        <li class="breadcrumb-item active" aria-current="page">MEAN Stack Developer</li>
    </ol>
    </nav>
</div>
    <div class="full-content mt-5">
        <div class="container">
            <div class="content">
                <h3 class="text-light">MEAN Stack Developer</h3>
                
                <!-- About course -->
                <p class="text-light text-sm-start text-md-start text-lg-start text-xl-start">
                    MEAN Stack refers to a collection of javascript technologies used to develop web 
                    applications. Therefore, from the client to the server and from server to the 
                    database, everything is based on javascript. MEAN is a full-stack development 
                    toolkit used to develop a fast and robust web applications.
                </p>

                <!-- Course fee -->
                <h6 class="text-light">Fee : 
                    <i class="fa-solid fa-indian-rupee-sign"></i> <del>9999</del>
                    <?php echo $course_fee;?>
                </h6>

                <!-- Course duration -->
                <h6 class="text-light">Duration : 
                    <i class="fa-sharp fa-solid fa-business-time"></i> 
                    <?php echo $course_duration;?> Month.
                </h6>
                
                <!-- Course img -->    
                <div class="card float-right card-img">
                    <img src="./courses/mean_stack_developer.png" class="card-img-top" 
                    alt="mean_stack_developer_img">
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
                    Build real Angular + NodeJS applications.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Connect any Angular Frontend with a NodeJS Backend.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Use ExpressJS as a NodeJS Framework.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Improve any Angular (+ NodeJS) application by adding Error Handling.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Understand how Angular works and how it interacts with Backends.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Use MongoDB with Mongoose to interact with Data on the Backend.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Provide a great user experience by using Optimistic.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Updating on the Frontend.
                </p>
            </div>
        </div>
    </div>
<?php 
    require_once 'footer-index.php';
    mysqli_close($mysqli);    
?>

<script>
    document.getElementById("title").innerHTML = "Student LifeLong | Courses | MEAN Stack       Developer";
</script>