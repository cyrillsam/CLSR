<header>
  <div class="header-logo-menu sticker">
    <div class="container">
      <div class="row align-items-center"> <!-- 👈 THIS centers content vertically -->
        
        <!-- Logo Area -->
        <div class="col-lg-2 col d-flex justify-content-start align-items-center">
          <div class="logo" style="transform: scale(2.0);">
            <?php include "include/logo.php"; ?>
          </div>
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

<style>

.header-logo-menu.sticker {
  position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000; /* Keeps it above other content */
    background-color: #fff; /* Optional: set background color */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Optional: adds a subtle shadow */
  }
/* Clean base for nav links */
.nav-link-custom {
  display: block;
  padding: 10px 20px;
  color: #343a40; /* dark gray */
  text-decoration: none;
  border-radius: 0.5rem;
  font-weight: 500;
  font-size: 1rem; /* Add this line to set text size */
  transition: all 0.3s ease;
}

/* Hover entire container and apply polish */
#nav li:hover .nav-link-custom {
  background-color: #216091; /* Bootstrap's primary blue */
  color: white;
  box-shadow: 0 4px 10px rgba(13, 110, 253, 0.2); /* soft shadow */
}

/* Optional: active state look */
#nav li.active .nav-link-custom {
  background-color: #0d6efd;
  color: white;
  font-weight: 600;
}

/* Responsive tweaks if needed */
@media (max-width: 768px) {
  .nav-link-custom {
    padding: 8px 16px;
    font-size: 0.95rem;
  }
}
</style>