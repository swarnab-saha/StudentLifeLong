<?php 
    require_once 'database-connection.php';
    require_once 'header-index.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM course WHERE course_name = 'PHP'";
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
        <li class="breadcrumb-item active" aria-current="page">PHP</li>
    </ol>
    </nav>
</div>
    <div class="full-content mt-5">
        <div class="container">
            <div class="content">
                <h3 class="text-light">PHP</h3>
                
                <!-- About course -->
                <p class="text-light text-sm-start text-md-start text-lg-start text-xl-start">
                    PHP is a script language and interpreter that is freely available and used 
                    primarily on Linux Web servers. PHP is mostly used for making web servers. It 
                    runs on the browser and is also capable of running in the command line.
                </p>

                <!-- Course fee -->
                <h6 class="text-light">Fee : 
                    <i class="fa-solid fa-indian-rupee-sign"></i> <del>6449</del>
                    <?php echo $course_fee;?>
                </h6>

                <!-- Course duration -->
                <h6 class="text-light">Duration : 
                    <i class="fa-sharp fa-solid fa-business-time"></i> 
                    <?php echo $course_duration;?> Month.
                </h6>

                <!-- Course img -->
                <div class="card float-right card-img">
                    <img src="./courses/php.png" class="card-img-top" 
                    alt="php_img">
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
                    You will learn to create a (CMS) Content Management System like WordPress, 
                    Drupal or Joomla.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    You will learn MySQL.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    You will learn how to use Databases.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    You will learn how to launch your application online.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    How to use AJAX to submit data to the server without refreshing the page.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    You will learn about sessions.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Email sending.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    You will learn to create clean URL's and remove the .php from files.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    You will learn to debug your code.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    You will code refactoring.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    You will learn to use an API to bring data from a database to a 
                    graphical interface.
                </p>
            </div>
        </div>
    </div>
<?php 
    require_once 'footer-index.php';
    mysqli_close($mysqli);    
?>

<script>
    document.getElementById("title").innerHTML = "Student LifeLong | Courses | PHP";
</script>