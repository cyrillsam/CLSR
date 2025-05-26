<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CLSR Website</title>

  <!-- Google Fonts - Raleway -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800&display=swap" rel="stylesheet">

  <!-- External Stylesheets -->
  <link rel="stylesheet" href="/css_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

  <!-- Favicon (Optional but Pro) -->
  <link rel="icon" type="image/png" href="img/favicon.png">

  <!-- Bootstrap Bundle with Popper.js (required for modals to work properly) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<!-- Header Section -->
<header>
  <div class="header-logo-menu sticker">
    <div class="container py-3">
      <div class="row align-items-center">

        <!-- Left Column: Logo + Mobile Toggle -->
        <div class="col-lg-2 col-12 d-flex justify-content-between align-items-center">
          <div class="logo">
            <!-- Logo (visible on all screens) -->
            <a class="clsr-logo" href="index.php">
            <img src="/img/logo/clsr_logo.png" alt="CLSR Logo" loading="lazy" class="logo-img" onerror="this.onerror=null; this.src='/include/default-logo.png';">
            </a>
          </div>

          <!-- Mobile Toggle Button (Only visible on small screens) -->
          <button id="mobileToggle" class="btn btn-outline-dark d-lg-none" style="font-size: 1.5rem;" data-bs-toggle="modal" data-bs-target="#mobileNavModal">
            <i class="fas fa-bars"></i>
          </button>
        </div>

        <!-- Nav Area -->
        <div id="explore" class="col-lg-8 col-12 d-flex justify-content-center align-items-center">
          <div class="mainmenu-area">
            <div class="mainmenu d-none d-lg-block">
              <nav>
                <ul id="nav" class="d-flex gap-3 align-items-center nav-list">
                  <li><a href="/index.php" class="desktop-nav-link">Dashboard</a></li>

                  <li class="desktop-category-dropdown position-relative">
                    <a href="#" class="px-3 desktop-nav-link desktop-category-toggle">
                      Category <i class="fas fa-chevron-down ms-0"></i>
                    </a>
                    <ul class="desktop-sub-menu">
                      <li><a href="/include/animation.php">Animation</a></li>
                      <li><a href="/include/digital-arts.php">Digital Arts</a></li>
                      <li><a href="/include/pencil-paper.php">Pencil and Paper</a></li>
                      <li><a href="/include/ui-design.php">UI Design</a></li>
                      <li><a href="/include/photography.php">Photography</a></li>
                      <li><a href="/include/certificate.php">Certificate</a></li>
                    </ul>
                  </li>

                  <li><a href="/include/about.php" class="px-3 desktop-nav-link">About Me</a></li>
                  <li><a href="/include/contact.php" class="px-3 desktop-nav-link">Contact Us</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</header>


<!-- Mobile Nav Modal -->
<div class="modal fade" id="mobileNavModal" tabindex="-1" aria-labelledby="mobileNavModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-top">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-between align-items-center position-relative">
        <h5 class="modal-title mx-auto fw-bold" id="mobileNavModalLabel">Menu</h5>
        <!-- Smaller close button -->
        <button type="button" class="btn-close custom-close-btn position-absolute end-0 me-3 p-0" data-bs-dismiss="modal" aria-label="Close" style="width: 15px; height: 15px;"></button>
      </div>

      <div class="modal-body">
        <ul class="list-unstyled">
          <li><a href="/index.php" class="primary-nav-link">Dashboard</a></li>

          <!-- Mobile Category Dropdown -->
          <li>
            <button class="primary-nav-link category-toggle w-100 d-flex justify-content-center align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#categoryCollapse" aria-expanded="false" aria-controls="categoryCollapse" style="padding-left: 20px; margin-left: 10px; margin-right: 30px;">
              <span class="flex-grow-1 text-center">Category</span>
              <i class="fas fa-chevron-down ms-2"></i>
            </button>
            <div class="collapse mt-2 bg-white rounded" id="categoryCollapse">
              <ul class="list-unstyled ps-3 mb-2">
                <li><a href="<?php echo '/include/animation.php'; ?>" class="sub-link">Animation</a></li>
                <li><a href="<?php echo '/include/digital-arts.php'; ?>" class="sub-link">Digital Arts</a></li>
                <li><a href="<?php echo '/include/pencil-paper.php'; ?>" class="sub-link">Pencil and Paper</a></li>
                <li><a href="<?php echo '/include/ui-design.php'; ?>" class="sub-link">UI Design</a></li>
                <li><a href="<?php echo '/include/photography.php'; ?>" class="sub-link">Photography</a></li>
                <li><a href="<?php echo '/include/certificate.php'; ?>" class="sub-link">Certificate</a></li>
              </ul>
            </div>
          </li>

          <li><a href="/about.php" class="primary-nav-link">About Me</a></li>
          <li><a href="/contact.php" class="primary-nav-link">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript -->
<script>
 
  document.addEventListener('DOMContentLoaded', function () {
  const mobileCategoryToggle = document.querySelector('.category-toggle');
  const mobileCategoryCollapse = document.getElementById('categoryCollapse');

  if (mobileCategoryToggle && mobileCategoryCollapse) {
    // Only update icon rotation – no need to manually toggle collapse
    mobileCategoryCollapse.addEventListener('show.bs.collapse', function () {
      mobileCategoryToggle.querySelector('i').classList.add('rotate-180');
    });

    mobileCategoryCollapse.addEventListener('hide.bs.collapse', function () {
      mobileCategoryToggle.querySelector('i').classList.remove('rotate-180');
    });
  }

  // Desktop menu logic still needed
  const categoryToggles = document.querySelectorAll('.desktop-category-toggle');
  categoryToggles.forEach(toggle => {
    toggle.addEventListener('click', function (event) {
      event.preventDefault();
      document.querySelectorAll('.desktop-sub-menu.show').forEach(menu => {
        if (menu !== this.nextElementSibling) {
          menu.classList.remove('show');
          menu.style.display = 'none';
        }
      });
      const subMenu = this.nextElementSibling;
      if (subMenu) {
        subMenu.classList.toggle('show');
        subMenu.style.display = subMenu.classList.contains('show') ? 'block' : 'none';
      }
    });
  });

  document.addEventListener('click', function (event) {
    if (!event.target.closest('.desktop-category-dropdown')) {
      document.querySelectorAll('.desktop-sub-menu.show').forEach(menu => {
        menu.classList.remove('show');
        menu.style.display = 'none';
      });
    }
  });
});

</script>

<!-- CSS -->
<style>
  .rotate-180 {
    transform: rotate(180deg);
    transition: transform 0.2s ease-in-out;
  }
</style>



</body>
</html>
