<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Red Stream - connect the donors</title>

  <!-- favicon-->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--css-->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- google font link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Roboto:wght@400;500;600&display=swap" rel="stylesheet">

  <style>
    /* Popup styles */
    .popup {
      display: flex;
      align-items: center;
      justify-content: center;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      background: linear-gradient(135deg, #ffffff, #a3d2ee);
      color: #0e254e;
      font-size: 16px;
      z-index: 9999;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    @media screen and (max-width: 768px) {
      .hero-form {
        display: flex;
        flex-direction: column;
      }

      .email-field {
        margin-bottom: 10px;
      }

      .hero-banner iframe {
        width: 100%;
        height: 200px;
      }
    }

    @media screen and (max-width: 900px) {
      .hero-form {
        display: flex;
        flex-direction: column;
      }

      .email-field {
        margin-bottom: 10px;
      }

      .hero-banner iframe {
        width: 100%;
        height: 250px;
      }
    }

    /* Media query for screen sizes between 905x800 and 1197x800 */
    @media screen and (min-width: 905px) and (max-width: 1197px) {
      .hero-form {
        max-width: 70%;
        margin: 0 auto;
      }

      .hero-banner iframe {
        width: 100%;
        height: 300px;
      }
    }
  </style>

  <script>
    // Function to display the popup message
    function showPopup(message) {
      const popup = document.createElement("div");
      popup.className = "popup";
      popup.textContent = message;
      document.body.appendChild(popup);
      // Automatically close the popup after 3 seconds
      setTimeout(function() {
        popup.remove();
      }, 3000);
    }
  </script>

</head>

<body id="top">
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
            <a href="https://www.instagram.com/_vladimir_putin.___/" class="social-link">
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
          <a href="admin/login.php" class="navbar-link" data-nav-link>Admin</a>
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
          
      </ul>
    </nav>
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
            <p class="section-subtitle">Donate Life</p>
            <h1 class="h1 hero-title">Contact Us</h1>
            <h2 style="color: var(--royal-blue-light);">Address</h2>
            <p class="hero-text">
              Donate Life, nepalgunj road, near College of Engineering and Management<br>
              
            </p>
            <h2 style="color: var(--royal-blue-light);">Contact Details</h2>
            <p class="hero-text">
              MOBILE: +977-9863442248 | TELEPHONE: 041256849<br>
              EMAIL : donatelife@gmail.com<br>
            </p>
            <form action="" class="hero-form" method="POST">
              <input type="email" name="email_address" aria-label="email" placeholder="Your Email Address..." required class="email-field">
              <button type="submit" class="btn">Get Response Back</button>
            </form>
          </div>
          <figure class="hero-banner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.76164524118906!2d76.39003912368983!3d9.750279515331268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b08790da3aa8ec7%3A0x58b351f9df4075a3!2sBlood%20Storage%20Center!5e0!3m2!1sen!2sin!4v1689507408879!5m2!1sen!2sin" width="700" height="600" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </figure>
        </div>
      </section>

      <!--FOOTER-->
      <?php include 'footer.php'; ?>


      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["email_address"]) && filter_var($_POST["email_address"], FILTER_VALIDATE_EMAIL)) {
          // Sanitize the email address to prevent SQL injection
          $email = htmlspecialchars($_POST["email_address"]);
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "redstream_db";
          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $stmt = $conn->prepare("INSERT INTO response_back (email) VALUES (?)");
          $stmt->bind_param("s", $email);
          $stmt->execute();
          if ($stmt->affected_rows > 0) {
            echo '<script>showPopup("Email added successfully!");</script>';
          } else {
            echo '<script>showPopup("Error: Unable to add email. Please try again later.");</script>';
          }
          $stmt->close();
          $conn->close();
        } else {
          echo '<script>showPopup("Error: Invalid email address. Please enter a valid email.");</script>';
        }
      }
      ?>

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