<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo json_decode(file_get_contents("./data/info.json"))->info->entrepriseName; ?></title>
    <meta name="description" content="<?php echo json_decode(file_get_contents("./data/info.json"))->info->descriptionTag; ?>">
    <meta name="keywords" content="Maillard Electricité, Electricien, Alençon (61000), Electricité">
    <meta name="geo.region" content="FR-61" />
    <meta name="geo.placename" content="Alen&ccedil;on" />
    <meta name="geo.position" content="48.430384;0.090201" />
    <meta name="ICBM" content="48.430384, 0.090201" />
    <meta name="google" content="nositelinkssearchbox">



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
</head>

<body>
    <?php include('views/header.php'); ?>
    <main>
        <div class="section-container">
            <div class="container section-title" data-aos="fade-up">
                <h2>Mentions légales du site Maillard-Electicité</h2>
                <h3>En vigueur au 11/11/2024</h3>
            </div>
            <div class="container" data-aos="fade-up">
                <p>Conformément aux dispositions de la loi n°2004-575 du 21 juin 2004 pour la Confiance en l’économie
                    numérique, il est porté à la connaissance des utilisateurs et visiteurs, ci-après l' "Utilisateur", du site
                    www.maillard-electricite.fr , ci-après le "Site", les présentes mentions légales.</p>
                <p>La connexion et la navigation sur le Site par l’Utilisateur implique acceptation intégrale et sans
                    réserve des présentes mentions légales.</p>
                <p>Ces dernières sont accessibles sur le Site à la rubrique "Mentions légales".</p>
            </div>
        </div>
        <div class="section-container">
            <div class="container section-title" data-aos="fade-up">
                <h2>Edition du site</h2>
            </div>
            <div class="container" data-aos="fade-up">
                <p>L'édition du Site est assurée par la société MAILLARD ELECTRICITE, SARL au capital de 5000
                    euros, immatriculée au Registre du Commerce et des Sociétés de Alençon sous le numéro
                    917904690 dont le siège social est situé au 1 Imp. de la Violetterie, 61250 Pacé,</p>
                <ul>
                    <li><strong>Numéro de téléphone :</strong> 0637295667 </li>
                    <li><strong>Adresse e-mail :</strong> maillardelec@gmail.com</li>
                    <li><strong>N° de TVA intracommunautaire :</strong> FR94917904690</li>
                    <li><strong>Directeur de la publication :</strong> Maillard Maxime</li>
                </ul>
                <p>ci-après l'"Editeur".</p>
            </div>
        </div>
        <div class="section-container">
            <div class="container section-title" data-aos="fade-up">
                <h2>Hébergeur</h2>
            </div>
            <div class="container" data-aos="fade-up">
                <p>L'hébergeur du Site est la société O2Switch, dont le siège social est situé au 222 Boulevard Gustave
                    Flaubert 63000 Clermont-Ferrand.</p>
            </div>
        </div>
        <div class="section-container">
            <div class="container section-title" data-aos="fade-up">
                <h2>Accès au site</h2>
            </div>
            <div class="container" data-aos="fade-up">
                <p>Le Site est normalement accessible, à tout moment, à l'Utilisateur. Toutefois, l'Editeur pourra, à tout
                    moment, suspendre, limiter ou interrompre le Site afin de procéder, notamment, à des mises à jour ou
                    des modifications de son contenu. L'Editeur ne pourra en aucun cas être tenu responsable des
                    conséquences éventuelles de cette indisponibilité sur les activités de l'Utilisateur.
                </p>
                <p>Toute utilisation, reproduction, diffusion, commercialisation, modification de toute ou partie du Site,
                    sans autorisation expresse de l’Editeur est prohibée et pourra entraîner des actions et poursuites
                    judiciaires telles que prévues par la règlementation en vigueur.</p>
            </div>
        </div>
        <div class="section-container">
            <div class="container" data-aos="fade-up">
                <p>Rédigé sur http://legalplace.fr
                </p>
            </div>
        </div>
    </main>

    <?php include('views/footer.php'); ?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Preloader -->
    <!-- <div id="preloader"></div> -->

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
</body>

</html>