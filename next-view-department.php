<?php 
    require_once 'admin-header.php';
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $department_id = $_POST['department-id'];
    $qury = "SELECT * FROM department WHERE department_id = '".$department_id."'";
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
        <li class="breadcrumb-item active" aria-current="page">Department</li>
    </ol>
    </nav>
</div>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-8 form-bg view-short">
                <div class="mb-3">
                    <h4 class="text-center field-top">Department</h4>
                </div>
                <div class="mb-1">
                    <label class="form-label" for=""><b>Name :</b> 
                    <span>IT</span></label>
                </div>
            </div>
        </div>      
    </div>
<?php require_once 'admin-footer.php';?>

<script>
    document.getElementById("admin-title").innerHTML = "Student LifeLong | Department";
</script>