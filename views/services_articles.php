<?php
// Récupération des dossiers de chantiers
$services = glob("services/*");

foreach ($services as $service) {
  //Ignore description_form.json
  if($service == "services/description_form.json"){
    continue;
  }
  // Récupération du contenu du fichier JSON
  $json_content = file_get_contents($service);
  // Décodage du fichier JSON
  $service_infos = json_decode($json_content);

  // Envoi des articles de chantier dans la page
  echo '<!-- Service Item -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fa-solid '.$service_infos->icon.'" style="color:'.$service_infos->icon_color.';"></i>
          </div>
          <h3>'.$service_infos->titre.'</h3>
          <p>'.$service_infos->description.'</p>
        </div>
      </div>
      <!-- End Service Item -->';
}
