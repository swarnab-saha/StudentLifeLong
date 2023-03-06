<?php 
    require_once 'database-connection.php';
    require_once 'header-index.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM course WHERE course_name = 'Cyber Security'";
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
        <li class="breadcrumb-item active" aria-current="page">Cyber Security</li>
    </ol>
    </nav>
</div>
    <div class="full-content mt-5">
        <div class="container">
            <div class="content">
                <h3 class="text-light">Cyber Security</h3>
                
                <!-- About course -->
                <p class="text-light text-sm-start text-md-start text-lg-start text-xl-start">
                    Cyber security is the application of technologies, processes and controls to 
                    protect systems, networks, programs, devices and data from cyber attacks. It 
                    aims to reduce the risk of cyber attacks and protect against the unauthorised 
                    exploitation of systems, networks and technologies.
                </p>

                <!-- Course fee -->
                <h6 class="text-light">Fee : 
                    <i class="fa-solid fa-indian-rupee-sign"></i> <del>5449</del>
                    <?php echo $course_fee;?>
                </h6>
                
                <!-- Course duration -->
                <h6 class="text-light">Duration : 
                    <i class="fa-sharp fa-solid fa-business-time"></i> 
                    <?php echo $course_duration;?> Month.
                </h6>

                <!-- Course img -->
                <div class="card float-right card-img">
                    <img src="./courses/cyber_security.png" class="card-img-top" 
                    alt="cyber_security_img">
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
                    Security Governance, Network Security, Cyber Attacks, Web Application 
                    Security, Malware.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Practical Cyber Security skills through hands on labs.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Prepare for Cyber Security interviews by learning common interview questions 
                    and how to respond.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Prepare for in-demand Cyber Security certifications such as CompTIA 
                    Security+ and CEH.
                </p>
            </div>
        </div>
    </div>
<?php 
    require_once 'footer-index.php';
    mysqli_close($mysqli);    
?>

<script>
    document.getElementById("title").innerHTML = "Student LifeLong | Courses | Cyber Security";
</script>