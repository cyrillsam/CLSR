<!-- Header Section -->
<header>
  
  <div class="header-logo-menu sticker">
    <div class="container py-4">
      <div class="row align-items-center">

        <!-- Left Column: Logo + Mobile Toggle -->
        <div class="col-lg-2 col-12 d-flex justify-content-between align-items-center">
          <div class="logo">
            <?php include "include/logo.php"; ?>
          </div>

          <!-- Mobile Toggle Button (hamburger) -->
          <button id="mobileToggle" class="btn btn-outline-dark d-lg-none" style="font-size: 1.5rem;" data-bs-toggle="modal" data-bs-target="#mobileNavModal">
            <i class="fas fa-bars"></i>
          </button>
        </div>

        <!-- Nav Area -->
        <div class="col-lg-8 col-12 d-flex justify-content-center align-items-center">
          <div class="mainmenu-area">
            <div class="mainmenu d-none d-lg-block">
              <nav>
                <ul id="nav" class="d-flex gap-4 align-items-center" style="margin: 0; padding: 0; list-style: none;">
                  <li>
                    <span class="px-3 nav-link-custom">Dashboard</span>
                  </li>

                  <li class="category-dropdown" style="position: relative;">
                    <span class="px-3 nav-link-custom category-toggle">
                      Category
                      <i class="fas fa-chevron-down ms-0"></i>
                    </span>
                    <ul class="sub-menu">
                      <li><a href="/include/category/animation.php"><span>Animation</span></a></li>
                      <li><span>Digital Arts</span></li>
                      <li><span>Pencil and Paper</span></li>
                      <li><span>UI Design</span></li>
                      <li><span>Photography</span></li>
                      <li><span>Certificate</span></li>
                    </ul>
                  </li>

                  <li>
                    <span class="px-3 nav-link-custom">About Me</span>
                  </li>

                  <li>
                    <span class="px-3 nav-link-custom">Contact Us</span>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const toggle = document.querySelector('.category-toggle');
      const submenu = document.querySelector('.category-dropdown .sub-menu');

      toggle.addEventListener('click', function (e) {
        e.stopPropagation(); // Prevent body click
        submenu.classList.toggle('show');
      });

      // Optional: Close when clicking outside
      document.addEventListener('click', function () {
        submenu.classList.remove('show');
      });

      submenu.addEventListener('click', function (e) {
        e.stopPropagation(); // Prevent click inside submenu from closing it
      });
    });
  </script>
</header>

<style>
    .nav-link-custom {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 18px;
      font-weight: 500;
      color: #333;
      transition: all 0.3s ease;
      padding: 10px 16px;
      cursor: pointer;
      position: relative;
    }

    .nav-link-custom:hover {
      color: #5693c9;
    }

    .sub-menu {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      min-width: 320px;
      background: #fff;
      padding: 2rem 1.5rem;
      border-radius: 12px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
      z-index: 999;
      opacity: 0;
      transform: translateY(10px);
      transition: all 0.3s ease;
    }

    .sub-menu.show {
      display: block;
      opacity: 1;
      transform: translateY(0);
    }

    .sub-menu li {
      list-style: none;
      padding: 10px 14px;
      margin-bottom: 10px;
      border-radius: 8px;
      transition: background 0.2s ease, transform 0.2s ease;
    }

    .sub-menu li:last-child {
      margin-bottom: 0;
    }

    .sub-menu li:hover {
      background: linear-gradient(135deg, #5693c9, #3b6ea5);
      transform: translateX(5px);
      cursor: pointer;
    }

    .sub-menu li span,
    .sub-menu li a {
      display: block;
      font-size: 17px;
      font-weight: 500;
      color: #333;
      text-decoration: none;
    }

    .sub-menu li:hover span,
    .sub-menu li:hover a {
      color: #fff;
    }
  </style>




<!-- Mobile Nav Modal -->
<div class="modal fade" id="mobileNavModal" tabindex="-1" aria-labelledby="mobileNavModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-top">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-between align-items-center">
        <h5 class="modal-title mx-auto" id="mobileNavModalLabel">Menu</h5>
        <button type="button" class="btn-close custom-close-btn" data-bs-dismiss="modal" aria-label="Close">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-unstyled">
          <li><a href="/include/category/animation.php" class="nav-link-custom">Dashboard</a></li>
          <li>
  <button class="nav-link-custom category-toggle w-100 text-center d-flex justify-content-center align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#categoryCollapse" aria-expanded="false" aria-controls="categoryCollapse">
    Category
    <i class="fas fa-chevron-down ms-2"></i>
  </button>
  <div class="collapse mt-2 bg-white rounded" id="categoryCollapse">
    <ul class="list-unstyled ps-3 mb-2">
      <li><a href="animation.php" class="nav-link-custom sub-link">Animation</a></li>
      <li><a href="digital-arts.php" class="nav-link-custom sub-link">Digital Arts</a></li>
      <li><a href="pencil-paper.php" class="nav-link-custom sub-link">Pencil and Paper</a></li>
      <li><a href="ui-design.php" class="nav-link-custom sub-link">UI Design</a></li>
      <li><a href="photography.php" class="nav-link-custom sub-link">Photography</a></li>
      <li><a href="certificate.php" class="nav-link-custom sub-link">Certificate</a></li>
    </ul>
  </div>
</li>


          <li><a href="#" class="nav-link-custom">About Me</a></li>
          <li><a href="#" class="nav-link-custom">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<style>
  .modal-dialog-top {
    margin: 1rem auto; /* Adjust the margin to position the modal closer to the top */
  }
</style>


<!-- Bootstrap JS (including Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<style>
/* Remove border & keep white background */
#categoryCollapse {
  border: none;
  background-color: #fff;
}

/* Override nav-link styles for sub-links */
.sub-link {
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  background-color: transparent;
  border: none;
}

/* Hover effect for sub-items */
.sub-link:hover {
  background-color: #f0f0f0; /* light hover bg */
  color: #000; /* black text on hover */
}

/* Style for Category toggle */
.category-toggle {
  background-color: transparent;
  border: none;
  font-weight: 600;
}

/* Toggle arrow rotation on expand */
.category-toggle[aria-expanded="true"] .fas.fa-chevron-down {
  transform: rotate(180deg);
  transition: transform 0.3s ease;
}

/* Modal content background override */
.modal-content {
  background-color:rgb(252, 252, 252); /* soft off-white/grey-blue tone */
  border: none;
}

/* Optional: make Category section even lighter for contrast */
#categoryCollapse {
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.43); /* light shadow to float it */
}

