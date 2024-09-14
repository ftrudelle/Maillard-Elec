  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Chantiers</h2>
    <p>Voici la liste des chantiers réalisés :</p>
  </div>
  <!-- End Section Title -->
  <div class="container">
    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
      <!-- WorkSites Filters -->
      <ul class="worksites-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">Tous</li>
        <li data-filter=".filter-habitation">Habitation</li>
        <li data-filter=".filter-tertiaire">Tertiaire</li>
      </ul>
      <!-- End WorkSites Filters -->
      <!-- WorkSites Items List -->
      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
        <?php include('views/chantiers_articles.php'); ?>
      </div>
      <!-- End WorkSites Items List -->
    </div>
  </div>