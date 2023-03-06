<?php 
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $department_id = $_SESSION['department_id'];
    $qury = "SELECT * FROM department WHERE department_id = '".$department_id."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $department_name = $row['department_name'];
            if($department_name == 'Admin'){
                require_once 'admin-header.php';
            }   
            else if($department_name == 'Admission'){
                require_once 'admission-header.php';
            } 
            else if($department_name == 'HR'){
                require_once 'hr-header.php';
            }   
            else if($department_name == 'Finance'){
                require_once 'finance-header.php';
            }   
        }
    }
?>

<!-- Navber content -->
<div class="d-flex justify-content-center mt-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb nav-bread">
        <?php
            if($department_name == 'Admin'){
                echo '
                <li class="breadcrumb-item"><a href="admin-index.php">Home</a></li>';
            }   
            else if($department_name == 'Admission'){
                echo '
                <li class="breadcrumb-item"><a href="admission-index.php">Home</a></li>';
            } 
            else if($department_name == 'HR'){
                echo '
                <li class="breadcrumb-item"><a href="hr-index.php">Home</a></li>';
            } 
            else if($department_name == 'Finance'){
                echo '
                <li class="breadcrumb-item"><a href="finance-index.php">Home</a></li>';
            }
        ?>
        <li class="breadcrumb-item active" aria-current="page">View Admissions</li>
    </ol>
    </nav>
</div>

<div class="mt-5 table-overflow">
    <table class="table text-center">
        <thead class="thead-dark">
            <tr class="bg-dark text-light">
                <th>#</th>
                <th>Admission Id</th>
                <th>Admission Date</th>
                <th>Student Name</th>
                <th>Course Name</th>
            </tr>
        </thead>
        <?php 
            require_once 'database-connection.php';
            $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
            $qury = "SELECT admission.admission_id,admission.admission_date,student.student_name,
            course.course_name FROM admission,student,course WHERE admission.student_id = 
            student.student_id AND student.course_id = course.course_id";
            $count = 0;
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    while($row = $result->fetch_assoc()) {
                        $admission_id = $row['admission_id'];
                        $admission_date = $row['admission_date'];
                        $student_name = $row['student_name'];
                        $course_name = $row['course_name'];
                        $count++;
                        echo '
                        <thead>
                            <tr>
                                <td>'.$count.'</td>
                                <td>'.$admission_id.'</td>
                                <td>'.$admission_date.'</td>
                                <td>'.$student_name.'</td>
                                <td>'.$course_name.'</td>
                            </tr>
                        </thead>';           
                    }
                }
                else{
                    echo '
                    <table>
                        <marquee behavior="" direction="" class="text-danger">
                        No data available.</marquee>
                    </table>';
                }
            }       
        ?>      
    </table>
</div>

<?php 
    if($department_name == 'Admin'){
        require_once 'admin-footer.php';
        echo '
        <script>
            document.getElementById("admission-title").innerHTML = 
            "Student LifeLong | View Admissions";
        </script>'; 
    }   
    else if($department_name == 'Admission'){
        require_once 'admission-footer.php';
        echo '
        <script>
            document.getElementById("admission-title").innerHTML = 
            "Student LifeLong | View Admissions";
        </script>'; 
    } 
    else if($department_name == 'HR'){
        require_once 'hr-footer.php';
        echo '
        <script>
            document.getElementById("hr-title").innerHTML = 
            "Student LifeLong | View Admissions";
        </script>'; 
    } 
    else if($department_name == 'Finance'){
        require_once 'finance-footer.php';
        echo '
        <script>
            document.getElementById("finance-title").innerHTML = 
            "Student LifeLong | View Admissions";
        </script>'; 
    } 
    mysqli_close($mysqli);  
?>