<?php 
    require_once 'admin-header.php';
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $course_id = $_POST['course-id'];
    $qury = "SELECT * FROM course WHERE course_id = '".$course_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
        }
    }
    $_SESSION['course-id'] = $course_id;
?>
    
<!-- Navber content -->
<div class="d-flex justify-content-center view-short mt-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb nav-bread">
        <li class="breadcrumb-item"><a href="admin-index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Course</li>
    </ol>
    </nav>
</div>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-8">
                <form class="form-bg view-short" action="insert-next-update-course.php" 
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
<?php require_once 'admin-footer.php';?>

<script>
    document.getElementById("admin-title").innerHTML = "Student LifeLong | Course";
</script>