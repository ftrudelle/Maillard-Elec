<footer id="footer" class="footer light-background">
    <div class="container">
        <div class="copyright text-center ">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Maillard Electricité</strong> <span>Tous droits réservés<br></span>
            </p>
        </div>
        <div class="social-links d-flex justify-content-center">
            <!-- <a href="" class="twitter" target="_blank"><i class="bi bi-twitter-x"></i></a> -->
            <a href="<?php echo json_decode(file_get_contents("./data/info.json"))->facebook; ?>" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
            <!-- <a href="" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a> -->
            <!-- <a href="" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a> -->
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer>