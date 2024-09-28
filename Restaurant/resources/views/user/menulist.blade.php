<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Menu</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="user_support/img/cookfavicon.png" rel="icon">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">

  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap"
    rel="stylesheet">


  <link href="user_support/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="user_support/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="user_support/vendor/aos/aos.css" rel="stylesheet">


  <!-- Main CSS  -->
  <link href="user_support/css/main.css" rel="stylesheet">


</head>

<body class="starter-page-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">

        <img src="user_support/img/logo.png" alt="">
        <h1 class="sitename">EasyEat</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{url('/home')}}">Home<br></a></li>
          <li><a href="{{url('/home#about')}}">About</a></li>
          <li><a href="#menu" class="active">Menu</a></li>
          <!-- <li><a href="#events">Events</a></li> -->
          <!-- <li><a href="#chefs">Chefs</a></li> -->
          <li><a href="{{url('/home#galery')}}">Gallery</a></li>
          <li><a href="{{url('/home#contact')}}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{url('/') }}">Log out</a>

    </div>
  </header>

  <main class="main">
    <div class="container mt-5">
        <h3>Total Price: ₹<span id="total-price">0.00</span></h3>
    </div>
    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Menu Section</h2>
            <p><span>Choose your</span> <span class="description-title">Favourite</span></p>
        </div><!-- End Section Title -->

        <!-- Menu Table -->
        <div class="container mt-5">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Dish</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <tr>
                        <td>Margherita Pizza</td>
                        <td>Classic pizza with tomatoes, mozzarella, and basil</td>
                        <td>₹12.99</td>
                        <td><a class="btn btn-outline-dark mt-auto order-btn" href="#" data-price="12.99">Order</a></td>
                    </tr> --}}
                    

                    @foreach($list as $item)
                    <tr>
                        {{-- <td>{{ $item->ID }}</td> --}}
                        <td>{{ $item->NAME }}</td>
                        <td>{{ $item->DESCRIPTION }}</td>
                        <td>₹{{ $item->PRICE }}</td>
                        <td><a class="btn btn-outline-dark mt-auto order-btn" href="#" data-price="{{ $item->PRICE }}">Order</a></td>
                        {{-- <td>{{ $item->CATEGORY }}</td> --}}
                        {{-- <td>{{ $item->SALARY }}</td> --}}
                        {{-- <td>{{ $item->MOBNUM }}</td> --}}
                        {{-- <td>{{ $item->JOIN_DATE }}</td>    --}}
                @endforeach


                </tbody>
            </table>
        </div><!-- End Menu Table -->

    </section><!-- /Starter Section Section -->
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

  <!-- Preloader -->
  {{-- <div id="preloader"></div> --}}


  {{-- <script src="user_support/vendor/php-email-form/validate.js"></script> --}}
  <script src="user_support/vendor/aos/aos.js"></script>

  <!-- Main JS File -->
  <script src="user_support/js/main.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      let totalPrice = 0;
  
      document.querySelectorAll('.order-btn').forEach(button => {
        button.addEventListener('click', function(event) {
          event.preventDefault();
          const price = parseFloat(this.getAttribute('data-price'));
          totalPrice += price;
          document.getElementById('total-price').innerText = totalPrice.toFixed(2);
        });
      });
    });
  </script>

</body>

</html>