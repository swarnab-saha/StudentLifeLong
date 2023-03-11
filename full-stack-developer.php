<?php 
    require_once 'database-connection.php';
    require_once 'header-index.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM course WHERE course_name = 'Full Stack Developer'";
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
        <li class="breadcrumb-item active" aria-current="page">Full Stack Developer</li>
    </ol>
    </nav>
</div>
    <div class="full-content mt-5">
        <div class="container">
            <div class="content">
                <h3 class="text-light">Full Stack Developer</h3>
                
                <!-- About course -->
                <p class="text-light text-sm-start text-md-start text-lg-start text-xl-start">
                    Full Stack developer is someone who can work in both front and back end 
                    application. The front end is responsible for the visual look and feel of the 
                    website, while back end is responsible for the behind the scenes logic and 
                    infrastructure of the site.
                </p>

                <!-- Course fee -->
                <h6 class="text-light">Fee : 
                    <i class="fa-solid fa-indian-rupee-sign"></i> <del>11999</del>
                    <?php echo $course_fee;?>
                </h6>

                <!-- Course duration -->
                <h6 class="text-light">Duration : 
                    <i class="fa-sharp fa-solid fa-business-time"></i> 
                    <?php echo $course_duration;?> Month.
                </h6>

                <!-- Course img -->
                <div class="card float-right card-img">
                    <img src="./courses/full_stack_developer.png" class="card-img-top" 
                    alt="full_stack_developer_img">
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
                    Build 16 web development projects for your portfolio, ready to apply for 
                    junior developer jobs.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    After the course you will be able to build ANY website you want.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Work as a freelance web developer.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Learn the latest technologies, including Javascript, React, Node and even 
                    Web3 development.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Build fully-fledged websites and web apps for your startup or business.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Master frontend development with React.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Learn professional developer best practices.
                </p>
            </div>
        </div>
    </div>
<?php 
    require_once 'footer-index.php';
    mysqli_close($mysqli);
?>

<script>
    document.getElementById("title").innerHTML = "Student LifeLong | Courses | Full Stack Developer";
</script>