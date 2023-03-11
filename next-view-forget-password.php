<?php require_once 'header-index.php';?>
    
<!-- Navber content -->
<div class="d-flex justify-content-center  mt-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb nav-bread">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Forget Password</li>
    </ol>
    </nav>
</div>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-8">
                <form class="form-bg" action="insert-next-view-forget-password.php" method="post">
                    <div class="mb-3">
                        <h4 class="text-center field-top">Forget Password</h4>
                    </div>

                    <div class="mb-3">
                        <label class="form-label mb-0" for="password"><b>Password</b><span 
                        class="text-danger">*</span></label>
                        <input  class="form-control" type="password" name="password" 
                        id="password" title="Enter Password" 
                        placeholder="Enter Password" maxlength="20" 
                        onkeyup="passwordCheck()" required>
                        <span class="text-danger" id="pass"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="confirm-password">
                        <b>Confirm Password</b><span class="text-danger">*</span></label>
                        <input  class="form-control" type="password" name="confirm-password" 
                        id="confirm-password" title="Enter Confirm Password" 
                        placeholder="Enter Confirm Password" maxlength="20"
                        onkeyup="passwordCheck()" required>
                        <span class="text-danger" id="conpass"></span>
                    </div>
                    <div class="forget text-center">
                        <input class="btn btn-success btn-login" type="submit" id="submit"      
                        value="Submit" disabled>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php 
    require_once 'footer-index.php';
?>

<script>
      document.getElementById("title").innerHTML = "Student LifeLong | Forget Password";
</script>