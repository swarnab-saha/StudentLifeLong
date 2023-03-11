<?php
    require_once 'database-connection.php';
    require_once 'header-index.php';
?>

<!-- Navber content -->
<div class="d-flex justify-content-center mt-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb nav-bread">
        
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>        
        <li class="breadcrumb-item active" aria-current="page">Forget Password</li>
    </ol>
    </nav>
</div>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-8">
                <form class="form-bg" action="next-forget-password.php" 
                method="post">
                    <div class="mb-3">
                        <h4 class="text-center field-top">Forget Password</h4>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="username"><b>Username</b><span 
                        class="text-danger">*</span></label>
                        <input  class="form-control" type="text" name="username" 
                        id="username" title="Enter Username" 
                        placeholder="Enter Username" maxlength="20" 
                        onkeyup="usernameCheck()" required>
                        <span class="text-danger" id="user"></span>
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
    require_once 'footer-index.php';
    $msg = "";
    if(isset($_SESSION['message'])){
      $msg = $_SESSION['message'];
    }
    echo '
    <script>
      document.getElementById("title").innerHTML = "Student LifeLong | Forget Password";
  
      var msg = "'.$msg.'";
      if(msg != ""){
        alert(msg);
      }
    </script>';
?>