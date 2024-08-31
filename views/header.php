<header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!--<h1 class="sitename">Kelly</h1>-->
            <?php if (basename($_SERVER['SCRIPT_FILENAME']) == "index.php") {
                echo '<img src="assets/img/logo.png" alt="">';
            } else {
                echo '<img src="../assets/img/logo.png" alt="">';
            } ?>
        </a>
        <nav id="navmenu" class="navmenu">
            <?php if (basename($_SERVER['SCRIPT_FILENAME']) == "index.php") {
                echo '<ul>
                <li><a href="#services">Services</a></li>
                <li><a href="#worksite">Chantiers</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>';
            } else {
                echo '<ul>
                <li><a href="../index.php#services">Services</a></li>
                <li><a href="../index.php#worksite">Chantiers</a></li>
                <li><a href="../index.php#contact">Contact</a></li>
            </ul>';
            } ?>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <div class="header-social-links">
            <!-- <a href="#" class="twitter" target="_blank"><i class="bi bi-twitter-x"></i></a> -->
            <a href="#" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
            <!-- <a href="#" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a> -->
            <!-- <a href="#" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a> -->
        </div>
    </div>
</header>