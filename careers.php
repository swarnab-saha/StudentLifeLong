<?php require_once 'header-index.php';?>

<!-- Navber content -->
<div class="d-flex justify-content-center mt-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb nav-bread">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Careers</li>
    </ol>
    </nav>
</div>
    <form action="careers.php" method="post">
      <div class="current-opening text-center mt-5">
        <input type="submit" class="btn btn-primary" value="Current Openings">
      </div>
    </form>

    <div class="container mt-5 mb-5">
      <div class="row justify-content-center">
        <div class="card home">
          <img src="./courses/php.png" class="card-img-top img-card" alt="PHP img">
          <div class="self-card-body">
            <h5 class="card-title">PHP Developer</h5>
            <p class="card-text home-text">
                No. of Opening : 3 <br> Location: Kolkata
            </p>
          </div>
          <div class="text-center mb-3">
            <a href="php-developer-job.php" class="btn btn-primary btn-learn">View Job</a>
          </div>
        </div>
        <div class="card home">
          <img src="./courses/java.png" class="card-img-top img-card" alt="Java img">
          <div class="self-card-body">
            <h5 class="card-title">Java Developer</h5>
            <p class="card-text home-text">
                No. of Opening : 5 <br> Location: Kolkata
            </p>
          </div>
          <div class="text-center mb-3">
            <a href="java-developer-job.php" class="btn btn-primary btn-learn">View Job</a>
          </div>
        </div>
        <div class="card home">
          <img src="./courses/full_stack_developer.png" class="card-img-top img-card" 
          alt="Full Stack Developer img">
          <div class="self-card-body">
            <h5 class="card-title">Full Stack Developer</h5>
            <p class="card-text home-text">
                No. of Opening : 2 <br> Location: Kolkata
            </p>
          </div>
          <div class="text-center mb-3">
            <a href="full-stack-developer-job.php" class="btn btn-primary btn-learn">View Job</a>
          </div>
        </div>
        <div class="card home">
          <img src="./courses/cyber_security.png" class="card-img-top img-card" 
          alt="Cyber Security img">
          <div class="self-card-body">
            <h5 class="card-title">Cyber Security Expert</h5>
            <p class="card-text home-text">
                No. of Opening : 5 <br> Location: Kolkata
            </p>
          </div>
          <div class="text-center mb-3">
            <a href="cyber-security-expert-job.php" class="btn btn-primary btn-learn">View Job</a>
          </div>
        </div>
      </div>
    </div>

<?php require_once 'footer-index.php';?>

<script>
  document.getElementById("title").innerHTML = "Student LifeLong | Careers";
</script>