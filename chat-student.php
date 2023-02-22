<?php require_once 'admin-header.php';?>

<!-- Navber content -->
<div class="d-flex justify-content-center view-short mt-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb nav-bread">
        <li class="breadcrumb-item"><a href="admin-index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Chat</li>
    </ol>
    </nav>
</div>

    <!-- For desktop view -->
    <div class="container desktop-chat chat-container mt-5">
        <div class="left-send">
            <button type="button" class="send" data-bs-toggle="modal" 
            data-bs-target="#send">
                Send
            </button>
        </div>

        <form class="" action="date-chat-student.php" method="post">
            <input class="recieved" type="submit" value="Recieved">   
        </form>
    </div>

    <!-- For mobile view -->
    <div class="mobile-chat container text-center chat-container mt-5">
        <div class="">
            <button type="button" class="send" data-bs-toggle="modal" 
            data-bs-target="#send">
                Send
            </button>
        </div>
    </div>  
    <div class="mobile-chat container text-center chat-container mt-5">
        <form class="" action="date-chat-student.php" method="post">
            <input class="recieved" type="submit" value="Recieved">   
        </form>
    </div>


    <form action="insert-chat-student.php" method="post">
        <!-- Modal -->
        <div class="modal fade" id="send" tabindex="-1" aria-labelledby="sendLabel" 
        aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="sendLabel">Send Message</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" 
                        aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="suggestions mb-0" class="form-label">
                            To Recipent Id</label>
                            <input class="form-control" type="text" list="idsuggestions" 
                            id="suggestions" name="suggestions" placeholder="Search Student Id" 
                            title="Search Student Id" required>
                            <datalist id="idsuggestions">
                                <?php
                                    require_once 'database-connection.php';
                                    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                    $qury = "SELECT * FROM student";
                                    echo $qury;
                                    if($result=$mysqli->query($qury)){
                                        if(mysqli_num_rows($result)>0){
                                            while($row=$result->fetch_assoc()){
                                                echo '<option value="'.$row['student_id'].'">'
                                                .$row['student_id'].'</option>';
                                            }
                                        }
                                    }
                                ?>
                            </datalist>
                        </div>
                        <div class="">
                            <label for="message mb-0" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3" 
                            maxlegth="10000" placeholder="Enter Message" title="Enter Message"  
                            required></textarea>
                        </div>
                        <div class="mb-3 text-end">
                            <span class="text-danger">Word limit : 10000 words</span>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Send">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php require_once 'admin-footer.php';?>

<script>
    document.getElementById("admin-title").innerHTML = "Student LifeLong | Chat";
</script>