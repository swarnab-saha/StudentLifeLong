<?php 
    require_once 'database-connection.php';
    require_once 'header-index.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM course WHERE course_name = 'Python'";
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
        <li class="breadcrumb-item active" aria-current="page">Python</li>
    </ol>
    </nav>
</div>
    <div class="full-content mt-5">
        <div class="container">
            <div class="content">
                <h3 class="text-light">Python</h3>

                <!-- About course -->
                <p class="text-light text-sm-start text-md-start text-lg-start text-xl-start">
                    Python is an interpreted, object-oriented, high-level programming language with 
                    dynamic semantics developed by Guido van Rossum. It was originally released in 
                    1991. Designed to be easy as well as fun, the name "Python" is a nod to the 
                    British comedy group Monty Python.
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
                    <img src="./courses/python.png" class="card-img-top" 
                    alt="python_img">
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
                    You will master the Python programming language by building 100 unique 
                    projects over 100 days.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    You will learn automation, game, app and web development, data science and 
                    machine learning all using Python.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    You will be able to program in Python professionally.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    You will learn Selenium, Beautiful Soup, Request, Flask, Pandas, NumPy, 
                    Scikit Learn, Plotly, and Matplotlib.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Create a portfolio of 100 Python projects to apply for developer jobs.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Be able to build fully fledged websites and web apps with Python.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Be able to use Python for data science and machine learning.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Build games like Blackjack, Pong and Snake using Python.
                </p>
                <p><i class="fa-regular fa-hand-point-right"></i>
                    Build GUIs and Desktop applications with Python.
                </p>
            </div>
        </div>
    </div>
<?php 
    require_once 'footer-index.php';
    mysqli_close($mysqli);    
?>

<script>
    document.getElementById("title").innerHTML = "Student LifeLong | Courses | Python";
</script>