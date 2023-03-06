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

    <div class="container mt-5">
      <h3 class="text-center">Java Developer</h3>
      <h4 class="mt-5">About the Role</h4>
      <p>We are looking for a Java Developer responsible for developing systems and a suite of web 
        based software products.</p>
      <h4 class="mt-2">Responsibilities</h4>
      <ul>
        <li type="inner-circle">
          Integration of user-facing elements developed by front-end developers.
        </li>
        <li type="inner-circle">
          Build efficient, testable, and reusable Java modules.
        </li>
        <li type="inner-circle">
          Write clean, well-designed code.
        </li>
        <li type="inner-circle">
          Comfortable working in all phases of the development lifecycle.
        </li>
        <li type="inner-circle">
          Document the development process, architecture, and standard components.
        </li>
        <li type="inner-circle">
          Follow industry best practicess.
        </li>
      </ul>
      <h4 class="mt-2">Qualification</h4>
      <ul>
        <li class="inner-circle">
          Programming ability /functional correctness/ programming practices:
          <ul>
            <li class="circle">
              Ability to code accurately, efficiently and ensure timely programming.
            </li>
            <li class="circle">
              Strong knowledge of Java coding and web-based applications.
            </li>
            <li class="circle">
              Basic understanding of front-end technologies, such as JavaScript, jQuery, HTML5 and 
              CSS3.
            </li>
            <li class="circle">
              Should be able to work across the languages.
            </li>
          </ul>
        </li>
        <li type="inner-circle">
          Understanding of MVC design patterns.
        </li>
        <li type="inner-circle">
          Understanding accessibility and security compliance.
        </li>
        <li type="inner-circle">
          User authentication and authorization between multiple systems, servers, and environments.
        </li>
        <li type="inner-circle">
          Integration of multiple data sources and databases into one system.
        </li>
        <li type="inner-circle">
          Understanding of code versioning tools, such as Github.
        </li>
        <li type="inner-circle">
          Analytical, logical and problem-solving skills.
        </li>
      </ul>
    </div>

    <!-- For desktop view -->
    <div class="container desktop-job mt-5">
      <form action="insert-java-developer-job.php" method="post">
        <div class="row justify-content-center">
            <div class="name-div">
                <label class="form-label mb-0" for="name"><b>Name</b><span 
                class="text-danger">*</span></label>
                <input  class="form-control text-capitalize" type="text" name="name" 
                id="name" onkeyup="textOnly(this)" title="Name" placeholder="Name" maxlength="50" 
                required>
            </div>
            <div class="mobile-div">
                  <label class="form-label mb-0" for="mobile"><b>Mobile</b><span 
                  class="text-danger">*</span></label>
                  <input  class="form-control" type="text" name="mobile" 
                  id="mobile" onkeyup="mobileNumber()" title="Enter Mobile Number" 
                  placeholder="Enter Mobile Number" maxlength="10" required>
                  <span class="text-danger" id="mob"></span>
            </div>
            <div class="email-div">
                <label class="form-label mb-0" for="email"><b>Email</b><span 
                class="text-danger">*</span></label>
                <input  class="form-control text-capitalize" type="email" name="email" 
                id="email" title="Email" placeholder="Email" maxlength="100" required>
            </div>
        </div>
        <div class="text-center mt-3 mb-5">
          <input class="btn btn-primary" type="submit" id="submit" value="Apply">
        </div>
      </form>
    </div>
    
    <!-- For mobile view -->
    <div class="container mobile-job mt-5">
      <form action="insert-java-developer-job.php" method="post">
        <div class="row justify-content-center">
           <div class="col">
                <div class="name-div mb-3">
                    <label class="form-label mb-0" for="name"><b>Name</b><span 
                    class="text-danger">*</span></label>
                    <input  class="form-control text-capitalize" type="text" name="name" 
                    id="name" onkeyup="textOnly(this)" title="Name" placeholder="Name" 
                    maxlength="50" required>
                </div>
                <div class="mobile-div mb-3">
                    <label class="form-label mb-0" for="mobile"><b>Mobile</b><span 
                    class="text-danger">*</span></label>
                    <input  class="form-control" type="text" name="mobile" 
                    id="mobile" onkeyup="mobileNumber()" title="Enter Mobile Number" 
                    placeholder="Enter Mobile Number" maxlength="10" required>
                    <span class="text-danger" id="mob"></span>
                </div>
                <div class="email-div mb-3">
                    <label class="form-label mb-0" for="email"><b>Email</b><span 
                    class="text-danger">*</span></label>
                    <input  class="form-control text-capitalize" type="email" name="email" 
                    id="email" title="Email" placeholder="Email" maxlength="100" required>
                </div>
            </div>
        </div>
        <div class="text-center mb-5">
          <input class="btn btn-primary" type="submit" id="submit" value="Apply">
        </div>
      </form>
    </div>

<?php require_once 'footer-index.php';?>

<script>
  document.getElementById("title").innerHTML = "Student LifeLong | Careers";
</script>