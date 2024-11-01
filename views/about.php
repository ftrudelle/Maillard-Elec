<?php
//Get confing file
$conf = json_decode(file_get_contents("data/info.json"));
//Calculate the age
$age = date("Y") - explode("/", $conf->birthday)[2];
?>
<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>A propos</h2>
  <p class="text-center">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
</div>
<!-- End Section Title -->
<div class="container" data-aos="fade-up" data-aos-delay="100">
  <div class="row gy-4 justify-content-center">
    <div class="col-lg-4">
      <img src="assets/img/logo_small.png" class="img-fluid" alt="">
    </div>
    <div class="col-lg-8 content">
      <h3 class="text-center">Electricien</h2>
        <p class="fst-italic py-3 text-center">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
        <p class="py-3 text-center">
          Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
          Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque.
        </p>
    </div>
  </div>
</div>