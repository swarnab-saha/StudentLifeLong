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
        <li class="breadcrumb-item active" aria-current="page">Hold Students</li>
    </ol>
    </nav>
</div>

    <div class="mt-5 table-overflow">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr class="bg-dark text-light">
                    <th>#</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Course Name</th>
                    <th>Course Fees</th>
                    <th>Course Duration</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php 
                require_once 'database-connection.php';
                $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                $qury = "SELECT hold_apply_online.id,hold_apply_online.name,
                hold_apply_online.mobile,hold_apply_online.email,course.course_name,
                course.course_fee, course.course_duration FROM hold_apply_online,course 
                WHERE hold_apply_online.course_id = course.course_id";
                $count = 0;
                if($result=$mysqli->query($qury)){
                    if(mysqli_num_rows($result)>0){
                        while($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $mobile = $row['mobile'];
                            $email = $row['email'];
                            $course_name = $row['course_name'];
                            $course_fee = $row['course_fee'];
                            $course_duration = $row['course_duration'];
                            $count++;
                            echo '
                            <thead>
                                <tr>
                                    <td>'.$count.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$mobile.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$course_name.'</td>
                                    <td><i class="fa-solid fa-indian-rupee-sign"></i> 
                                    '.$course_fee.' /-</td>
                                    <td>'.$course_duration.' Month</td>
                                    <td>
                                        <a class="btn btn-danger" 
                                        href="delete-hold-student.php?id='.$id.'">Delete</a>
                                    </td>
                                </tr>
                            </thead>';           
                        }
                    }
                    else {
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
            document.getElementById("admin-title").innerHTML = "Student LifeLong | Hold Students";
        </script>'; 
    }   
    else if($department_name == 'Admission'){
        require_once 'admission-footer.php';
        echo '
        <script>
            document.getElementById("admission-title").innerHTML = 
            "Student LifeLong | Hold Students";
        </script>'; 
    } 
    else if($department_name == 'HR'){
        require_once 'hr-footer.php';
        echo '
        <script>
            document.getElementById("hr-title").innerHTML = "Student LifeLong | Hold Students";
        </script>'; 
    } 
    else if($department_name == 'Finance'){
        require_once 'finance-footer.php';
        echo '
        <script>
            document.getElementById("finance-title").innerHTML = "Student LifeLong | Hold Students";
        </script>'; 
    }   
    mysqli_close($mysqli);
?>