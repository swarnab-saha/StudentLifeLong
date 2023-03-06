<?php 
    require_once 'database-connection.php';
    require_once 'header-index.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM course WHERE course_name = 'Angular'";
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
        <li class="breadcrumb-item active" aria-current="page">Angular</li>
    </ol>
    </nav>
</div>
    <div class="full-content mt-5">
        <div class="container">
            <div class="content">
                <h3 class="text-light">Angular</h3>
                
                <!-- About course -->
                <p class="text-light text-sm-start text-md-start text-lg-start text-xl-start">
                    Angular is a Typescript-based free and open-source web application framework led 
                    by the Angular team at Google and by a community of individuals and 
                    corporations. Angular is mainly used to develop single-page applications.
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
                    <img src="./courses/angular.png" class="card-img-top" alt="angular_img">
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
                    Develop modern, complex, responsive and scalable web applications with 
                    Angular 14.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Fully understand the architecture behind an Angular application and how to 
                    use it.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Use the gained, deep understanding of the Angular fundamentals to quickly 
                    establish yourself as a frontend developer.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Create single-page applications with one of the most modern JavaScript 
                    frameworks out there.
                </p>
            </div>
        </div>
    </div>
<?php 
    require_once 'footer-index.php';
    mysqli_close($mysqli);
?>

<script>
    document.getElementById("title").innerHTML = "Student LifeLong | Courses | Angular";
</script>