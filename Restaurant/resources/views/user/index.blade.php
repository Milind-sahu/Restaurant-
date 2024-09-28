<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>EasyEat </title>
    <meta name="description" content="">
    <meta name="keywords" content="">


    <link rel="icon" type="image/x-icon" href="/user_support/img/cookfavicon.png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap"
        rel="stylesheet">

    <link href="user_support/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="user_support/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="user_support/vendor/aos/aos.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="user_support/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <img src="user_support/img/logo.png" alt="">
                <h1 class="sitename">EasyEat</h1>
                <span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home<br></a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <!-- <li><a href="#events">Events</a></li> -->
                    <!-- <li><a href="#chefs">Chefs</a></li> -->
                    {{-- <li><a href="#gallery">Gallery</a></li> --}}
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{url('/logout') }}">Log out</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <div class="container">
                <div class="row gy-4 justify-content-center justify-content-lg-between">
                    <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1>Enjoy Your Healthy<br>Delicious Food</h1>
                        <p>Come dine withs us and explore </p>
                        <div class="d-flex">
                            <a href="#book-a-table" class="btn-get-started">Reserve a table</a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 hero-img">
                        <img src="user_support/img/hero-img.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title aos-init" data-aos="fade-up">
                <h2>About Us<br></h2>
                <p><span>Learn More</span> <span class="description-title">About Us</span></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-7 aos-init" data-aos="fade-up" data-aos-delay="100">
                        <img src="user_support/img/rest.png" class="img-fluid mb-4" alt="">
                        <div class="book-a-table">
                            <h3>Book a Table</h3>
                            <p>+91 871XXXXX35</p>
                        </div>
                    </div>
                    <div class="col-lg-5 aos-init" data-aos="fade-up" data-aos-delay="250">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                At our restaurant, we take pride in using only the freshest ingredients to create dishes
                                that not only delight your taste buds but also provide a warm and inviting atmosphere
                                for you to enjoy with family and friends.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> <span>At our restaurant, we specialize in
                                        farm-to-table dining, ensuring that every dish is crafted from the freshest,
                                        locally sourced ingredients.</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Our open kitchen concept allows guests
                                        to watch our talented chefs in action, adding a dynamic element to your dining
                                        experience.</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Whether you’re celebrating a special
                                        occasion or simply enjoying a night out, our commitment to excellence and unique
                                        touches promise an exceptional dining experience.</span></li>
                            </ul>
                            <p>
                                Thank you for taking the time to learn about us. We are passionate about creating a
                                dining experience that not only satisfies your palate but also feels like a true
                                celebration of food and togetherness. We look forward to welcoming you to our restaurant
                                and
                                sharing our love for exceptional cuisine and hospitality with you
                            </p>

                            <div class="position-relative mt-4">
                                <img src="user_support/img/about-2.jpg" class="img-fluid" alt="">
                                <a href="https://www.youtube.com" class="pulsating-play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->
        <!-- /About Section -->




        <!-- Menu Section -->
        <section id="menu" class="menu section">

            <!-- Section Title -->
            <div class="container section-title aos-init" data-aos="fade-up">
                <h2>Our Menu</h2>
                <p>
                    <span>Check Our</span>
                    <span class="description-title">Delecious Menu</span>
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container">

                <div class="tab-content aos-init" data-aos="fade-up" data-aos-delay="200">

                    <div class="tab-pane fade active show" id="menu-starters" role="tabpanel">

                        <div class="tab-header text-center">
                            <h3>Menu</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="{{url('/menu') }}"><img src="user_support/img/menu/Samosa.png" class="menu-img img-fluid"
                                    alt=""></a>
                                <h4>Samosa</h4>

                                <p class="price">
                                    ₹100.11
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{url('/menu') }}"><img src="user_support/img/menu/Dosa.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Dosa</h4>

                                <p class="price">
                                    ₹100.11
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{url('/menu') }}"><img src="user_support/img/menu/vada.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Vada</h4>

                                <p class="price">
                                    ₹100.11
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{url('/menu') }}"><img src="user_support/img/menu/Idli.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Idli</h4>

                                <p class="price">
                                    ₹100.11
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{url('/menu') }}"><img src="user_support/img/menu/dhokla.webp"
                                        class="menu-img img-fluid" alt=""></a>
                                <h4>Dhokla</h4>

                                <p class="price">
                                    ₹100.11
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{url('/menu') }}"><img src="user_support/img/menu/pizza1.png"
                                        class="menu-img img-fluid" alt=""></a>
                                <h4>pizza</h4>

                                <p class="price">
                                    ₹100.11
                                </p>
                            </div><!-- Menu Item -->


                        </div>
                    </div><!-- End Starter Menu Content -->
                    <!-- <a class="btn-getstarted" href="login.html">Log in</a> -->
                    <div class="text-center">
                        <a href="{{url('/menu') }}" class="btn-get-started">Explore more</a>
                    </div>
                </div>

            </div>

        </section><!-- /Menu Section -->

        <!-- Book A Table Section -->
        <section id="book-a-table" class="book-a-table section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Book A Table</h2>
                <p><span>Book Your</span> <span class="description-title">Meal With Us<br></span></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-4 reservation-img"
                        style="background-image: url(user_support/img/reservation.jpg);">
                    </div>

                    <div class="col-lg-8 d-flex align-items-center reservation-form-bg" data-aos="fade-up"
                        data-aos-delay="200">
                        <form action="{{URL('/home')}}" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" name="NAME" class="form-control" id="name"
                                        placeholder="Your Name" required="">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="EMAIL" class="form-control" name="EMAIL" id="email"
                                        placeholder="Your Email" required="">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control" name="NUMBER" id="phone"
                                        placeholder="Your Phone" required="">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="date" name="DATEOF" class="form-control" id="Date"
                                        placeholder="Date" required="">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="time" name="TIME" class="form-control" id="time"
                                        placeholder="time" required="">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" name="PERSON" class="form-control" id="num"
                                        placeholder="number of person" required="">
                            </div>

                            <div class="form-group mt-3">
                                <textarea class="form-control" name="MESSAGE" rows="5" placeholder="Message"></textarea>
                            </div>

                            <div class="text-center mt-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your booking request was sent. We will call back or send an
                                    Email to confirm your reservation. Thank you!</div>
                                <button type="submit">Book a Table</button>
                            </div>
                        </form>
                    </div><!-- End Reservation Form -->

                </div>

            </div>

        </section>
        <!-- /Book A Table Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Review</h2>
                <p>What Are They <span class="description-title">Saying About Us</span></p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">





                <div class="testimonial-item">
                    <div class="row gy-4 justify-content-center">
                        <div class="col-lg-6">
                            <div class="testimonial-content">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Had a fantastic meal at EasyEat ! The farm-to-table dishes were
                                        incredibly fresh and flavorful, and the open kitchen added a fun touch. Service
                                        was excellent, and the cozy ambiance made for a perfect evening. Highly
                                        recommend for a special night out!.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <h3>Milind sahu</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 text-center">
                            <img src="user_support/img/testimonials/boy.png" class="img-fluid testimonial-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="row gy-4 justify-content-center">
                        <div class="col-lg-6">
                            <div class="testimonial-content">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Had a fantastic meal at [Restaurant Name]! The farm-to-table dishes were
                                        incredibly fresh and flavorful, and the open kitchen added a fun touch. Service
                                        was excellent, and the cozy ambiance made for a perfect evening. Highly
                                        recommend for a special night out!.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <h3>Milind sahu</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 text-center">
                            <img src="user_support/img/testimonials/boy.png" class="img-fluid testimonial-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="row gy-4 justify-content-center">
                        <div class="col-lg-6">
                            <div class="testimonial-content">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Had a fantastic meal at [Restaurant Name]! The farm-to-table dishes were
                                        incredibly fresh and flavorful, and the open kitchen added a fun touch. Service
                                        was excellent, and the cozy ambiance made for a perfect evening. Highly
                                        recommend for a special night out!.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <h3>Milind sahu</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 text-center">
                            <img src="user_support/img/testimonials/girl.png" class="img-fluid testimonial-img" alt="">
                        </div>
                    </div>
                </div>


                <!-- End testimonial item -->

                <!-- End testimonial item -->


            </div>

        </section>
        <!-- /Testimonials Section -->

        <!-- Events Section -->
        <!-- /Events Section -->

        <!-- Chefs Section -->
        <!-- /Chefs Section -->



        <!-- Gallery Section -->
        <section id="gallery" class="gallery section light-background">

            <!-- Section Title -->
            <!-- End Section Title -->

            <div class="container aos-init" data-aos="fade-up" data-aos-delay="100">

                <!-- insert image -->

            </div>

        </section><!-- /Gallery Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title aos-init" data-aos="fade-up">
                <h2>Contact</h2>
                <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
            </div><!-- End Section Title -->

            <div class="container aos-init" data-aos="fade-up" data-aos-delay="100">

                <div class="mb-5">
                    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=raipur%20+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                            frameborder="0" allowfullscreen=""></iframe>
                    </div>
                </div><!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center aos-init" data-aos="fade-up"
                            data-aos-delay="200">
                            <i class="icon bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>GF 108 GE Road Raipur, RPR 492001</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center aos-init" data-aos="fade-up"
                            data-aos-delay="300">
                            <i class="icon bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+91 871XXXXX35</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center aos-init" data-aos="fade-up"
                            data-aos-delay="400">
                            <i class="icon bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>Restaurant@mail.com</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center aos-init" data-aos="fade-up"
                            data-aos-delay="500">
                            <i class="icon bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h3>Opening Hours<br></h3>
                                <p><strong>Mon-Sat:</strong> 11AM - 12PM; <strong>Sunday:</strong> Closed</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                </div>
                <div class="container section-title aos-init" data-aos="fade-up">
                    {{-- <h2>Contact</h2> --}}
                    <p><span>Feed back</span> 
                </div>

                <form action="{{url('/feedback')}}" method="POST" class="php-email-form aos-init" data-aos="fade-up"
                    data-aos-delay="600">
                    @csrf
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="NAME" class="form-control" placeholder="Your Name" required="">
                        </div>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="EMAIL" placeholder="Your Email" required="">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="SUBJECT" placeholder="Subject" required="">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="MESSAGE" rows="6" placeholder="Message"
                                required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
                        </div>

                    </div>
                </form><!-- End Contact Form -->

            </div>

        </section>
        <!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer dark-background">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div class="address">
                        <h4>Address</h4>
                        <p>GF 108 GE Road</p>
                        <p>Raipur, RPR 492001</p>
                        <p></p>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Contact</h4>
                        <p>
                            <strong>Phone:</strong> <span>+91 871XXXXX35</span><br>
                            <strong>Email:</strong> <span>Restaurant@mail.com</span><br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Opening Hours</h4>
                        <p>
                            <strong>Mon-Sat:</strong> <span>11AM - 12PM</span><br>
                            <strong>Sunday</strong>: <span>Closed</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="https://x.com/" class="twitter"><i class="bi bi-twitter-x"></i></a>
                        <a href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://in.linkedin.com/" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

    </footer>


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>





    {{-- <script src="user_support/vendor/php-email-form/validate.js"></script> --}}
    <script src="user_support/vendor/aos/aos.js"></script>


    <!-- Main JS File -->
    <script src="user_support/js/main.js"></script>



</body>

</html>