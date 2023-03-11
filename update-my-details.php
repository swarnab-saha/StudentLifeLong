<?php
    require_once 'database-connection.php';
    require_once 'student-header.php';
    $student_id = $_SESSION['student-id'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM student WHERE student_id = '".$student_id."'";
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
        <li class="breadcrumb-item active" aria-current="page">My Details</li>
    </ol>
    </nav>
</div>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-8">
                <form class="form-bg" action="insert-update-my-details.php" 
                method="post">
                    <div class="mb-3">
                        <h4 class="text-center field-top">My Details</h4>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="mobile"><b>Mobile</b><span 
                        class="text-danger">*</span></label>
                        <input  class="form-control" type="text" name="mobile" 
                        id="mobile" onkeyup="mobileNumber()" title="Enter Mobile Number" 
                        placeholder="Enter Mobile Number" maxlength="10" value=
                        "<?php echo $row['student_mobile'];?>" required>
                        <span class="text-danger" id="mob"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="email"><b>Email</b><span 
                        class="text-danger">*</span></label>
                        <input  class="form-control" type="email" name="email" id="email" 
                        title="Enter Email" placeholder="Enter Email" maxlength="100" value=
                        "<?php echo $row['student_email'];?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="address"><b>Address</b><span 
                        class="text-danger">*</span></label>
                        <input  class="form-control" type="text" name="address" id="address" 
                        title="Enter Address" placeholder="Enter Address" maxlength="100" value=
                        "<?php echo $row['student_address'];?>" required>
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
    require_once 'student-footer.php';
    mysqli_close($mysqli);
?>

<script>
    document.getElementById("student-title").innerHTML = "Student LifeLong | My Details Update";
</script>