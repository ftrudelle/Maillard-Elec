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
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Rayon d'action</h3>
              <p><?php echo json_decode(file_get_contents("./data/info.json"))->contact->actionArea; ?></p>
            </div>
          </div>
          <!-- End Info Item -->
          <!-- Info Item -->
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>M'appeler</h3>
              <p><?php echo json_decode(file_get_contents("./data/info.json"))->contact->telephone; ?></p>
            </div>
          </div>
          <!-- End Info Item -->
          <!-- Info Item -->
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>M'envoyer un email</h3>
              <p><?php echo json_decode(file_get_contents("./data/info.json"))->contact->email; ?></p>
            </div>
          </div>
          <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Alençon&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <!-- End Info Item -->
        </div>
      </div>
      <div class="col-lg-7">
        <form method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">
            <div class="col-md-6">
              <label for="name-field" class="pb-2">Votre nom</label>
              <input type="text" name="name" id="name-field" class="form-control" required placeholder="Nom">
            </div>
            <div class="col-md-6">
              <label for="email-field" class="pb-2">Votre email</label>
              <input type="email" class="form-control" name="email" id="email-field" required placeholder="Addresse email">
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