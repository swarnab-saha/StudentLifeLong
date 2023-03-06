<?php 
    require_once 'database-connection.php';
    require_once 'header-index.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM course WHERE course_name = 'Data Science'";
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
        <li class="breadcrumb-item active" aria-current="page">Data Science</li>
    </ol>
    </nav>
</div>
    <div class="full-content mt-5">
        <div class="container">
            <div class="content">
                <h3 class="text-light">Data Science</h3>
                
                <!-- About course -->
                <p class="text-light text-sm-start text-md-start text-lg-start text-xl-start">
                    Data science is the study of data to extract meaningful insights for business. 
                    It is a multidisciplinary approach that combines principles and practices from 
                    the fields of mathematics, statistics, artificial intelligence, and computer 
                    engineering to analyze large amounts of data.
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
                    <img src="./courses/data_science.png" class="card-img-top" 
                    alt="data_science_img">
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
                    Learn all necessary core skills for Data Analysis, Data Science, and Machine 
                    Learning.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Learn how to use, from scratch, Python, R, SQL, Tableau, and MS Excel for 
                    data science.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Build and host a personal resume and portfolio of data science projects 
                    using GitHub Pages.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Learn how to setup development environments from scratch in R and Python.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Learn to deploy a machine learning model using docker.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Understand the first principles of data science and why it is so popular and 
                    important.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Learn about a broad range of data science and machine learning libraries and 
                    resources.
                </p>
            </div>
        </div>
    </div>
<?php 
    require_once 'footer-index.php';
    mysqli_close($mysqli);    
?>

<script>
    document.getElementById("title").innerHTML = "Student LifeLong | Courses | Data Science";
</script>