<?php

include 'config.php';

session_start();
// $name = $_SESSION['user_name'];
// $sql = "SELECT `id` FROM `user_form` WHERE `name` = '$name'";
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);
$key = "";
if(isset($_GET['search'])) 
{
    $key = $_GET['key'];
   
  header("Location: filterCourse-page.php?key=".$key);


}

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="OurServices.css">
</head>
<body>

    <header class="Header">
        <nav id="main-nav">

            <h2><a href="demo3.html"><span>Learn</span> Skill</a></h2>
            <div class="nav-link">
                <ul>
                    <li><a href="courseList1.html">Courses</a></li>
                    <li><a href="catagory.html">Categories</a></li>
                    <li><a href="useProfile.php?id=<?php echo $_SESSION['id'] ?>"><?php echo $_SESSION['user_name'] ?></a></li>
          <li><a href="logout.php" >logout</a><li>
                </ul>
            </div>
            <span class="menu-icon"><i class="fa fa-bars"></i></span>

        </nav>

        <div class="text">
            <h1>Our Services</h1>
            
            
        </div>

        
    </header>
    

    <main>


        <div class="services-container">
            <div class="service">
                <img src="Service1.jpg">
                <h2>Online Courses</h2>
                <p>Explore a wide range of online courses taught by industry experts.</p>
            </div>
            <div class="service">
                <img src="service2.jpg" alt="Service 2">
                <h2>Tutoring Services</h2>
                <p>Get personalized tutoring from qualified instructors in various subjects.</p>
            </div>
            <div class="service">
                <img src="service3.jpg" alt="Service 3">
                <h2>Study Resources</h2>
                <p>Access a vast library of study materials, notes, and practice exercises.</p>
            </div>
            <!-- Add more services -->
            <div class="service">
                <img src="service4.jpg" alt="Service 4">
                <h2>Language Courses</h2>
                <p>Learn a new language with our comprehensive language courses.</p>
            </div>
            <div class="service">
                <img src="service5.jpg" alt="Service 5">
                <h2>Career Counseling</h2>
                <p>Get expert guidance on career choices and planning your future.</p>
            </div>
            <div class="service">
                <img src="service6.jpg" alt="Service 6">
                <h2>Extracurricular Activities</h2>
                <p>Participate in various extracurricular activities to enhance your skills.</p>
            </div>
        </div>


    </main>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="index.html">About Us</a></li>
                        <li><a href="OurServices.html">Our Services</a></li>
                        <li><a href="PrivacyPolicies.html">Privacy Policies</a></li>
                        <li><a href="Affiliate.html">Affiliate</a></li>
                    </ul>

                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Completed Course</a></li>
                        <li><a href="">Return</a></li>
                        <li><a href="">Enroll</a></li>
                        <li><a href="">Payment Options</a></li>

                    </ul>

                </div>
                <div class="footer-col">
                    <h4>Catagories</h4>
                    <ul>
                        <li><a href="">Programming Language</a></li>
                        <li><a href="">Frontend</a></li>
                        <li><a href="">Backend</a></li>
                        <li><a href="">Data Structures</a></li>
                    </ul>

                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>

                </div>

            </div>

        </div>
        
        
    </footer>


</body>
</html>