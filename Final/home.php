
<?php


session_start();



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
    <!-- Gooogle Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&family=Poppins:wght@300;700;900&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/b67581ec1b.js"
      crossorigin="anonymous"
    ></script>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>

  

    <div class="header">
      <video autoplay loop class="back-video" muted plays-inline>
        <source src="image/video (2160p).mp4" type="video/mp4" />
      </video>

      <nav class="sticky-nav">
        <img src="image/new-logo.png" class="logo" />
        <ul class="nav-links">
          <li><a href="home.php">Home</a></li>
          <li><a href="course-page.php">Courses</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li class="btn"><a href="login_form.php">Login</a></li>
         
        </ul>
      </nav>

      <section class="container-text">
        <p class="text-new">Learn Anything Online</p>
      </section>

      <div class="content">
        <form>
          <input type="text" placeholder="&#x270e; Enter Keyword" />
          <button type="submit">Find Course</button>
        </form>

        <div class="category-list">
        <a href="course-details-C.php">
          <div class="category">
            <img src="image/c.png"  alt="" />
          </div>
          </a>
          <a href="course-details-C.php">
          <div class="category">
            <img src="image/c++.png" alt="" />
          </div>
          </a>
          <div class="category">
            <img src="image/c-one.png" alt="" />
          </div>
          <a href="course-details-java.php">
          <div class="category">
            <img src="image/java.png" alt="" />
          </div>
          </a>
          <a href="course-details-python.php">
          <div class="category">
            <img src="image/python.png" alt="" />
          </div>
          </a>
        </div>
      </div>
    </div>

    <section class="secTwo">
      <div class="secTwo-content">
        <div class="colOne">
        <i class="fa-brands fa-discord"></i>
          <h2><a href="https://discord.gg/nGrYmBJ4">Discord</a></h2>
          <p class="colOne-p">
            Join us in Discord
          </p>
        </div>
        <div class="colTwo">
          <i class="fa-solid fa-code"></i>
          <h2>Seft Development</h2>
          <p class="colOne-p">
            Develop Skills for career of carious majors including computer
          </p>
        </div>
        <div class="colThree">
          <i class="fa-solid fa-video"></i>
          <h2>Remote Learing</h2>
          <p class="colOne-p">
            Develop Skills for career of carious majors including computer
          </p>
        </div>
        <div class="colFour">
          <i class="fa-solid fa-circle-info"></i>
          <h2>Life Time Support</h2>
          <p class="colOne-p">
            Develop Skills for career of carious majors including computer
          </p>
        </div>
      </div>
    </section>

    <section class="main-section">
      <div class="video-div">
        <video controls>
          <source src="your-video.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="content-div">
        <h2>SELF DEVELOPMENT COURSE</h2>
        <h3>Get Instant Access To Expert <br />Solution<br /></h3>
        <p>
          The ultimate planning solution for busy women who want to reach their
          personal goals. Effortless, comfortable, eye-catching, unique detail.
        </p>
        <div class="feature-list">
          <i class="fa-solid fa-check"></i>
          <p>High Quality Video Details</p>
          <br />
          <i class="fa-solid fa-check"></i>
          <p>Powerful Audience</p>
          <br />
          <i class="fa-solid fa-check"></i>
          <p>Premium Content Worldwide</p>
        </div>
        <button class="courses-button">Our Courses</button>
      </div>
    </section>

    <section class="secThree">
      <div class="secThree-content-head">
        <h2>Trending Courses</h2>
      </div>
      <div class="secThree-content-middle">
        <h3>Popular Online Courses Around <br />You<br /></h3>
      </div>
      <div class="secThree-content-paragraph">
        The ultimate planning solution for busy women who want to reach<br />
        their personal goals<br />
      </div>
    </section>

    <!-- course -->

    <section class="course-section">
      <div class="course">
        <div class="course-image">
          <img src="image/course.jpg" alt="Course Image 1" />
          <div class="price">৳199</div>
        </div>
        <div class="course-details">
          <h2>Web Design Course</h2>
          <p>
            Master the art of creating stunning websites. Join our comprehensive
            course to learn HTML, CSS, and JavaScript.
          </p>
          <div class="stats">
            <p>
              <i class="fas fa-users"></i>
              <span class="count">340</span> students
            </p>
            <p>
              <i class="fas fa-book"></i> <span class="count">82</span> lessons
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
              <i class="fas fa-book"></i> <span class="count">64</span> lessons
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
              <i class="fas fa-book"></i> <span class="count">64</span> lessons
            </p>
          </div>
        </div>
      </div>
    </section>

    <div class="course-description">
      <h3>
        Take the control of their life back and start doing things to make their
        dream
      </h3>
      <h3>come true.</h3>
      <a href="#" class="view-all-courses">View all courses</a>
    </div>

    <!-- course end -->

    <section class="secFour">
      <h3>Maximize your potentials</h3>
      <h1>
        We break down barriers so teams can focus on <br />what matters –
        learning together to create the online <br />career you love.
      </h1>
    </section>

    <div class="sections-container">
      <section class="instructors-section">
        <div class="instructors-content">
          <h4>Instructors</h4>
          <div class="instructor-count">
            <span class="count-number" id="count1">0</span>
          </div>
          <p>Tempus imperdiet nulla malpellen tesque Malesuada libero.</p>
        </div>
      </section>

      <section class="instructors-section">
        <div class="instructors-content">
          <h4>Total Courses</h4>
          <div class="instructor-count">
            <span class="count-number" id="count1">0</span>
          </div>
          <p>Tempus imperdiet nulla malpellen tesque Malesuada libero.</p>
        </div>
      </section>

      <section class="instructors-section">
        <div class="instructors-content">
          <h4>Registered Enrolls</h4>
          <div class="instructor-count">
            <span class="count-number" id="count1">0</span>
          </div>
          <p>Tempus imperdiet nulla malpellen tesque Malesuada libero.</p>
        </div>
      </section>

      <section class="instructors-section">
        <div class="instructors-content">
          <h4>Satisfaction Rate</h4>
          <div class="instructor-count">
            <span class="count-number" id="count1">0</span>
          </div>
          <p>Tempus imperdiet nulla malpellen tesque Malesuada libero.</p>
        </div>
      </section>
    </div>

    <section class="cta-section">
      <div class="cta-content">
        <div class="cta-text">
          <h2>SELF DEVELOPMENT COURSE</h2>
          <h4>
            Get Instant Access To<br />
            Expert solution<br />
          </h4>
          <p>
            The ultimate planning solution for busy women who want to reach
            their personal goals. Effortless comfortable eye-catching unique
            detail
          </p>

          <h3><i class="fas fa-user-check"></i> Sign up on the website</h3>
          <p>
            The right mentoring relationship can be a powerful tool for
            professional growth. Bark up the right tree.
          </p>

          <h3><i class="fas fa-graduation-cap"></i> Enroll in your course</h3>
          <p>
            The right mentoring relationship can be a powerful tool for
            professional growth. Bark up the right tree.
          </p>

          <h3><i class="far fa-calendar-alt"></i> Start from now</h3>
          <p>
            The right mentoring relationship can be a powerful tool for
            professional growth. Bark up the right tree.
          </p>
        </div>
        <div class="cta-image">
          <img src="image/about-image (1).jpg" alt="Image" />
        </div>
      </div>
    </section>

    <section class="testimonial-section-one">
      <div class="testimonial-content-one">
        <h2>TESTIMONIALS</h2>
        <h3>Success Stories from People</h3>
        <p>
          The ultimate planning solution for busy women who want to reach their
          personal goals.
        </p>
      </div>
    </section>

    <section class="testimonial-section">
      <div class="testimonial-carousel">
        <div class="testimonial">
          <div class="testimonial-content">
            <p class="testimonial-text">
              "I had an amazing learning experience on this website. The courses
              are well-structured and the instructors are knowledgeable."
            </p>
            <p class="testimonial-author">- John Doe</p>
          </div>
        </div>
        <div class="testimonial">
          <div class="testimonial-content">
            <p class="testimonial-text">
              "The variety of courses available here is impressive. It's been a
              great platform for enhancing my skills."
            </p>
            <p class="testimonial-author">- Jane Smith</p>
          </div>
        </div>
        <div class="testimonial">
          <div class="testimonial-content">
            <p class="testimonial-text">
              "I'm grateful for the interactive lessons and supportive
              community. This website has truly enriched my learning journey."
            </p>
            <p class="testimonial-author">- Michael Johnson</p>
          </div>
        </div>
      </div>
    </section>

    <section class="newsletter-section">
      <div class="newsletter-content">
        <h2>Subscribe to Our Newsletter</h2>
        <p>Stay updated with our latest news and promotions.</p>
        <form class="newsletter-form">
          <input type="email" placeholder="Enter your email" required />
          <button type="submit">Subscribe</button>
        </form>
      </div>
    </section>

    <!-- Footer start -->

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

    <!-- js -->

    <script src="js/app.js"></script>
  </body>
</html>
