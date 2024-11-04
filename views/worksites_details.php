<?php if (isset($_GET["description"]) && isset($_GET["images"])) {
  $titre = $_GET["titre"];
  $description = $_GET["description"];
  $images = $_GET["images"];
}

// Récupération du contenu du fichier JSON
$jsonContent = file_get_contents("../" . $description);
// Décodage du fichier JSON
$worksiteDescription = json_decode($jsonContent);

//Récupération des images du chantier
$worksiteImages = glob("../" . $images . '/*');

// Création des images dans l'article
$imageString = "";
foreach ($worksiteImages as $worksiteImage) {
  $imageString .= '<div class="swiper-slide"><img src="'.substr($worksiteImage, 3).'" alt="Image prise sur le chantier : '.$titre.'" style="width:715px;height:535px;object-fit: contain;"></div>';
}
// Envoi des articles de chantier dans la page
echo '<!-- worksite Details Section -->
    <section id="worksite-details" class="worksite-details section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="worksite-details-slider swiper init-swiper">
              <div class="swiper-wrapper align-items-center">' . $imageString . '</div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="worksite-description" data-aos="fade-up" data-aos-delay="300">
              <h4>Description</h4>
              <p>' . $worksiteDescription->description . '</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /worksite Details Section -->';
