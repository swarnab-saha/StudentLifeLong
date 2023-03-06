<?php require_once 'header-index.php';?>
    
<!-- Navber content -->
<div class="d-flex justify-content-center mt-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb nav-bread">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Apply Online</li>
    </ol>
    </nav>
</div>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-8">
                <form class="form-bg" action="insert-apply-online.php" method="post">
                    <div class="mb-3">
                        <label class="form-label mb-0" for="name"><b>Name</b><span 
                        class="text-danger">*</span></label>
                        <input  class="form-control text-capitalize" type="text" name="name" 
                        id="name" onkeyup="textOnly(this)" title="Enter Name" 
                        placeholder="Enter Name" maxlength="100" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="mobile"><b>Mobile</b><span 
                        class="text-danger">*</span></label>
                        <input class="form-control" type="tel" name="mobile" id="mobile" 
                        onkeypress="numberOnly(this)" onkeyup="mobileNumber()" 
                        title="Enter Mobile Number" placeholder="Enter Mobile Number" maxlength="10" 
                        required>
                        <span class="text-danger" id="mob"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="email"><b>Email</b><span 
                        class="text-danger">*</span></label>
                        <input class="form-control text-capitalize" type="email" name="email" 
                        id="email" title="Enter Email" placeholder="Enter Email" maxlength="100" 
                        required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="course"><b>Course</b><span 
                        class="text-danger">*</span></label>
                        <select class="form-select" name="course" id="course" title="Select Course" 
                        required>
                            <option value="" disabled selected>Select</option>
                            <?php
                                require_once 'database-connection.php';
                                $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                $qury = "SELECT course_name FROM course";
                                if($result=$mysqli->query($qury)){
                                    if(mysqli_num_rows($result)>0){
                                        while($row=$result->fetch_assoc()){
                                            echo '<option value="'.$row['course_name'].'">'
                                            .$row['course_name'].'</option>';
                                        }
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="text-center">
                        <input class="btn btn-primary" type="submit" id="submit" 
                        value="Apply Now" disabled>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php 
    require_once 'footer-index.php';
    mysqli_close($mysqli);
?>

<script>
    document.getElementById("title").innerHTML = "Student LifeLong | Apply Online";
</script>