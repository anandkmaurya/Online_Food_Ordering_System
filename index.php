<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Home - Online Food Ordering</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />
  </head>
  <body>
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
        <a
          href="index.php"
          class="logo d-flex align-items-center me-auto me-lg-0"
        >
          <h1>Online Food Ordering Website<span>.</span></h1>
        </a>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#menu">Our Menu</a></li>
           <!--  <li class="dropdown" >
              <a href="#"
                ><span>Drop Down</span>
                <i class="bi bi-chevron-down dropdown-indicator"></i
              ></a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown">
                  <a href="#"
                    ><span>Deep Drop Down</span>
                    <i class="bi bi-chevron-down dropdown-indicator"></i
                  ></a>
                  <ul >
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
              </ul>
            </li> -->
          </ul>
        </nav>
        <a class="btn-book-a-table" href="#user-lg">Login</a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      </div>
    </header>
    <section id="hero" class="hero d-flex align-items-center section-bg">
      <div class="container">
        <div class="row justify-content-between gy-5">
          <div
            class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start"
          >
            <h2 data-aos="fade-up">
              Welcome to the Online Food Ordering Website
            </h2>
            <p data-aos="fade-up" data-aos-delay="100">
"Order delicious meals online hassle-free. Browse, click, and enjoy speedy delivery. Explore a world of flavors with us today!"
            </p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#user-lg" class="btn-book-a-table"
                >Order Now</a
              >
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
            <img
              src="assets/img/hero-img.png"
              class="img-fluid"
              alt=""
              data-aos="zoom-out"
              data-aos-delay="300"
            />
          </div>
        </div>
      </div>
    </section>
    <section  class="user-lg" id="user-lg">
      <div class="container">
        <div class="left">
          <form action="validation.php" method="POST" >
            <h2>Sign In</h2>
                <input type="text" name="number" placeholder="Phone Number" required><br>
                <input type="password" name="password" placeholder="Enter your password" required>
                <p>New User go to Sign Up <!-- <a href="">Sign Up </a> --></p>
               <center> <button type="submit" >Sign In Now</button></center>
          </form>
        </div>
        <div class="right">
          <form action="register.php" method="POST">
            <?php
            $error = isset($_GET['error']) ? $_GET['error'] : ''; // Retrieve the error parameter from the URL
            echo $error;
        ?>
        <form action="register.php" method="POST">
    <h2>Sign Up</h2>
    <input type="text" id="name" name="name" placeholder="Enter your name"  required/>
    <?php
        $er1 = isset($_GET['er1']) ? $_GET['er1'] : ''; // Retrieve the error parameter from the URL
        echo $er1;
    ?>
    <br />
    <input type="text" name="number" placeholder="Phone Number" required><br>
    <?php
        $er2 = isset($_GET['er2']) ? $_GET['er2'] : ''; // Retrieve the error parameter from the URL
        echo $er2;
    ?>
    <input type="textarea" id="address" name="address" placeholder="Enter your full address" > <br>
    <?php
        $er3 = isset($_GET['er3']) ? $_GET['er3'] : ''; // Retrieve the error parameter from the URL
        echo $er3;
    ?>
    <input type="password" name="password" placeholder="Create your  password">
    <?php
        $er4 = isset($_GET['er4']) ? $_GET['er4'] : ''; // Retrieve the error parameter from the URL
        echo $er4;
    ?>
    <p>Already have a account go to Sign In </p>
    <center><button type="submit">Sign Up Now</button></center>
          </form>
        </div>
      </div>
    </section>
    <main id="main">
      
      <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Our Menu</h2>
            <p>Check Our <span>Yummy Menu</span></p>
          </div>
          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade active show" id="menu-starters">
              <div class="row gy-5">
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-1.png" class="glightbox"
                    ><img
                      src="assets/img/menu/menu-item-1.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>North Indian</h4>
                </div>
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-2.png" class="glightbox"
                    ><img
                      src="assets/img/menu/menu-item-2.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>South Indian</h4>
                </div>
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-3.png" class="glightbox"
                    ><img
                      src="assets/img/menu/menu-item-3.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Chinese</h4>
                </div>
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-4.png" class="glightbox"
                    ><img
                      src="assets/img/menu/menu-item-4.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Italian</h4>
                </div>
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-5.png" class="glightbox"
                    ><img
                      src="assets/img/menu/menu-item-5.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Deserts</h4>
                </div>
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"
                    ><img
                      src="assets/img/menu/menu-item-6.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Starters</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>About Us</h2>
            <p>Learn More <span>About Us</span></p>
          </div>

          <div class="row gy-4">
            <div
              class="col-lg-5 position-relative about-img"
              style="background-image: url(assets/img/about.jpg)"
              data-aos="fade-up"
              data-aos-delay="150"
            ></div>
            <div
              class="col-lg-7 d-flex"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="content ps-0 ps-lg-5">
                <p class="fst-italic">
                At Online Food Ordering Website, we believe that great food brings people together. We are more than just an online food ordering platform; we are a culinary adventure, delivering delicious meals right to your doorstep.
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check2-all"></i> Fast and Reliable Delivery......
                  </li>
                  <li>
                    <i class="bi bi-check2-all"></i> Customer Satisfaction........
                  </li>
                  <li>
                    <i class="bi bi-check2-all"></i>User-Friendly Interface......
                  </li>
                </ul>
                <p>
                <b>Community and Sustainability</b><br>
                Beyond connecting you with great food, Online Food Ordering Website is committed to creating a positive impact. We actively support local communities and strive to minimize our environmental footprint. Join us in building a sustainable future while enjoying your favorite meals.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
     <!--  <section id="stats-counter" class="stats-counter">
        <div class="container" data-aos="zoom-out">
          <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="232"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Clients</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="521"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Projects</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="1453"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Hours Of Support</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="32"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Workers</p>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Contact Now</h2>
            <p>Feel <span>Free </span>Contact Us at anytime</p>
          </div>

          <div class="row g-0">
            <div
              class="col-lg-4 reservation-img"
              style="background-image: url(assets/img/reservation.jpg)"
              data-aos="zoom-out"
              data-aos-delay="200"
            ></div>

            <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
              <form
                action="forms/book-a-table.php"
                method="post"
                role="form"
                class="php-email-form"
                data-aos="fade-up"
                data-aos-delay="100"
              >
                <div class="row gy-4">
                  <div class="col-lg-12 col-md-6">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                      data-rule="minlen:4"
                      data-msg="Please enter at least 4 chars"
                    />
                    <div class="validate"></div>
                  </div>
                  <div class="col-lg-12 col-md-6">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                      data-rule="email"
                      data-msg="Please enter a valid email"
                    />
                    <div class="validate"></div>
                  </div>
                  <div class="col-lg-12 col-md-6">
                    <input
                      type="text"
                      class="form-control"
                      name="phone"
                      id="phone"
                      placeholder="Your Phone"
                      data-rule="minlen:4"
                      data-msg="Please enter at least 4 chars"
                    />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="5"
                    placeholder="Message"
                  ></textarea>
                  <div class="validate"></div>
                </div>
                <br />
                <div class="text-center">
                  <button type="submit">Contact Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section> -->
    </main>
    <footer id="footer" class="footer">
      <div class="container">
        <div class="copyright">Designed & Developed By Group 4</div>
      </div>
    </footer>
    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>
    <div id="preloader"></div>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
