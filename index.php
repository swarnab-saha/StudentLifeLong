<?php 
  require_once 'database-connection.php';
  require_once 'header-index.php';
?>
    <div class="container">
        <div id="carouselExampleSlidesOnly" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/carousel.jpg" class="d-block w-100" alt="Crousel img">
            </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h3>Trending Courses</h3>
        <div class="row justify-content-center mt-3">
            <div class="card home">
                <img src="./courses/python.png" class="card-img-top img-card" alt="Python img">
                <div class="self-card-body">
                  <h5 class="card-title">Learn Python</h5>
                  <p class="card-text home-text">Python is an interpreted, object-oriented, 
                    high-level programming language with dynamic semantics developed by Guido van 
                    Rossum. It was originally released in 1991. Designed to be easy as well as fun, 
                    the name "Python" is a nod to the British comedy group Monty Python.</p>
                  <a href="python.php" class="btn btn-primary btn-learn">Learn</a>
                </div>
            </div>
            <div class="card home">
                <img src="./courses/javascript.png" class="card-img-top img-card" 
                alt="Javascript img">
                <div class="self-card-body">
                  <h5 class="card-title">Learn JavaScript</h5>
                  <p class="card-text home-text">Javascript, often abbreviated as JS, is a 
                    programming language that is one of the core technologies of the World Wide Web, 
                    alongside HTML and CSS. As of 2022, 98% of websites use javascript on the client 
                    side for webpage behaviour, often incorporating third-party libraries.</p>
                  <a href="javascript.php" class="btn btn-primary btn-learn">Learn</a>
                </div>
            </div>
            <div class="card home">
                <img src="./courses/java.png" class="card-img-top img-card" alt="Java img">
                <div class="self-card-body">
                  <h5 class="card-title">Learn Java</h5>
                  <p class="card-text home-text">Java is a widely used object-oriented 
                    programming language and software platform that runs on billions of devices, 
                    including notebook computers, mobile devices, gaming consoles, medical 
                    devices and many others. The rules and syntax of java are based on the C and 
                    C++ languages.</p>
                  <a href="java.php" class="btn btn-primary btn-learn">Learn</a>
                </div>
            </div>
            <div class="card home">
                <img src="./courses/data_science.png" class="card-img-top img-card" 
                alt="Data Science img">
                <div class="self-card-body">
                  <h5 class="card-title">Learn Data Science</h5>
                  <p class="card-text home-text">Data science is the study of data to extract 
                    meaningful insights for business. It is a multidisciplinary approach that 
                    combines principles and practices from the fields of mathematics, statistics, 
                    artificial intelligence, and computer engineering to analyze large amounts of 
                    data.</p>
                  <a href="data-science.php" class="btn btn-primary btn-learn">Learn</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h3>Best for Career goal</h3>
        <div class="row justify-content-center mt-3">
            <div class="card home">
                <img src="./courses/mean_stack_developer.png" class="card-img-top img-card" 
                alt="MEAN Stack Developer img">
                <div class="self-card-body">
                  <h5 class="card-title">Learn MEAN Stack Developer</h5>
                  <p class="card-text home-text">MEAN Stack refers to a collection of javascript 
                    technologies used to develop web applications. Therefore, from the client to the 
                    server and from server to the database, everything is based on javascript. MEAN 
                    is a full-stack development toolkit used to develop a fast and robust web 
                    applications.</p>
                  <a href="mean-stack-developer.php" class="btn btn-primary btn-learn">Learn</a>
                </div>
            </div>
            <div class="card home">
                <img src="./courses/mern_stack_developer.png" class="card-img-top img-card" 
                alt="MERN Stack Developer img">
                <div class="self-card-body">
                  <h5 class="card-title">Learn MERN Stack Developer</h5>
                  <p class="card-text home-text">MERN Stack is a javascript stack that is used for 
                    easier and faster deployment of full-stack web applications. It is designed to 
                    make the development process smoother and easier. MERN stack comprises of 4 
                    technologies namely: Mongo DB, Express, React and Node.js.</p>
                  <a href="mern-stack-developer.php" class="btn btn-primary btn-learn">Learn</a>
                </div>
            </div>
            <div class="card home">
                <img src="./courses/django.png" class="card-img-top img-card" alt="Django img">
                <div class="self-card-body">
                  <h5 class="card-title">Learn Django</h5>
                  <p class="card-text home-text">Django is a high- level python web framework that 
                    enables rapid development of secure and maintainable websites. Django takes care 
                    of much of the hassle of web development, so you can focus on writing your app 
                    without needing to reinvent the wheel.</p>
                  <a href="django.php" class="btn btn-primary btn-learn">Learn</a>
                </div>
            </div>
            <div class="card home">
                <img src="./courses/full_stack_developer.png" class="card-img-top img-card" 
                alt="Full Stack Developer img">
                <div class="self-card-body">
                  <h5 class="card-title">Learn Full Stack Developer</h5>
                  <p class="card-text home-text">Full Stack developer is someone who can work in 
                    both front and back end application. The front end is responsible for the visual 
                    look and feel of the website, while back end is responsible for the behind the 
                    scenes logic and infrastructure of the site.</p>
                  <a href="full-stack-developer.php" class="btn btn-primary btn-learn">Learn</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <h3>Top priority by Students</h3>
        <div class="row justify-content-center mt-3">
            <div class="card home">
                <img src="./courses/angular.png" class="card-img-top img-card" alt="Angular img">
                <div class="self-card-body">
                  <h5 class="card-title">Learn Angular</h5>
                  <p class="card-text home-text">Angular is a Typescript-based free and open-source 
                    web application framework led by the Angular team at Google and by a community 
                    of individuals and corporations. Angular is mainly used to develop single-page 
                    applications.</p>
                  <a href="angular.php" class="btn btn-primary btn-learn">Learn</a>
                </div>
            </div>
            <div class="card home">
                <img src="./courses/node_js.png" class="card-img-top img-card" alt="Node Js img">
                <div class="self-card-body">
                  <h5 class="card-title">Learn Node Js</h5>
                  <p class="card-text home-text">Node.js is an open source, cross-platform runtime 
                    enviornment for executing javascript code. Node is used extensively for server- 
                    side programming, making it possible for developers to use javascript for client 
                    side and server side code without needing to learn an additional languages.</p>
                  <a href="node-js.php" class="btn btn-primary btn-learn">Learn</a>
                </div>
            </div>
            <div class="card home">
                <img src="./courses/react_js.png" class="card-img-top img-card" alt="React Js img">
                <div class="self-card-body">
                  <h5 class="card-title">Learn React Js</h5>
                  <p class="card-text home-text">React.js is a free and open-source front-end 
                    javascript library for building user interfaces based on UI components. It is 
                    maintained by Meta and a community of individual developers and companies.</p>
                  <a href="react-js.php" class="btn btn-primary btn-learn">Learn</a>
                </div>
            </div>
            <div class="card home">
                <img src="./courses/cloud_computing.png" class="card-img-top img-card" 
                alt="Cloud Computing img">
                <div class="self-card-body">
                  <h5 class="card-title">Learn Cloud Computing</h5>
                  <p class="card-text home-text">Cloud computing is the on-demand availibility of 
                    computer system resources, especially data storage and computing power, without 
                    direct active management by the user. Large clouds often have functions 
                    distributed over multiple locations, each of which is a data center.</p>
                  <a href="cloud-computing.php" class="btn btn-primary btn-learn">Learn</a>
                </div>
            </div>
        </div>
    </div>

<?php 
  require_once 'footer-index.php';
  $msg = "";
  if(isset($_SESSION['message'])){
    $msg = $_SESSION['message'];
    session_unset();
    session_destroy();
  }
  echo '
  <script>
    document.getElementById("title").innerHTML = "Student LifeLong | Home";

    var msg = "'.$msg.'";
    if(msg != ""){
      alert(msg);
    }
  </script>';
?>
