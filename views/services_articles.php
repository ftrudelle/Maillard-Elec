<?php
// Récupération des dossiers de chantiers
$services = glob("services/*");
$serviceArticles = array();

// Création des services
foreach ($services as $service) {
  //Ignore description_form.json
  if($service == "services/service_exemple.json"){
    continue;
  }
  
  // Récupération du contenu du fichier JSON et décodage du fichier JSON
  $serviceInfos = json_decode(file_get_contents($service));

  $index = getFreeIndexInArrayByIndex($serviceInfos->order, $serviceArticles);
  $serviceItem = '<!-- Service Item -->
  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
    <div class="service-item position-relative">
      <div class="icon">
        <i class="fa-solid '.$serviceInfos->icon.'" style="color:'.$serviceInfos->icon_color.';"></i>
      </div>
      <h3>'.$serviceInfos->titre.'</h3>
      <div class="service-description">
        <p>'.$serviceInfos->description.'</p>
      </div>
    </div>
  </div>
  <!-- End Service Item -->';

  $serviceArticles[$index] = $serviceItem;
}

ksort($serviceArticles);
// Envoi des articles de chantier dans la page
foreach($serviceArticles as $service){
  echo $service;
}

//Function that increment index if it's alreay taken in an array and return it if it's not
function getFreeIndexInArrayByIndex($index, $array){
  if(!array_key_exists($index, $array)){
    return $index;
  }
  else{
    return getFreeIndexInArrayByIndex($index + 1, $array);
  }
}
