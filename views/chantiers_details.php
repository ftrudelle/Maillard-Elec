<?php if (isset($_GET["description"]) && isset($_GET["images"])) {
  $description = $_GET["description"];
  $images = $_GET["images"];
}

// Récupération du contenu du fichier JSON
$json_content = file_get_contents("../" . $description);
// Décodage du fichier JSON
$worksite_description = json_decode($json_content);

//Récupération des images du chantier
$worksite_images = glob("../" . $images . '/*');

// Création des images dans l'article
$image_string = "";
foreach ($worksite_images as $worksite_image) {
  $image_string .= '<div class="swiper-slide"><img src="' . substr($worksite_image, 3) . '" alt=""></div>';
}
// Envoi des articles de chantier dans la page
echo '<!-- worksite Details Section -->
    <section id="worksite-details" class="worksite-details section">
      <!-- Section Title -->
      <!--<div class="container section-title" data-aos="fade-up">
        <h2>' . $worksite_description->titre . '</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>-->
      <!-- End Section Title -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="worksite-details-slider swiper init-swiper">
              <div class="swiper-wrapper align-items-center">' . $image_string . '</div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="worksite-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Description</h2>
              <p>' . $worksite_description->description . '</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /worksite Details Section -->';
