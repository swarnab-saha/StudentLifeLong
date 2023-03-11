<?php 
    require_once 'database-connection.php';
    require_once 'student-header.php';
    $student_id = $_SESSION['student-id'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT admission.admission_id,admission.admission_date,student.student_name,
    course.course_name,course_fee.mr_no FROM admission,student,course,course_fee WHERE 
    admission.student_id = student.student_id AND student.course_id = course.course_id";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
        }
    }
?>

<!-- Navber content -->
<div class="d-flex justify-content-center mt-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb nav-bread">
        <li class="breadcrumb-item"><a href="student-index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">My Admission</li>
    </ol>
    </nav>
</div>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-8 form-bg">
                <div class="mb-3">
                    <h4 class="text-center field-top">Admission</h4>
                </div>
                <div class="mb-1">
                    <label class="form-label" for=""><b>Admission No :</b>  
                    <span><?php echo $row['admission_id'];?></span></label>
                </div>
                <div class="mb-1">
                    <label class="form-label" for=""><b>Admission Date :</b>
                    <span><?php echo $row['admission_date'];?></span></label>
                </div>
                <div class="mb-1">
                    <label class="form-label" for=""><b>MR No :</b>
                    <span><?php echo $row['mr_no'];?></span></label>
                </div>
                <div class="mb-1">
                    <label class="form-label" for=""><b>Name :</b> 
                    <span><?php echo $row['student_name'];?></span></label>
                </div>
                <div class="mb-1">
                    <label class="form-label" for=""><b>Course Name :</b>
                    <span><?php echo $row['course_name'];?></span></label>
                </div>
                <div class="text-center">
                    <a class="btn btn-danger" href="student-index.php">Exit</a>
                </div>
            </div>
        </div>      
    </div>
<?php 
    require_once 'student-footer.php'; 
    mysqli_close($mysqli);
?>

<script>
    document.getElementById("finance-title").innerHTML = "Student LifeLong | View My Admission";
</script>