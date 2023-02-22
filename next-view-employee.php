<?php 
    require_once 'admin-header.php';
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $employee_id = $_POST['employee-id'];
    $qury = "SELECT * FROM employee WHERE employee_id = '".$employee_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
        }
    }
?>

<!-- Navber content -->
<div class="d-flex justify-content-center view-short mt-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb nav-bread">
        <li class="breadcrumb-item"><a href="admin-index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Employee</li>
    </ol>
    </nav>
</div>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-8">
                <form class="form-bg view-short" action="insert-employee.php" method="post">
                    <div class="mb-3">
                        <h4 class="text-center field-top">Employee</h4>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for=""><b>Name :</b>  
                        <span><?php echo $row['employee_name'];?></span></label>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for=""><b>Date of Birth :</b>
                        <span><?php echo $row['employee_dob'];?></span></label>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for=""><b>Gender :</b> 
                        <span><?php echo $row['employee_gender'];?></span></label>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for=""><b>Mobile :</b>
                        <span><?php echo $row['employee_mobile'];?></span></label>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for=""><b>Email :</b>
                        <span><?php echo $row['employee_email'];?></span></label>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for=""><b>Address :</b>
                        <span><?php echo $row['employee_address'];?></span></label>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for=""><b>Department :</b> 
                        <span><?php
                        $department_id = $row['department_id'];
                        $qury = "SELECT department_name FROM department WHERE department_id = 
                        '".$department_id."'";
                        if($result=$mysqli->query($qury)){
                            if(mysqli_num_rows($result)>0){
                                $row = $result->fetch_assoc();
                            }
                        }
                        echo $row['department_name'];?></span></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require_once 'admin-footer.php';?>

<script>
    document.getElementById("admin-title").innerHTML = "Student LifeLong | Employee";
</script>