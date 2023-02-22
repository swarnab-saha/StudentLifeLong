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
                <form class="form-bg view-short" action="delete-employee.php" method="post">
                    <div class="mb-3">
                        <h4 class="text-center field-top">Employee</h4>
                    </div>
                    <div class="mb-3">
                        <input  class="form-control text-capitalize" type="text" name="employee-id" 
                        id="employee-id" onkeyup="noSpace(this)" onkeypress="numberText(this)" 
                        title="Enter Employee Id" placeholder="Enter Employee Id" maxlength="10" 
                        required>
                    </div>
                    <div class="text-center">
                        <input class="btn btn-danger btn-apply" type="submit" id="submit" 
                        value="Delete">
                    </div>
                </form>
            </div>
        </div>      
    </div>
<?php require_once 'admin-footer.php';?>

<script>
    document.getElementById("admin-title").innerHTML = "Student LifeLong | Employee";
</script>