/* Optional: Darker overlay to dim background */
.modal-backdrop.show {
  background-color: rgba(0, 0, 0, 0.6); /* a bit darker than before */
}

.modal-content {
  animation: modalFade 0.4s ease-in-out;
}

@keyframes modalFade {
  0% {
    opacity: 0;
    transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

  .nav-link-custom[aria-expanded="true"] .fas.fa-chevron-down {
    transform: rotate(180deg);
    transition: transform 0.3s ease;
  }
/* Enhanced close button style */
.custom-close-btn {
  background-color: transparent;
  border: none;
  font-size: 1.5rem;
  color: #333; /* Dark color for better visibility */
  opacity: 0.7;
  transition: opacity 0.3s ease, transform 0.2s ease;
}

.custom-close-btn:hover,
.custom-close-btn:focus {
  opacity: 1;
  transform: scale(1.2); /* Slight zoom effect on hover */
  color: #dc3545; /* Red color for a more noticeable button */
}

.custom-close-btn svg {
  pointer-events: none; /* Prevent interaction with the SVG itself */
}

/* Mobile Nav Modal Background */
.modal-backdrop.show {
  background-color: rgba(0, 0, 0, 0.5); /* Slight darkened backdrop for better contrast */
}

/* Modal Styling */
.modal-content {
  border-radius: 0.5rem;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Soft shadow around the modal */
}

/* Modal Header Text Styling */
.modal-header h5 {
  font-weight: 600;
  color: #343a40; /* Dark color for header text */
  font-size: 1.25rem;
  letter-spacing: 0.5px;
}

/* Mobile Nav List Styling */
.modal-body ul {
  padding: 0;
}

.nav-link-custom {
  display: block;
  padding: 14px;
  color: #343a40;
  text-decoration: none;
  font-weight: 500;
  font-size: 1.1rem;
  border-radius: 0.5rem;
  transition: all 0.3s ease;
}

.nav-link-custom:hover {
  background-color: #216091;
  color: white;
}

/* Responsive Modal Styling */
@media (max-width: 768px) {
  .modal-dialog {
    max-width: 80%; /* Adjust the modal width on small screens */
  }
}

/* Sticky header */
.header-logo-menu.sticker {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000;
  background-color: #fff;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Logo scaling */
.logo img {
  width: 100%;
  max-width: 180px;
  height: auto;
  transition: all 0.3s ease-in-out;
}
.logo {
  transform: scale(2.5); /* Original scale for desktop */
  transition: transform 0.3s ease-in-out;
}
.logo {
  pointer-events: none; /* Makes sure logo doesn't intercept clicks */
}

/* Mobile-specific logo scaling */
@media (max-width: 1000px) {
  .logo {
    transform: scale(2.0); /* Larger logo on smaller screens */
  }
}

@media (max-width: 768px) {
  .logo {
    transform: scale(2.5); /* Even bigger logo on smaller screens */
  }
}

/* Nav link styling */
.nav-link-custom {
  display: block;
  padding: clamp(8px, 1vw, 14px) clamp(12px, 2vw, 24px);
  color: #343a40;
  text-decoration: none;
  border-radius: 0.5rem;
  font-weight: 500;
  font-size: clamp(0.9rem, 1vw + 0.4rem, 1.1rem);
  transition: all 0.3s ease;
}

/* Hover effect */
#nav li:hover .nav-link-custom {
  background-color: #216091;
  color: white;
  box-shadow: 0 4px 10px rgba(13, 110, 253, 0.2);
}

/* Mobile layout tweaks */
@media (max-width: 768px) {
  .header-logo-menu .row {
    flex-direction: column;
    text-align: center;
    gap: 10px;
  }

  .header-logo-menu .col-lg-2,
  .header-logo-menu .col-lg-8 {
    width: 100%;
    justify-content: center !important;
  }

  .mainmenu {
    padding-top: 10px;
  }

  #nav {
    flex-direction: column;
    gap: 10px;
  }

  #nav li {
    width: 100%;
    text-align: center;
  }
}

/* Adjust for extra header height */
body {
  padding-top: 120px;
}

</style>