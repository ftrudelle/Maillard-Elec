  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
  </div>
  <!-- End Section Title -->
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <div class="col-lg-5">
        <div class="info-wrap">
          <!-- Info Item -->
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3 style="margin-bottom:0;margin-top:8px;"><?php echo json_decode(file_get_contents("./data/info.json"))->contact->telephone; ?></h3>
            </div>
          </div>
          <!-- End Info Item -->
          <!-- Info Item -->
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3 style="margin-bottom:0;margin-top:8px;"><?php echo json_decode(file_get_contents("./data/info.json"))->contact->email; ?></h3>
            </div>
          </div>
          <!-- End Info Item -->
          <!-- Info Item -->
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Rayon d'action</h3>
              <p><?php echo json_decode(file_get_contents("./data/info.json"))->contact->actionArea; ?></p>
            </div>
          </div>
          <!-- End Info Item -->
          <!-- Embedded map Item -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21178.621668707015!2d0.07165841405110893!3d48.43104988712926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e20b7e7ae11fff%3A0x7d8429d95e5d1f4!2zQWxlbsOnb24!5e0!3m2!1sfr!2sfr!4v1730626368616!5m2!1sfr!2sfr" style="border:0;width:100%;height:270px;border: none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <!-- End Embedded map Item -->
        </div>
      </div>
      <div class="col-lg-7">
        <form method="post" class="php-email-form" id="php-email-form" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">
            <div class="col-md-6">
              <label for="name-field" class="pb-2">Votre nom</label>
              <input type="text" name="name" id="name-field" class="form-control" required placeholder="Nom" autocomplete="on">
            </div>
            <div class="col-md-6">
              <label for="email-field" class="pb-2">Votre email</label>
              <input type="email" class="form-control" name="email" id="email-field" required placeholder="Addresse email" autocomplete="on">
            </div>
            <div class="col-md-12">
              <label for="subject-field" class="pb-2">Sujet</label>
              <input type="text" class="form-control" name="subject" id="subject-field" required placeholder="Sujet">
            </div>
            <div class="col-md-12">
              <label for="message-field" class="pb-2">Message</label>
              <textarea class="form-control" name="message" rows="10" id="message-field" required placeholder="Votre texte"></textarea>
            </div>
            <div class="col-md-12 text-center">
              <div class="g-recaptcha" data-sitekey="<?php echo json_decode(file_get_contents("./data/config.json"))->reCaptchaAPIKey; ?>" style="display: inline-block;"></div>
            </div>
            <div class="col-md-12 text-center">
              <div class="error-message"></div>
              <div class="sent-message"></div>
              <button type="submit" id="phpEmailFormSubmitButton">Envoyer</button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Contact Form -->
    </div>
  </div>