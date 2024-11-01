<?php
//Get confing file
$conf = json_decode(file_get_contents("data/info.json"));
//Get and compile paragraphs
$aboutSectionText = "";
foreach ($conf->about as $paragraph) {
  $aboutSectionText .= '<p class="py-3 text-center">' . $paragraph . '</p>';
}
?>
<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>A propos</h2>
</div>
<!-- End Section Title -->
<div class="container" data-aos="fade-up" data-aos-delay="100">
  <div class="row gy-4 justify-content-center">
    <div class="col-lg-4">
      <img src="assets/img/logo_small.png" class="img-fluid" alt="">
    </div>
    <div class="col-lg-8 content">
      <h3 class="text-center"><?php echo $conf->info->entrepriseName; ?></h3>
      <?php echo $aboutSectionText; ?>
    </div>
  </div>
</div>