<?php
// Récupération des dossiers de chantiers
$worksites = glob("chantiers" . '/*', GLOB_ONLYDIR);

foreach ($worksites as $worksite) {
  // Récupération du nom du dossier
  $worksite_name = explode("_", basename($worksite))[0];
  // Récupération de la date du dossier
  $worksite_date = explode("_", basename($worksite))[1];

  // Récupération des éléments du dossier
  $worksite_subfolder = glob($worksite . '/*');

  // Récupération du contenu du fichier JSON
  $json_content = file_get_contents($worksite_subfolder[0]);
  // Décodage du fichier JSON
  $worksite_description = json_decode($json_content);

  //Récupération des images du chantier
  $worksite_images = glob($worksite_subfolder[1] . '/*');
  // Envoi des articles de chantier dans la page
  echo '<div class="col-lg-4 col-md-6 worksite-item isotope-item filter-' . strtolower($worksite_description->categorie) . '">
        <img src="' . $worksite_images[0] . '" class="img-fluid" alt="">
        <div class="worksite-info">
          <h4>' . $worksite_description->titre . '</h4>
          <a class="details-link" href="views/worksites_details.php?description=' . $worksite_subfolder[0] . '&images=' . $worksite_subfolder[1] . '" data-toggle="modal" data-target="#worksiteDetailModal" title="Plus de détails"><i class="fa-solid fa-plus"></i></a>
        </div>
      </div>';
}
