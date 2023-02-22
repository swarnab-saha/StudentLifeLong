<?php require_once 'admin-header.php';?>

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
                    <div class="mb-3">
                        <label class="form-label mb-0" for="employee-id"><b>Id</b><span 
                        class="text-danger">*</span></label>
                        <input  class="form-control text-capitalize" type="text" name="employee-id" 
                        id="employee-id" onkeyup="noSpace(this)" onkeypress="numberText(this)" 
                        title="Enter Employee Id" placeholder="Enter Employee Id" maxlength="10" 
                        required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="employee-name"><b>Name</b><span 
                        class="text-danger">*</span></label>
                        <input  class="form-control text-capitalize" type="text" 
                        name="employee-name" id="employee-name" onkeyup="textOnly(this)" 
                        title="Enter Name" placeholder="Enter Name" maxlength="100" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="employee-dob"><b>Date of Birth</b><span 
                        class="text-danger">*</span></label>
                        <input  class="form-control" type="date" 
                        name="employee-dob" id="employee-dob"title="Select Date of Birth" 
                        placeholder="Select Date of Birth" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="employee-gender"><b>Gender</b><span 
                        class="text-danger">*</span></label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="employee-gender" 
                            id="male" value="Male" required>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="employee-gender" 
                            id="female" value="Female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="employee-gender" 
                            id="others" value="Others">
                            <label class="form-check-label" for="others">Others</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="mobile"><b>Mobile</b><span 
                        class="text-danger">*</span></label>
                        <input  class="form-control" type="text" name="mobile" 
                        id="mobile" onkeyup="mobileNumber()" title="Enter Mobile Number" 
                        placeholder="Enter Mobile Number" maxlength="10" required>
                        <span class="text-danger" id="mob"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="email"><b>Email</b><span 
                        class="text-danger">*</span></label>
                        <input  class="form-control" type="email" name="email" id="email" 
                        title="Enter Email" placeholder="Enter Email" maxlength="100" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="address"><b>Address</b><span 
                        class="text-danger">*</span></label>
                        <input  class="form-control" type="text" name="address" id="address" 
                        title="Enter Address" placeholder="Enter Address" maxlength="100" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="department-name"><b>Department</b> 
                        <span class="text-danger">*</span></label>
                        <select name="department-name" id="department-name" class="form-select" 
                        required>    
                             <option value="" disabled selected>Select</option>
                             <?php
                                require_once 'database-connection.php';
                                $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
                                $qury = "SELECT department_name FROM department";
                                if($result=$mysqli->query($qury)){
                                    if(mysqli_num_rows($result)>0){
                                        while($row=$result->fetch_assoc()){
                                            echo '<option                                           
                                            value="'.$row['department_name'].'">'
                                            .$row['department_name'].'</option>';
                                        }
                                    }
                                }
                             ?>
                        </select>
                    </div>
                    <div class="text-center">
                        <input class="btn btn-danger btn-apply" type="submit" id="submit" 
                        value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php 
    require_once 'admin-footer.php';
    mysqli_close($mysqli);
?>

<script>
    document.getElementById("admin-title").innerHTML = "Student LifeLong | Employee";
</script>