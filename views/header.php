<header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
            <img src="assets/img/logo.png" alt="">
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <?php
                if (basename($_SERVER['PHP_SELF']) == "index.php") {
                    echo '<li><a href="#services">Services</a></li>
                <li><a href="#worksites">Réalisations</a></li>
                <li><a href="#about">A propos</a></li>
                <li><a href="#contact">Contact</a></li>';
                } else {
                    echo '<li><a href="./#services">Services</a></li>
                <li><a href="./#worksites">Chantiers</a></li>
                <li><a href="./#about">A propos</a></li>
                <li><a href="./#contact">Contact</a></li>';
                }
                ?>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <div class="header-social-links">
            <a href="<?php echo json_decode(file_get_contents("./data/info.json"))->google; ?>" class="google" target="_blank"><i class="bi bi-google"></i></a>
            <a href="<?php echo json_decode(file_get_contents("./data/info.json"))->facebook; ?>" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        </div>
    </div>
</header>