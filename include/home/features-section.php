<section class="features-section">
  <div class="container" style="font-size: 2.0rem;">
    <p style="
      font-size: 1.5rem; 
      margin-top: 5rem; 
      margin-bottom: 5rem; 
      text-align: center; 
      max-width: 800px; 
      margin-left: auto; 
      margin-right: auto; 
      line-height: 1.8;">
      Welcome to the heart of my creative universe where code meets canvas, 
      and pixels tell stories. This space is designed not just to showcase my work, but to immerse you in it.
    </p>  

    <p style="
      font-size: 2.0rem; 
      margin-top: 5rem; 
      margin-bottom: 5rem; 
      text-align: center; 
      max-width: 800px; 
      margin-left: auto; 
      margin-right: auto; 
      line-height: 1.8;
      font-weight: bold;">
      FEATURES
    </p>  

    <div class="row text-center justify-content-center">
      <?php
      $features = [
        ['img/logo/artgallery.png', 'Art Gallery'],
        ['img/logo/uidesign.png', 'UI Design'],
        ['img/logo/photography.png', 'Photography'],
        ['img/logo/techtools.png', 'Tech Tools & Skills Section'],
        ['img/logo/animations.png', 'Animations'],
        ['img/logo/certificate.png', 'Certificates']
      ];

      foreach ($features as $feature) {
        echo '
        <div class="col-md-4 d-flex flex-column align-items-center mb-4">
          <div class="text-center" style="min-width: 120px;">
        <img src="' . $feature[0] . '" alt="' . $feature[1] . '" style="width: 150px; height: auto; margin-bottom: 10px; margin-top: 15px;">
        <p style="font-size: 1.1rem; margin: 0; text-align: center;">' . $feature[1] . '</p>
          </div>
        </div>';
      }
      ?>
    </div>
  </div>
</section>
