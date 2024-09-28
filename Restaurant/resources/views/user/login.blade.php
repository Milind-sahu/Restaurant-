<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Login - EasyEat</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <style>
        /* Specific Styles for Login and Sign-Up Pages */
        .login-page .main,
        .signup-page .main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 70vh;
        }

        .login-page .php-email-form,
        .signup-page .php-email-form {
            background-color: var(--surface-color);
            padding: 30px;
            border-radius: 10px;
            max-width: 30vw;
            box-shadow: 0px 0 30px rgba(234, 6, 6, 0.1);
            margin: 0 auto;
            /* Add this line to center the form */
        }

        .login-page .php-email-form input,
        .signup-page .php-email-form input {
            margin-bottom: 15px;
            border-radius: 5px;
            /* margin: 0 auto; */
        }

        .login-page .btn-get-started,
        .signup-page .btn-get-started {
            display: block;
            margin: 0 auto;
        }
    </style>

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

<body class="login-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container">
            <a href="index.html" class="logo d-flex align-items-center">
                <h1 class="sitename">EasyEat<span>.</span></h1>
            </a>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <div class="section-title">
                <!-- <h2>Login</h2> -->
                <p>Welcome back! Please log in to your account.</p>
            </div>
            <form action="{{url('/')}}" method="POST" class="php-email-form">
                @csrf
                <div class="row gy-4">
                    <div class="col-lg-12">
                        <input type="email" name="EMAIL" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="col-lg-12">
                        <input type="password" name="PASSWORD" class="form-control" placeholder="Your Password"
                            required>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn-get-started">Login</button>
                    </div>
                </div>
            </form>
            <div class="text-center mt-3">
                <p>Don't have an account? <a href="{{url('/signup')}}">Sign up here</a></p>
            </div>
        </div>
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

    {{-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
</body>

</html>