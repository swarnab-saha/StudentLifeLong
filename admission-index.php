<?php require_once 'admission-header.php';?>
<?php 
    require_once 'admission-footer.php';
    $msg = "";
    if(isset($_SESSION['message'])){
        $msg = $_SESSION['message'];
        unset($_SESSION['message']);
    }
    echo '
    <script>
        document.getElementById("admission-title").innerHTML = 
        "Student LifeLong | Admission | Home";

    var msg = "'.$msg.'";
    if(msg != ""){
        alert(msg);
    }
    </script>';  
?>