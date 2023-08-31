<?php






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day One</title>

    <!-- Gooogle Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&family=Poppins:wght@300;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b67581ec1b.js" crossorigin="anonymous"></script>

    <!-- Css -->
    <link rel="stylesheet" href="css/course-page.css">

</head>

<body>

    <header>
        <div class="header-container">
            <h1 class="logo">Learn <span class="span-one">Skill</span></h1>
            <nav>
                <ul class="menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="course-page.html">Courses</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </nav>

            <div class="menu-next">
                <div class="auth-buttons">
                    <a href="#">Login</a>
                    <a href="#">Sign Up</a>
                </div>
            </div>

        </div>
    </header>

    <!-- menu end -->

    <!-- body start -->


    <section class="another">
        <div class="another-one">
            <h2><span class="section-heading">Find best Courses</span></h2>
        </div>

        <div class="another-two">
            <a href="#" class="home-link">Home</a> <h4>/ Courses</h4>
        </div>
    </section>

    <!-- pagination search bar start -->

    <div class="pagination-search-bar">
        <p class="pagination">Showing 1-6 of 8 results</p>
        
        <div class="search-bar">
            <input type="text" placeholder="Search for courses...">
            <button><i class="fas fa-search"></i></button>
        </div>
    </div>

    <!-- pagination search bar end -->

    <!-- course section start -->

    <section class="course-section">
        <div class="course">
            <div class="course-image">
                <img src="image/course.jpg" alt="Course Image 1">
                <div class="price">৳199</div>
            </div>
            <div class="course-details">
                <h2>Web Design Course</h2>
                <p>Master the art of creating stunning websites. Join our comprehensive course to learn HTML, CSS, and JavaScript.</p>
                <div class="stats">
                    <p><i class="fas fa-users"></i> <span class="count">340</span> students</p>
                    <p><i class="fas fa-book"></i> <span class="count">82</span> lessons</p>
                </div>
            </div>
        </div>
        
        <div class="course">
            <div class="course-image">
                <img src="image/course-2.jpg" alt="Course Image 2">
                <div class="price">৳249</div>
            </div>
            <div class="course-details">
                <h2>JavaScript Mastery</h2>
                <p>Unlock the power of JavaScript. Build interactive and dynamic web applications with hands-on projects and exercises.</p>
                <div class="stats">
                    <p><i class="fas fa-users"></i> <span class="count">450</span> students</p>
                    <p><i class="fas fa-book"></i> <span class="count">64</span> lessons</p>
                </div>
            </div>
        </div>
        
        <div class="course">
            <div class="course-image">
                <img src="image/course-3.jpg" alt="Course Image 3">
                <div class="price">৳299</div>
            </div>
            <div class="course-details">
                <h2>UI/UX Design Essentials</h2>
                <p>Create stunning user interfaces and engaging user experiences. Dive into design principles, wireframing, and prototyping.</p>
                <div class="stats">
                    <p><i class="fas fa-users"></i> <span class="count">280</span> students</p>
                    <p><i class="fas fa-book"></i> <span class="count">72</span> lessons</p>
                </div>
            </div>
        </div>
    </section>

    <section class="course-section-one">
        <div class="course">
            <div class="course-image">
                <img src="image/course.jpg" alt="Course Image 1">
                <div class="price">৳199</div>
            </div>
            <div class="course-details">
                <h2>Web Design Course</h2>
                <p>Master the art of creating stunning websites. Join our comprehensive course to learn HTML, CSS, and JavaScript.</p>
                <div class="stats">
                    <p><i class="fas fa-users"></i> <span class="count">340</span> students</p>
                    <p><i class="fas fa-book"></i> <span class="count">82</span> lessons</p>
                </div>
            </div>
        </div>
        
        <div class="course">
            <div class="course-image">
                <img src="image/course-2.jpg" alt="Course Image 2">
                <div class="price">৳249</div>
            </div>
            <div class="course-details">
                <h2>JavaScript Mastery</h2>
                <p>Unlock the power of JavaScript. Build interactive and dynamic web applications with hands-on projects and exercises.</p>
                <div class="stats">
                    <p><i class="fas fa-users"></i> <span class="count">450</span> students</p>
                    <p><i class="fas fa-book"></i> <span class="count">64</span> lessons</p>
                </div>
            </div>
        </div>
        
        <div class="course">
            <div class="course-image">
                <img src="image/course-3.jpg" alt="Course Image 3">
                <div class="price">৳299</div>
            </div>
            <div class="course-details">
                <h2>UI/UX Design Essentials</h2>
                <p>Create stunning user interfaces and engaging user experiences. Dive into design principles, wireframing, and prototyping.</p>
                <div class="stats">
                    <p><i class="fas fa-users"></i> <span class="count">280</span> students</p>
                    <p><i class="fas fa-book"></i> <span class="count">72</span> lessons</p>
                </div>
            </div>
        </div>
    </section>

    <!-- course section end -->

    <!-- page number and arrow section start -->

    <section class="pagination-section">
        <div class="pagination-container">
            <div class="pagination">
                <div class="page-number">1</div>
                <div class="page-number active">2</div>
                <div class="page-number">3</div>
            </div>
            <div class="pagination-arrows">
                <!-- <div class="arrow left"><i class="fas fa-chevron-left"></i></div> -->
                <div class="arrow right"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>
    </section>

    <!-- end -->

    <!-- footer start -->

    <section class="footer-menu">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col" id="company">
                        <!-- <img src="image/Lofo-one.jpg" alt="" class="logo"> -->
                        <h1 class="logo-new">. Learn <span class="span-one">Skill</span></h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos magni expedita laboriosam deleniti eaque corrupti hic itaque illum ab architecto?</p>
    
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
                                <p>Aftabnagor, <br> Dhaka, <br> Bangladesh</p>
                            </div>
                            <div class="address-details">
                                <i class="fa fa-phone"></i>
                                <p>+88017**********<p>
                            </div>
                        </div>
                </div>

                <div class="row">
                    <div class="form">
                        <form action="">
                            <input type="text" placeholder="Email here...">
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


    <script src="js/app.js"></script>
</body>
</html> 
    

    

