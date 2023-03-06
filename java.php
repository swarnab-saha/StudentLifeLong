<?php 
    require_once 'database-connection.php';
    require_once 'header-index.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM course WHERE course_name = 'Java'";
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
        <li class="breadcrumb-item active" aria-current="page">Java</li>
    </ol>
    </nav>
</div>
    <div class="full-content mt-5">
        <div class="container">
            <div class="content">
                <h3 class="text-light">Java</h3>
                
                <!-- About course -->
                <p class="text-light text-sm-start text-md-start text-lg-start text-xl-start">
                    Java is a widely used object-oriented programming language and software platform 
                    that runs on billions of devices, including notebook computers, mobile devices, 
                    gaming consoles, medical devices and many others. The rules and syntax of java 
                    are based on the C and C++ languages.
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
                    <img src="./courses/java.png" class="card-img-top" 
                    alt="java_img">
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
                    Learn the core Java skills needed to apply for Java developer positions in 
                    just 14 hours.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Be able to sit for and pass the Oracle Java Certificate exam if you choose.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Be able to demonstrate your understanding of Java to future employers.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Learn industry "best practices" in Java software development from a 
                    professional Java developer who has worked in the language for 18 years.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Acquire essential java basics for transitioning to the Spring Framework, 
                    Java EE, Android development and more.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Obtain proficiency in Java 8 and Java 11.
                </p>
            </div>
        </div>
    </div>
<?php 
    require_once 'footer-index.php';
    mysqli_close($mysqli);    
?>

<script>
    document.getElementById("title").innerHTML = "Student LifeLong | Courses | Java";
</script>