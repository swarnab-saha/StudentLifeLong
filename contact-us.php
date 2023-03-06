<?php require_once 'header-index.php';?>

<!-- Navber content -->
<div class="d-flex justify-content-center mt-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb nav-bread">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
    </ol>
    </nav>
</div>
    <div class="iframemap mt-5 mb-5">
        <div class="contact-in">
            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29117.704192325706!2d87.76372406458098!3d24.181795250240025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fa1e865af342ed%3A0x6649a973196410c!2sRampurhat%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1677076588903!5m2!1sen!2sin"
                    width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-form">
                <h1>Contact Us</h1>
                <form action="insert-contact-us.php" method="POST">
                    <div class="mb-3">
                        <input type="text" id="name" name="name" placeholder="Name" 
                        class="form-control" maxlength="50" onkeyup="textOnly(this)" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="tel" name="mobile" id="mobile" 
                        onkeypress="numberOnly(this)" onkeyup="mobileNumber()" 
                        placeholder="Mobile Number" maxlength="10" required>
                        <span class="text-danger" id="mob"></span>
                    </div>
                    <div class="mb-3">
                        <input type="email" id="email" name="email" placeholder="Email" 
                        class="form-control" maxlength="100" required>
                    </div>
                   <div class="mb-3">
                        <textarea placeholder="Message" id="message" name="message" 
                        class="form-control" maxlength="1000" required></textarea>
                   </div>
                    <input type="submit" name="submit" class="contact-form-btn" />
                </form>
            </div>
        </div>
    </div>

<?php require_once 'footer-index.php';?>

<script>
    document.getElementById("title").innerHTML = "Student LifeLong | Contact Us";
</script>