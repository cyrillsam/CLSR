<!-- Add FontAwesome CDN link in the <head> section -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<style>
  .footer-widget {
    padding: 50px 0;
    background-color: #050505;
    color: #ffffff;
  }

  .footer-logo img {
    width: 100%;
    max-width: 300px;
    height: auto;
  }

  .quick-links a {
    color: #ffffff;
    text-decoration: none;
    font-size: 1rem;
    transition: color 0.3s ease;
  }

  .quick-links a:hover {
    color: #f1c40f;
  }

  .social-links {
    padding-left: 0;
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
  }

  .social-links li a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    font-size: 1.5rem;
    color: white;
    transition: transform 0.3s;
  }

  .social-links li a:hover {
    transform: scale(1.1);
  }

  .social-facebook { background-color: #1877F2; }
  .social-pinterest { background-color: #E60023; }
  .social-instagram { background-color: #C13584; }
  .social-tiktok { background-color: #000000; }

  @media (max-width: 767.98px) {
    .footer-logo {
      text-align: center;
      margin-bottom: 30px;
    }

    .quick-links {
      text-align: center;
    }

    .social-links {
      justify-content: center;
    }
  }

  .footer-bottom {
    margin-top: 30px;
    text-align: center;
    font-size: 0.9rem;
  }
</style>

<!-- Footer Widget Start -->
<div class="footer-widget">
  <div class="container mt-4">
    <div class="row">
      <!-- Logo -->
      <div class="col-md-6 footer-logo d-flex flex-column align-items-md-start align-items-center">
        <img src="img/logo/logo_footer.png" alt="Your Logo">
      </div>

      <!-- Quick Links + Social -->
      <div class="col-md-6">
        <div class="row">
          <div class="col-sm-6">
            <ul class="quick-links list-unstyled">
              <li class="mb-2"><a href="#">Dashboard</a></li>
              <li class="mb-2"><a href="#">Category</a></li>
            </ul>
          </div>
          <div class="col-sm-6">
            <ul class="quick-links list-unstyled">
              <li class="mb-2"><a href="#">About Me</a></li>
              <li class="mb-2"><a href="#">Contact Us</a></li>
            </ul>
          </div>
        </div>

        <!-- Social Links -->
        <ul class="social-links list-unstyled mt-4">
          <li><a href="#" class="social-facebook" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#" class="social-pinterest" aria-label="Pinterest"><i class="fab fa-pinterest-p"></i></a></li>
          <li><a href="#" class="social-instagram" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#" class="social-tiktok" aria-label="TikTok"><i class="fab fa-tiktok"></i></a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="container footer-bottom">
    <p class="m-0">&copy; CLSR 2025. All Rights Reserved.</p>
  </div>
</div>
<!-- End of Footer Widget -->
