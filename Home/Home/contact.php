<?php






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- Gooogle Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&family=Poppins:wght@300;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b67581ec1b.js" crossorigin="anonymous"></script>
   <!-- css -->
   <link rel="stylesheet" href="css/contact.css">
</head>
<body>

     <!-- menu start -->

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
            <h2><span class="section-heading">Contact Us</span></h2>
        </div>

        <div class="another-two">
            <a href="#" class="home-link">Home</a> <h4>/ Contact us</h4>
        </div>
    </section>

    <section class="contact-us">
        <div class="contact-in">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.4062059082057!2d90.42292431106968!3d23.76854528799015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7892dcf0001%3A0x853ad729be4edc71!2sEast%20West%20University!5e0!3m2!1sen!2sbd!4v1692635379631!5m2!1sen!2sbd" width="100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-form">
                <h1>Contact Us</h1>
                <form>
                    <input type="text" placeholder="Name" class="contact-form-txt"/>
                    <input type="text" placeholder="Email" class="contact-form-txt"/>
                    <textarea placeholder="Message" class="contact-form-txtarea"></textarea>
                    <input type="submit" name="submit" class="contact-form-btn"/>
                </form>
            </div>
        </div>
    </section>

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
    
</body>
</html>