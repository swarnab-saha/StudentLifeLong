<?php 
    require_once 'database-connection.php';
    require_once 'student-header.php';
    $student_id = $_SESSION['student-id'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT course_id FROM student WHERE student_id = '".$student_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $qury = "SELECT course.course_name FROM course,student WHERE course.course_id = 
            student.course_id";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $row = $result->fetch_assoc();
                    $course = $row['course_name'];
                }
            }
        }
    }
    $qury = "SELECT COUNT(student_id) AS student_id FROM chat_student WHERE student_id = 
    '".$student_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $chat_student = $row['student_id'];
        }
    }
?>

<div class="container mt-5">
  <div class="row justify-content-center mt-3">
      <div class="card home">
          <div class="self-card-body text-center">
            <h5 class="card-title">Course Subscribe : <?php echo $course;?></h5>
            <a href="student-course-view.php" class="btn btn-primary btn-learn">View</a>
          </div>
      </div>
      <div class="card home">
        <div class="self-card-body text-center">
          <h5 class="card-title">Chat Recieved : <?php echo $chat_student;?></h5>
          <a href="student-chat-employee.php" class="btn btn-primary btn-learn">View</a>
        </div>
      </div>
  </div>
</div>

<?php 
    require_once 'student-footer.php';
    $msg = "";
    if(isset($_SESSION['message'])){
        $msg = $_SESSION['message'];
        unset($_SESSION['message']);
    }
    echo '
    <script>
        document.getElementById("student-title").innerHTML = 
        "Student LifeLong | Student | Home";

    var msg = "'.$msg.'";
    if(msg != ""){
        alert(msg);
    }
    </script>';  
?>