<?php 
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $department_id = $_SESSION['department_id'];
    $qury = "SELECT * FROM department WHERE department_id = '".$department_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $department_name = $row['department_name'];
            if($department_name == 'Admin'){
                require_once 'admin-header.php';
            }   
            else if($department_name == 'Admission'){
                require_once 'admission-header.php';
            } 
            else if($department_name == 'HR'){
                require_once 'hr-header.php';
            }
            else if($department_name == 'Finance'){
                require_once 'finance-header.php';
            }   
        }
    }
    $course_id = $_POST['suggestions'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM course WHERE course_id = '".$course_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
        }
    }
    $_SESSION['course-id'] = $course_id;
?>
    
<!-- Navber content -->
<div class="d-flex justify-content-center mt-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb nav-bread">
        <?php
            if($department_name == 'Admin'){
                echo '
                <li class="breadcrumb-item"><a href="admin-index.php">Home</a></li>';
            }   
            else if($department_name == 'Admission'){
                echo '
                <li class="breadcrumb-item"><a href="admission-index.php">Home</a></li>';
            } 
            else if($department_name == 'HR'){
                echo '
                <li class="breadcrumb-item"><a href="hr-index.php">Home</a></li>';
            } 
            else if($department_name == 'Finance'){
                echo '
                <li class="breadcrumb-item"><a href="finance-index.php">Home</a></li>';
            }
        ?>
        <li class="breadcrumb-item active" aria-current="page">Course</li>
    </ol>
    </nav>
</div>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-8">
                <form class="form-bg" action="insert-next-update-course.php" 
                method="post">
                    <div class="mb-3">
                        <h4 class="text-center field-top">Course</h4>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="course-name"><b>Name</b><span 
                        class="text-danger">*</span></label>
                        <input  class="form-control text-capitalize" type="text" name="course-name" 
                        id="course-name" onkeyup="textOnly(this)" title="Update Course Name" 
                        placeholder="Update Course Name" maxlength="100" value=
                        "<?php echo $row['course_name'];?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="course-fee"><b>Fees</b><span 
                        class="text-danger">*</span></label>
                        <input  class="form-control" type="text" name="course-fee" 
                        id="course-fee" onkeyup="numberOnly(this)" title="Update Course Fee" 
                        placeholder="Update Course Fee" maxlength="5" value=
                        "<?php echo $row['course_fee'];?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="course-duration"><b>Duration</b> 
                        <span class="text-danger">*</span></label>
                        <input  class="form-control" type="number" name="course-duration" 
                        id="course-duration" title="Update Course Duration" 
                        placeholder="Update Course Duration" maxlength="3" value=
                        "<?php echo $row['course_duration'];?>" required>
                        <div class="text-end">
                            <span class="text-danger">Course duration in month</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <input class="btn btn-danger btn-apply" type="submit" id="submit" 
                        value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php 
    if($department_name == 'Admin'){
        require_once 'admin-footer.php';
        echo '
        <script>
            document.getElementById("admin-title").innerHTML = "Student LifeLong | Course";
        </script>'; 
    }   
    else if($department_name == 'Admission'){
        require_once 'admission-footer.php';
        echo '
        <script>
            document.getElementById("admission-title").innerHTML = "Student LifeLong | Course";
        </script>'; 
    }
    else if($department_name == 'HR'){
        require_once 'hr-footer.php';
        echo '
        <script>
            document.getElementById("hr-title").innerHTML = "Student LifeLong | Course";
        </script>'; 
    }
    else if($department_name == 'Finance'){
        require_once 'finance-footer.php';
        echo '
        <script>
            document.getElementById("finance-title").innerHTML = "Student LifeLong | Course";
        </script>'; 
    }  
?>