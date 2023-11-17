<?php 
include 'connection.php';
$query2 = "SELECT * FROM information";
    $results = mysqli_query($conn, $query2);
    
    if (mysqli_num_rows($results) > 0) {
      
        $row = mysqli_fetch_assoc($results);
        $email = $row['email'];
        $contact = $row['contact'];
        $address = $row['address'];
        $gps = $row['gps'];
        $mission = $row['mission'];
        $vision = $row['vision'];
        $fb = $row['facebook'];
        
    } else {
    
        die("Error: Not found.");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Seafood to Go</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/sftg2.png" rel="icon">
  <link href="assets/img/sftg2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
.edit-button {
    background-color: #f56e00;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    margin-bottom: 10px;
}

.save-button {
    background-color: #0f9d58;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    margin-bottom: 10px;
}

/* .editable {
    border: 1px solid #ccc;
    padding: 5px;
    border-radius: 4px;
    margin-bottom: 10px;
} */

.editable[contenteditable="true"] {
    background-color: #fff;
}
</style>
<body>

  <!-- ======= Top Bar ======= -->
  <!-- <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">sftg@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>09123456789</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section> -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.php" ><img src="assets/img/sftg2.png" alt=""><span></span></a></h1>
      
   

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="login.php">Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <a href="index.php" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/sftg.png" alt=""> 
        <!-- <i class="bi bi-camera"></i> -->
      </a>
      <h2>Satisfy your Cravings and have a Feast at Home with your Family and Friends.</h2>
      <div class="d-flex">
        <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2>About</h2> -->
          <h3><span>🦐 More About us 🦀</span></h3>

        </div>

        <div class="row">
          <!-- <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100"> -->
            <img src="assets/img/sftg3.jpg" class="img-fluid" alt="">
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <h3>We cook Fresh and Delicious Authentic Cajun Seafoods for our customers.</h3>
        <ul>
            <li>
                <i class=""></i>
                <div>
                    <h3>Mission</h3>
                    <label for="mis"></label>
                    <p class="editable" name = "mission"><?php echo $mission; ?></p>
                </div>
            </li>
            <li>
                <i class=""></i>
                <div>
                    <h3>Vision</h3>
                    <label for="vis"></label>
                    <p class="editable" name = "vision"><?php echo $vision; ?></p>
                </div>
            </li>
        </ul>
    </div>

  
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    

    <!-- ======= Counts Section ======= -->
    

    <!-- ======= Clients Section ======= -->
    

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <!-- <h2>Services</h2> -->
      <h3>Check our <span> 🦐 Seafood Choices 🦀</span></h3>
    </div>

    <div class="row">
      <?php
      include "connection.php";
      // Assuming you have already established a database connection

      // SQL query to retrieve product data
      $sql = "SELECT `pID`, `pName`, `pDesc`, `pPrice`, `pPhoto` FROM `product`";
      $result = mysqli_query($conn, $sql);

      // Check if the query was successful
      if ($result) {
        // Loop through the rows and display the data
        while ($row = mysqli_fetch_assoc($result)) {
          $pID = $row['pID'];
          $pName = $row['pName'];
          $pDesc = $row['pDesc'];
          $pPrice = $row['pPrice'];
          $pPhoto = $row['pPhoto'];

          echo '<div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos-delay="100">';
          echo '<div class="icon-box">';
          echo "<img src='assets/img/$pPhoto' class='img-fluid' alt='Product Photo'>";
          echo "<h4>$pName</h4>";
          echo "<p>$pDesc</p>";
          echo "<p>₱ $pPrice</p>";
          echo '</div>';
          echo '</div>';
        }

        // Free the result set
        mysqli_free_result($result);
      } else {
        // Handle the error if the query fails
        echo "Error: " . mysqli_error($conn);
      }

      // Close the database connection
      mysqli_close($conn);
      ?>
    </div>
  </div>
</section><!-- End Services Section -->



    <!-- ======= Testimonials Section ======= -->
    

    <!-- ======= Team Section ======= -->
   

    <!-- ======= Pricing Section ======= -->
    

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title"> -->
          <!-- <h2>F.A.Q</h2> -->
          <!-- <h3>Frequently Asked <span>Questions</span></h3>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list">

              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Is it cooked fresh? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                   Yes, all ingridients are cleaned and cooked fresh.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </section>End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2>Contact</h2> -->
          <h3><span>Contact Us</span></h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p><?php echo $address; ?></p>
            </div>
          </div>

          <!-- <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>sftg@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>09123456789</p>
            </div>
          </div> -->

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6">
            <!-- <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30880.725352436243!2d120.8946296!3d14.9540734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396555546b11b4b%3A0x61a1256c6a834ad4!2sXV3V%2BJWR%2C%20Baliwag%2C%20Bulacan!5e0!3m2!1sen!2sph!4v1620918202455!5m2!1sen!2sph" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> -->

                <?php
            echo '<iframe class="mb-4 mb-lg-0" src="' .$gps. '" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>';
    ?>
            </div>
          


          <div class="col-lg-6">
            <form action="send.php" method="post" class="">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" value="" required></textarea>
              </div>
            
              <div class="text-center" name="send"><input type="submit"></input></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Seafood to Go<span></span></h3>
            <p>
            <?php echo $address; ?> <br><br>
              <strong>Phone:</strong><?php echo $contact; ?><br>
              <strong>Email:</strong> <?php echo $email; ?><br>
            </p>
          </div>


          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>More of our Platforms</h4>
            <p>Visit our Socials</p>
            <div class="social-links mt-3">
            <a href="<?php echo $fb; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        <!-- &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved -->
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->

      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>