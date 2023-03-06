<?php 
    require_once 'database-connection.php';
    require_once 'header-index.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM course WHERE course_name = 'Bootstrap'";
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
        <li class="breadcrumb-item active" aria-current="page">Bootstrap</li>
    </ol>
    </nav>
</div>
    <div class="full-content mt-5">
        <div class="container">
            <div class="content">
                <h3 class="text-light">Bootstrap</h3>
                
                <!-- About course -->
                <p class="text-light text-sm-start text-md-start text-lg-start text-xl-start">
                    Bootstrap is a free, open source front-end development framework for the 
                    creation of websites and web pages. Designed to enable responsive development of 
                    mobile-first websites. Bootstrap provides a collection of syntax for 
                    template designs.
                </p>

                <!-- Course fee -->
                <h6 class="text-light">Fee : 
                    <i class="fa-solid fa-indian-rupee-sign"></i> <del>7999</del>
                    <?php echo $course_fee;?>
                </h6>

                <!-- Course duration -->
                <h6 class="text-light">Duration : 
                    <i class="fa-sharp fa-solid fa-business-time"></i>  
                    <?php echo $course_duration;?> Month.
                </h6>

                <!-- Course img -->
                <div class="card float-right card-img">
                    <img src="./courses/bootstrap.png" class="card-img-top" alt="bootstrap_img">
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
                    You will learn the Latest Bootstrap v5.2 Framework.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Build Bootstrap 5 Blog App (Project).
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Complete Bootstrap Implementation into any website.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    You will learn to Build customized Bootstrap 5 Web Apps.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    You will learn how to use Bootstrap 5 Containers.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    You will learn to create responsive courses, tables and typography.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    You will learn all the Bootstrap 5 components like, Badge, Breadcrumb, 
                    Buttons, Button group, Card, and much more.
                </p>
            </div>            
        </div>
    </div>
<?php 
    require_once 'footer-index.php';
    mysqli_close($mysqli);    
?>

<script>
    document.getElementById("title").innerHTML = "Student LifeLong | Courses | Bootstrap";
</script>