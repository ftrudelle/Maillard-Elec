<?php
// Récupération des dossiers de chantiers
$worksites = glob("chantiers" . '/*', GLOB_ONLYDIR);

foreach ($worksites as $worksite) {
  // Récupération des éléments du dossier
  $worksiteSubfolder = glob($worksite . '/*');

  // Récupération du contenu du fichier JSON
  $jsonContent = file_get_contents($worksiteSubfolder[0]);
  // Décodage du fichier JSON
  $worksiteDescription = json_decode($jsonContent);

  //Récupération des images du chantier
  $worksiteImages = glob($worksiteSubfolder[1] . '/*');
  // Envoi des articles de chantier dans la page
  echo '<div class="col-lg-4 col-md-6 worksite-item isotope-item filter-' . strtolower($worksiteDescription->categorie) . '">
        <img src="' . $worksiteImages[0] . '" class="img-fluid" alt="">
        <div class="worksite-info">
          <h3>' . $worksiteDescription->titre . '</h3>
          <a class="details-link" href="views/worksites_details.php?titre='.$worksiteDescription->titre.'&amp;description=' . $worksiteSubfolder[0] . '&amp;images=' . $worksiteSubfolder[1] . '" data-toggle="modal" data-target="#worksiteDetailModal" title="Plus de détails"><i class="fa-solid fa-plus"></i></a>
        </div>
      </div>';
}
