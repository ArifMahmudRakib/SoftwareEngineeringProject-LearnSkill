<?php
include 'config.php';
$courseId = $_GET['id'];
$query = "SELECT * FROM `products` WHERE id = '$courseId'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);







?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Course Preview</title>
    <link rel="stylesheet" href="css/course-details-C.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
  </head>
  <body>
    <header>
      <div class="header-container">
        <h1 class="logo">Learn <span class="span-one">Skill</span></h1>
        <nav>
          <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="course-page.php">Courses</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </nav>

        <div class="menu-next">
          <div >
            <a href="#"> </a>
            <!-- <a href="#">Sign Up</a> -->
            <a href="#"> </a>
          </div>
        </div>
      </div>
    </header>

    <section class="another">
      <div class="another-one">
        <h2>
          <span class="section-heading"
            >Mastering C From Zero To<br />Hero</span
          >
        </h2>
      </div>

      <div class="another-two">
        <a href="quiz-C.php" class="home-link">Quiz</a>
        <h4>/ Mastering C from zero to hero</h4>
      </div>
    </section>

    <div class="course-container">
      <div class="left-div">
        <div class="image">
         <img src="uploaded_img/<?php echo $row ['image'] ?>" style="width: 31rem;" alt="Course Image 1">
        </div>
        <div class="tabs">
          <button class="tab-button" onclick="showContent('overview')">
            Overview
          </button>
          <button class="tab-button" onclick="showContent('curriculum')">
            Curriculum
          </button>
          <button class="tab-button" onclick="showContent('instructor')">
            Instructor
          </button>
        </div>
        <div class="content" id="overview-content">
          <h1>Overview</h1>
          <p>
          <?php echo $row ['description'] ?>
          </p>
          <h1>What You will Learn?</h1>
          <p>
            ✅Clean up face imperfections, improve and repair photos<br />
            ✅Remove people or objects from photos<br />
            ✅Master selections, layers, and working with the layers panel<br />
            ✅Use creative effects to design stunning text styles<br />
            ✅working with the layers panel<br />
            ✅Cut away a person from their background
          </p>
        </div>
        <div class="content" id="curriculum-content">
          <h3>Section 1</h3>
          <p>Video, quiz for you</p>
          <p></p>
          <div class="curriculum-lesson">
            <span>Lesson 1</span>
            <span>10 min</span>
          </div>
          <div class="curriculum-lesson">
            <span>Lesson 2</span>
            <span>30 min</span>
          </div>
          <div class="curriculum-lesson">
            <span>Quiz 1</span>
            <span>14 questions</span>
            <span>10 min</span>
          </div>
        </div>
        <div class="content" id="instructor-content">
          <p>Rakib</p>
          <p>Web Developer</p>
          <p>I am here for you, Best of luck.</p>
        </div>
      </div>
      <div class="main-content">
        <h2><?php echo $row ['name'] ?></h2>
        <p>Price: ৳<?php echo $row ['price'] ?></p>
        <p>Lectures: 12</p>
        <p>Enrolled: 120</p>
        <p>Duration: 8 weeks</p>
        <p>Updated: August 24, 2023</p>
        <br>
        <!-- <button class="enroll-button">Enroll Course</button> -->
        
        <a href="checkout.php?id=<?php echo $row['id']?>" style="text-decoration: none;" class="enroll-button">
  
  
        Buy Now

      </a>
        <p id="success-message" class="success-message">
          You are successfully enrolled in the course!
        </p>
      </div>
    </div>

    <!-- realated -->

    <section class="related">
      <h1>Related Courses You may like</h1>

      <section class="course-section">
        <div class="course">
          <div class="course-image">
            <img src="image/course.jpg" alt="Course Image 1" />
            <div class="price">৳199</div>
          </div>
          <div class="course-details">
            <h2>Web Design Course</h2>
            <p>
              Master the art of creating stunning websites. Join our
              comprehensive course to learn HTML, CSS, and JavaScript.
            </p>
            <div class="stats">
              <p>
                <i class="fas fa-users"></i>
                <span class="count">340</span> students
              </p>
              <p>
                <i class="fas fa-book"></i>
                <span class="count">82</span> lessons
              </p>
            </div>
          </div>
        </div>

        <div class="course">
          <div class="course-image">
            <img src="image/course-2.jpg" alt="Course Image 2" />
            <div class="price">৳249</div>
          </div>
          <div class="course-details">
            <h2>JavaScript Mastery</h2>
            <p>
              Unlock the power of JavaScript. Build interactive and dynamic web
              applications with hands-on projects and exercises.
            </p>
            <div class="stats">
              <p>
                <i class="fas fa-users"></i>
                <span class="count">450</span> students
              </p>
              <p>
                <i class="fas fa-book"></i>
                <span class="count">64</span> lessons
              </p>
            </div>
          </div>
        </div>

        <div class="course">
          <div class="course-image">
            <img src="image/course-3.jpg" alt="Course Image 3" />
            <div class="price">৳299</div>
          </div>
          <div class="course-details">
            <h2>UI/UX Design Essentials</h2>
            <p>
              Create stunning user interfaces and engaging user experiences.
              Dive into design principles, wireframing, and prototyping.
            </p>
            <div class="stats">
              <p>
                <i class="fas fa-users"></i>
                <span class="count">280</span> students
              </p>
              <p>
                <i class="fas fa-book"></i>
                <span class="count">72</span> lessons
              </p>
            </div>
          </div>
        </div>
      </section>
    </section>

    <!-- footer -->

    <section class="footer-menu">
      <footer>
        <div class="container">
          <div class="row">
            <div class="col" id="company">
              <!-- <img src="image/Lofo-one.jpg" alt="" class="logo"> -->
              <h1 class="logo-new">
                . Learn <span class="span-one">Skill</span>
              </h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Dignissimos magni expedita laboriosam deleniti eaque corrupti
                hic itaque illum ab architecto?
              </p>

              <div class="social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
              </div>
            </div>
            <div class="col" id="Explore">
              <h3>Explore</h3>
              <div class="links">
                <a href="about.html">About us</a>
                <a href="contact.html">Conatct us</a>
                <a href="FAQ.html">FAQ</a>
                <a href="privacy-policy.html">Privacy policy</a>
              </div>
            </div>
            <div class="col" id="Courses">
              <h3>Courses</h3>
              <div class="links">
                <a href="#">Python</a>
                <a href="#">Java</a>
                <a href="#">C++</a>
                <a href="#">C</a>
              </div>
            </div>
            <div class="col" id="address">
              <h3>Address</h3>
              <div class="address-details">
                <i class="fa fa-location"></i>
                <p>
                  Aftabnagor, <br />
                  Dhaka, <br />
                  Bangladesh
                </p>
              </div>
              <div class="address-details">
                <i class="fa fa-phone"></i>
                <p>+88017**********</p>
                <p></p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form">
              <form action="">
                <input type="text" placeholder="Email here..." />
                <button><i class="fa fa-paper-plane"></i></button>
              </form>
            </div>
          </div>
        </div>

        <div class="bottom-details">
          <p>All Right reserved by &copy;Learn Skill 2023</p>
        </div>
      </footer>
    </section>

    <script src="js/course-details-C.js"></script>
  </body>
</html>
