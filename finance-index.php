<?php require_once 'finance-header.php';?>
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