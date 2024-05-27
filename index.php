<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donate Life</title>

  <!-- favicon-->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--css-->
  <link rel="stylesheet" href="./assets/css/style.css">


  <!-- google font link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Roboto:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="dash_resource/css/vertical-layout-light/sweetalert.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
 
</head>

<body id="top" class="hello">
  <!-- HEADER-->
  <header class="header">
    <div class="header-top">
      <div class="container">
        <ul class="contact-list">
          <li class="contact-item">
            <ion-icon name="mail-outline"></ion-icon>
            <a href="mailto:donatelife@gmail.com" class="contact-link">donatelife@gmail.com</a>
          </li>
          <li class="contact-item">
            <ion-icon name="call-outline"></ion-icon>
            <a href="tel:+977-9863442248" class="contact-link">+977-9863442248</a>
          </li>
        </ul>
        <ul class="social-list">
          <li>
            <a href="https://www.facebook.com/andro.pool.54?mibextid=ZbWKwL" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/whxitte" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/Annabel07785340" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://youtu.be/Af0gk_kiGac" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="header-bottom" data-header>
      <div class="container">
        <a href="#" class="logo">Donate Life</a>
        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">
            <li>
              <a href="index.php" class="navbar-link" data-nav-link>Home</a>
            </li>
            <li>
              <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
            </li>
            <li>
              <a href="about.php" class="navbar-link" data-nav-link>About</a>
            </li>

            <li>
              <a href="contact.php" class="navbar-link" data-nav-link>Contact</a>
            </li>
            <li>
              <a href="admin/login.php" class="navbar-link" data-nav-link>admin</a>
            </li>
         
          

          <li>
          <a href="donor/register.php" class="button button-primary"  >Donate Blood</a>
        <button class="nav-toggle-button" aria-label="Toggle menu" data-nav-toggler>
          </button>
          </li>
          <li>
          <a href="patient/register.php" class="button button-primary"  >Request Blood</a>
        <button class="nav-toggle-button" aria-label="Toggle menu" data-nav-toggler>
          </button>
          
          </li>
          </ul>
        </nav>
        
       
          
        <!-- <a href="patient/register.php" class="btn">Request Blood</a>
        <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
          <ion-icon name="menu-sharp" aria-hidden="true" class="menu-icon"></ion-icon>
          <ion-icon name="close-sharp" aria-hidden="true" class="close-icon"></ion-icon>
        </button> -->

      </div>
    </div>

  </header>

  <main>
    <article>
      <!--HERO-->
      <section class="section hero" id="home" style="background-image: url('./assets/images/hero-bg.png')" aria-label="hero">
        <div class="container">
          <div class="hero-content">
            <img src="assets/images/blood-icon.png" alt="ICON" width="70" height="70">
            <p class="section-subtitle">Welcome To Donate Life</p>
            <h1 class="h1 hero-title">Connecting The Donors...</h1>
            <p class="hero-text">
              Our mission is to bridge the gap between blood donors and recipients, providing a seamless and efficient experience for both parties.
              You can trust us,
              we provide the best service...
            </p>
            <form action="" class="hero-form" method="POST">
              <input type="email" name="email_address" aria-label="email" placeholder="Your Email Address..." required class="email-field">
              <button type="submit" class="btn">Get Response Back</button>
            </form>
          </div>
          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="587" height="839" alt="hero banner" class="w-100">
          </figure>
        </div>
      </section>

      <!--SERVICE-->
      <section class="section service" id="service" aria-label="service">
        <div class="container">
          <p class="section-subtitle text-center">Find the nearest Donor For You</p>
          <h2 class="h2 section-title text-center">FIND DONOR</h2>

          <!-- Replace the existing content with your form -->
          <form class="donor-form" method="post" action="">
            

          

            <div class="form-group">
              <label for="blood-type">Blood Type:</label>
              <select id="blood-type" name="blood-type">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
              </select>
            </div>
            <div class="form-group">
              <label for="city">City:</label>
              <input type="text" id="city" name="city" required>
            </div>

            <button type="submit" class="btn">Find Donor</button>
          </form>
          <?php
          define('dbhost','localhost');
          define('dbuser','root');
          define('dbpass','');
          define('dbname','donate_life');
          
          try{
              $conn = new mysqli(dbhost,dbuser,dbpass,dbname);
              // $connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
              // $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
          }
          catch(PDOException $e)
          {
              echo $e->getMessage();
          }
          
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $blood_group = $_POST["blood-type"];
  $city = $_POST["city"];
          $sql = "SELECT COUNT(*) AS count FROM donor_reg WHERE blood_group = ? AND city = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $blood_group, $city);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $count = $row['count'];

        
            echo "<script>
            Swal.fire({
              title: ' " . $count . " " . $blood_group . " blood group donor is available to donate in this city!',
              text: 'Register to request for blood donations.',
              icon: 'success',
              showClass: {
                popup: `
                  animate__animated
                  animate__fadeInUp
                  animate__faster
                `
              },
              hideClass: {
                popup: `
                  animate__animated
                  animate__fadeOutDown
                  animate__faster
                `
              }
            });
          </script>";

            $stmt->close();
            $conn->close();
}
          ?>


        </div>
      </section>

      <!--ABOUT-->
      <section class="section about" id="about" aria-label="about">
        <div class="container">
          <figure class="about-banner">
            <img src="./assets/images/about-banner.png" width="470" height="538" loading="lazy" alt="about banner" class="w-100">
          </figure>
          <div class="about-content">
            <p class="section-subtitle">About Us</p>
            <h2 class="h2 section-title">We Care For Your Loved Ones 🥰</h2>
            <p class="section-text section-text-1">
              At Donate Life, we are passionate about connecting blood donors with recipients and bridging the gap in the healthcare industry.
              Our mission is to provide a seamless and efficient experience for both donors and recipients, ensuring timely access to life-saving blood transfusions.
            </p>
            <p class="section-text">
              We strive to create a community that fosters empathy, support, and solidarity among individuals who are committed to making a difference.
              Whether you're a potential donor or someone in need of blood, we are here to assist you every step of the way.
            </p>
            <a href="about.php" class="btn">Read more About Us</a>
          </div>
        </div>
      </section>

      <!--services-->

      <section class="section doctor" aria-label="doctor">
        <div class="container">
          <p class="section-subtitle text-center">Emergency !</p>
          <h2 class="h2 section-title text-center">Our other services</h2>
          <ul class="has-scrollbar">
            <li class="scrollbar-item">
              <div class="doctor-card">
                <div class="card-banner img-holder" style="--width: 460; --height: 500;">
                  <img src="./assets/images/doctor-1.png" width="460" height="500" loading="lazy" alt="PREBOOK" class="img-cover">
                </div>
                <h3 class="h3">
                  <a href="#" class="card-title">Pre Book Blood</a>
                </h3>
                <p class="card-subtitle">Book Blood For An upcoming Date</p>
                <ul class="card-social-list">
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="scrollbar-item">
              <div class="doctor-card">
                <div class="card-banner img-holder" style="--width: 460; --height: 500;">
                  <img src="./assets/images/doctor-2.png" width="460" height="500" loading="lazy" alt="AMBULANCE" class="img-cover">
                </div>
                <h3 class="h3">
                  <a href="#" class="card-title">Call Ambulance</a>
                </h3>
                <p class="card-subtitle">Get our ambulance service</p>
                <ul class="card-social-list">
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="scrollbar-item">
              <div class="doctor-card">

                <div class="card-banner img-holder" style="--width: 460; --height: 500;">
                  <img src="./assets/images/doctor-3.png" width="460" height="500" loading="lazy" alt="WHY DONATE ?" class="img-cover">
                </div>
                <h3 class="h3">
                  <a href="#" class="card-title">Why Donate ?</a>
                </h3>
                <p class="card-subtitle">Why donate blood ?</p>
                <ul class="card-social-list">
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="scrollbar-item">
              <div class="doctor-card">
                <div class="card-banner img-holder" style="--width: 460; --height: 500;">
                  <img src="./assets/images/doctor-4.png" width="460" height="500" loading="lazy" alt="CAN YOU DONATE" class="img-cover">
                </div>
                <h3 class="h3">
                  <a href="canyoudonate.html" class="card-title">Can You Donate ?</a>
                </h3>
                <p class="card-subtitle">Check that can you donate blood</p>
                <ul class="card-social-list">
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </section>


      <!--CTA-->
      <section class="section cta" aria-label="cta">
        <div class="container">
          <figure class="cta-banner">
            <img src="./assets/images/cta-banner.png" width="1056" height="1076" loading="lazy" alt="cta banner" class="w-100">
          </figure>
          <div class="cta-content">
            <p class="section-subtitle">Give Blood Directly To Us</p>
            <h2 class="h2 section-title">We Are open And Welcoming Donors</h2>
            <a href="#" class="btn">Book schedule</a>
          </div>
        </div>
      </section>

      <!--BLOG-->
      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">
          <p class="section-subtitle text-center">Our Blog</p>
          <h2 class="h2 section-title text-center">Latest Blog & News</h2>
          <ul class="blog-list">
            <li>
              <div class="blog-card">
                <figure class="card-banner img-holder" style="--width: 1180; --height: 800;">
                  <img src="./assets/images/blog-1.jpg" width="1180" height="800" loading="lazy" alt="Cras accumsan nulla nec lacus ultricies placerat." class="img-cover">
                  <div class="card-badge">
                    <ion-icon name="calendar-outline"></ion-icon>
                    <time class="time" datetime="2022-03-24">24th March 2022</time>
                  </div>
                </figure>
                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Write whatever you want here. Blah Blah Blah</a>
                  </h3>
                  <p class="card-text">
                    When it spins, when it swirls When it whirls, when it twirls Two little beautiful girls Lookin' puzzled, in a daze I know it's confusing you
                  </p>
                  <a href="#" class="card-link">Read More</a>
                </div>
              </div>
            </li>
            <li>
              <div class="blog-card">
                <figure class="card-banner img-holder" style="--width: 1180; --height: 800;">
                  <img src="./assets/images/blog-2.jpg" width="1180" height="800" loading="lazy" alt="Dras accumsan nulla nec lacus ultricies placerat." class="img-cover">
                  <div class="card-badge">
                    <ion-icon name="calendar-outline"></ion-icon>
                    <time class="time" datetime="2022-03-24">24th March 2022</time>
                  </div>
                </figure>
                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Write whatever you want here. Foo foo foo</a>
                  </h3>
                  <p class="card-text">
                    Now hush little baby, don't you cry Everything's gonna be alright Stiffen that upper lip up little lady, I told ya Daddy's here to hold ya through the night I know mommy's not here right now
                  </p>
                  <a href="#" class="card-link">Read More</a>
                </div>
              </div>
            </li>
            <li>
              <div class="blog-card">
                <figure class="card-banner img-holder" style="--width: 1180; --height: 800;">
                  <img src="./assets/images/blog-3.jpg" width="1180" height="800" loading="lazy" alt="Seas accumsan nulla nec lacus ultricies placerat." class="img-cover">
                  <div class="card-badge">
                    <ion-icon name="calendar-outline"></ion-icon>
                    <time class="time" datetime="2022-03-24">24th March 2022</time>
                  </div>
                </figure>
                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Write whatever you want here. Wee wee wee</a>
                  </h3>
                  <p class="card-text">
                    Victim of the great machine, in love with everything I see Neon lights surrounding me, I indulge in luxury Everything I do is wrong
                  </p>
                  <a href="#" class="card-link">Read More</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </article>
  </main>

  <?php include 'footer.php'; ?>


  <!--BACK TO TOP-->
  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up" aria-hidden="true"></ion-icon>
  </a>

  <!--custom js link-->
  <script src="./assets/js/script.js" defer></script>
  <!--ionicon link-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>