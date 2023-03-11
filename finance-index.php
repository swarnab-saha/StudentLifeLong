<?php 
    require_once 'database-connection.php';
    require_once 'finance-header.php';
    $employee_id = $_SESSION['employee-id'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT COUNT(*) AS student_id FROM student";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $student = $row['student_id'];
        }
    }
    $qury = "SELECT COUNT(*) AS admission_id FROM admission";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $admission = $row['admission_id'];
        }
    }
    $qury = "SELECT COUNT(employee_id) AS employee_id FROM chat_employee WHERE employee_id = 
    '".$employee_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $chat_employee = $row['employee_id'];
        }
    }
?>

<div class="container mt-5">
  <div class="row justify-content-center mt-3">
      <div class="card home">
        <div class="self-card-body text-center">
          <h5 class="card-title">Total Students : <?php echo $student;?></h5>
          <a href="student-view.php" class="btn btn-primary btn-learn">View</a>
        </div>
      </div>
  </div>
</div>
<div class="container mt-5">
  <div class="row justify-content-center mt-3">
      <div class="card home">
          <div class="self-card-body text-center">
            <h5 class="card-title">Total Admissions : <?php echo $admission;?></h5>
            <a href="admission-students.php" class="btn btn-primary btn-learn">View</a>
          </div>
      </div>
      <div class="card home">
        <div class="self-card-body text-center">
          <h5 class="card-title">Chat Recieved : <?php echo $chat_employee;?></h5>
          <a href="chat-employee.php" class="btn btn-primary btn-learn">View</a>
        </div>
      </div>
  </div>
</div>

<?php 
    require_once 'finance-footer.php';
    $msg = "";
    if(isset($_SESSION['message'])){
        $msg = $_SESSION['message'];
        unset($_SESSION['message']);
    }
    echo '
    <script>
        document.getElementById("finance-title").innerHTML = "Student LifeLong | Finance | Home";

    var msg = "'.$msg.'";
    if(msg != ""){
        alert(msg);
    }
    </script>';  
?>