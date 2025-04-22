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
            <i class="fas fa-bars"></i> <!-- Hamburger Icon -->
          </button>
        </div>

        <!-- Nav Area -->
        <div class="col-lg-8 col-12 d-flex justify-content-center align-items-center">
          <div class="mainmenu-area">
            <div class="mainmenu d-none d-lg-block">
              <nav>
                <ul id="nav" class="d-flex gap-4 align-items-center" style="margin: 0; padding: 0; list-style: none;">
                  <?php include_once "include/nav-links.php"; ?>
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
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title w-100 text-center" id="mobileNavModalLabel">Menu</h5>
        <button type="button" class="btn-close custom-close-btn" data-bs-dismiss="modal" aria-label="Close">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-unstyled text-center">
          <li><a href="#" class="nav-link-custom">Dashboard</a></li>
          <li><a href="#" class="nav-link-custom">Category</a></li>
          <li><a href="#" class="nav-link-custom">About Me</a></li>
          <li><a href="#" class="nav-link-custom">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS (including Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<style>

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