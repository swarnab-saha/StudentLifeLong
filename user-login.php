<?php require_once 'header-index.php';?>

<!-- Navber content -->
<div class="d-flex justify-content-center view-short mt-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb nav-bread">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Login</li>
    </ol>
    </nav>
</div>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-8">
                <form class="form-bg view-short" action="" method="post">
                    <div class="mb-3">
                        <h4 class="text-center field-top">Login Now</h4>
                    </div>

                    <!-- Username & Password input -->
                    <div class="mb-3">
                        <label class="form-label mb-0" for="username"><b>Username</b></label>
                        <input  class="form-control" type="text" name="username" 
                        id="username" title="Enter Username" 
                        placeholder="Enter Username" maxlength="20" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-0" for="password"><b>Password</b></label>
                        <input  class="form-control" type="password" name="password" 
                        id="password" title="Enter Password" 
                        placeholder="Enter Password" maxlength="20" required>
                        <div class="forget text-end">
                            <a href="">forget password?</a>
                        </div>
                    </div>
                    <div class="forget text-center">
                        <input class="btn btn-success btn-login" type="submit" id="submit"      
                        value="Login"><br>
                            <a href="signup.php">No account? Sign up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require_once 'footer-index.php';?>