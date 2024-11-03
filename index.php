<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo json_decode(file_get_contents("./data/info.json"))->info->entrepriseName; ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/logo.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Fontawesome -->
  <link href="assets/fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="assets/fontawesome/css/brands.css" rel="stylesheet">
  <link href="assets/fontawesome/css/solid.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <?php include('views/header.php'); ?>

  <main class="main">
    <div class="section-container">
      <!-- Services section -->
      <section id="services" class="services section">
        <?php include('views/services.php'); ?>
      </section>
      <!-- End Services section -->
      <!-- Worksites section -->
      <section id="worksites" class="worksites section">
        <?php include('views/worksites.php'); ?>
      </section>
      <!-- End worksites section -->
      <!-- About section -->
      <section id="about" class="about section">
        <?php include('views/about.php'); ?>
      </section>
      <!-- End About section -->
      <!-- Contact section -->
      <section id="contact" class="contact section">
        <?php include('views/contact.php'); ?>
      </section>
      <!-- End contact section -->
    </div>
    <!-- Worksite details modal -->
    <div id="worksiteDetailModal" class="modal modal-xl fade" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h1 class="modal-title"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- HTML will be inserted here -->
          </div>
        </div>
      </div>
    </div>
    <!-- End worksite details modal -->
  </main>

  <?php include('views/footer.php'); ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- Main JS File -->
  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script type="text/javascript">
    window.addEventListener('DOMContentLoaded', event => {
      //Activate Bootstrap scrollspy on the main nav element
      const navMenu = document.body.querySelector('#navmenu');
      if (navMenu) {
        new bootstrap.ScrollSpy(document.body, {
          target: '#navmenu'
        });
      };
    });
    $(document).ready(function() {
      //Load selected worksite details content in modal
      $(".details-link").on('click', function(e) {
        e.preventDefault();
        //Recovery of selected workiste details url
        var url = $(this).attr("href");
        $.ajax({
          url: url,
          type: 'post',
          async: 'false',
          success: function(response) {
            //Adding workwite title in modal title
            $(".modal-title").html(<?php echo json_encode($worksite_description->titre); ?>);
            //Adding details text in modal body
            $('.modal-body').html(response);
            $('#worksiteDetailModal').modal('show');
            //Initializing of swipper
            const swiper = new Swiper('.swiper', {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            });
          }
        });
      });
      //Send Email
      $(".php-email-form").on("submit", function(e) {
        e.preventDefault();
        var formData = $(".php-email-form").serialize();
        $.ajax({
          type: "POST",
          url: "forms/contact.php",
          dataType: "json", // Add datatype
          data: formData,
          statusCode: {
            500: function() {
              $(".error-message").html("Désolé, quelque chose s'est mal passé. Veuillez réessayer plus tard.").show();
            }
          },
          success: function(data) {
            $(".sent-message").hide();
            $(".error-message").hide();
            //Successfully send message
            if (data.status) {
              //Display successful message
              $(".sent-message").html(data.message).show();
              //Reset form inputs
              $(".php-email-form").each(function() {
                this.reset();
              });
              //Reset reCaptcha
              grecaptcha.reset();
            } else {
              //Display error message
              $(".error-message").html(data.message).show();
            }
          }
        });
      });
    });
  </script>
</body>

</html>