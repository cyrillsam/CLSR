<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CLSR - UI Design</title>

  <!-- Favicon (Updated path) -->
  <link rel="icon" href="/img/logo/clsr_logo-browser.png" type="image/x-icon">
  <link rel="shortcut icon" href="/img/logo/clsr_logo-browser.png" type="image/x-icon">

  <!-- Google Fonts - Raleway -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800&display=swap" rel="stylesheet">

  <!-- External Stylesheets -->
  <link rel="stylesheet" href="/css_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

  <!-- Bootstrap Bundle with Popper.js (required for modals to work properly) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php include 'header.php'; ?>

<section class="hero-section" style="
  position: relative;
  min-height: 100vh;
  background: url('/img/logo/uidesign-page.jpg') center center / cover no-repeat;
  margin: 0;
  padding: 0;
  width: 100vw;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  color: white;
  text-align: left;
  ">

  <div style="
    margin-left: 10vw;
    max-width: 90vw;
  ">
    <h1 style="
      font-size: clamp(1.8rem, 5vw, 3rem);
      line-height: 1.3;
      font-weight: bold;
      margin: 0;
      text-shadow: 2px 2px 4px black;
    ">
      Design isn’t decoration. It’s direction.<br>
    </h1>
    <a href="#explore" style="
      display: inline-block;
      margin-top: 20px;
      padding: 12px 24px;
      background-color: rgb(80, 169, 228);
      color: white;
      text-decoration: none;
      font-size: 1rem;
      border-radius: 5px;
      transition: background-color 0.3s, color 0.3s;
    "
    onmouseover="this.style.backgroundColor='rgb(60, 140, 200)'; this.style.color='black';"
    onmouseout="this.style.backgroundColor='rgb(80, 169, 228)'; this.style.color='white';">
      Explore More
    </a>
  </div>

</section>

<!-- Scroll Target Section -->
<section id="explore" style="
  scroll-margin-top: 60px;
  font-size: 1.5rem; 
  margin-top: 5rem; 
  text-align: center; 
  max-width: 800px; 
  margin-left: auto; 
  margin-right: auto; 
  line-height: 1.8;
">
  <p>Welcome to my world of UI, where clean meets clever, where every pixel serves a purpose, and where design whispers, 'I’ve got you.</p>
</section>
<!-- Smooth Scroll CSS (add this to <head> or <style>) -->
<style>
  html {
    scroll-behavior: smooth;
  }
</style>

<section class="features-section">
  <div class="container" style="font-size: 2.0rem;"> 

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
  UI DESIGN
  </p>  
</section>

<!-- (Duplicate Back to Top Button, script, and style removed to prevent errors) -->

<section id="digital-art-gallery" style="position: relative;">

<!-- Navigation Arrows -->
<div id="prevBtn" onclick="prevPage()" style="position: absolute; top: 50%; left: 5px; transform: translateY(-50%); cursor: pointer;">
  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#333" viewBox="0 0 24 24">
    <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
  </svg>
</div>

<div id="nextBtn" onclick="nextPage()" style="position: absolute; top: 50%; right: 5px; transform: translateY(-50%); cursor: pointer;">
  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#333" viewBox="0 0 24 24">
    <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z"/>
  </svg>
</div>

<!-- Single Big Image Container -->
<div id="image-pages" style="text-align: center; margin: 60px 0;">
  <div class="image-page active">
    <img 
      src="/img/ui-design/Integra Layout.jpg" 
      alt="Main UI Design" 
      onclick="openFullscreen(this.src)" 
      style="max-width: 70vw; height: auto; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); cursor: pointer; transition: transform 0.3s ease;"
      onmouseover="this.style.transform='scale(1.05)'" 
      onmouseout="this.style.transform='scale(1)'"
    >
  </div>
  <div class="image-page">
    <img 
      src="/img/ui-design/Second Layout.jpg" 
      alt="Second UI Design" 
      onclick="openFullscreen(this.src)" 
      style="max-width: 70vw; height: auto; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); cursor: pointer; transition: transform 0.3s ease;"
      onmouseover="this.style.transform='scale(1.05)'" 
      onmouseout="this.style.transform='scale(1)'"
    >
  </div>
  <div class="image-page">
    <img 
      src="/img/ui-design/Third Layout.jpg" 
      alt="Third UI Design" 
      onclick="openFullscreen(this.src)" 
      style="max-width: 70vw; height: auto; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); cursor: pointer; transition: transform 0.3s ease;"
      onmouseover="this.style.transform='scale(1.05)'" 
      onmouseout="this.style.transform='scale(1)'"
    >
  </div>
</div>


<!-- Dots -->
<div id="dots" style="text-align: center; margin-top: 20px;">
  <span class="dot active" onclick="showPage(0)"></span>
  <span class="dot" onclick="showPage(1)"></span>
  <span class="dot" onclick="showPage(2)"></span>
</div>

<!-- Fullscreen Overlay -->
<div id="fullscreenOverlay">
    <div id="fullscreenContent">
        <div id="fullscreenScrollContainer">
            <img id="fullscreenImage" src="" alt="Fullscreen Preview" />
        </div>
        <div id="zoomControls">
            <button onclick="zoomImage(0.1)">+</button>
            <button onclick="zoomImage(-0.1)">−</button>
            <button onclick="resetZoom()">⟳</button> <!-- Reset button -->
        </div>
        <button id="backButton" onclick="closeFullscreen()">Back</button>
    </div>
</div>

<!-- The resetZoom function is now defined after the fullscreen script to avoid reference errors. -->

</section>

<!-- Styles -->
<style>
.image-page {
        display: none;
}

.image-page.active {
        display: block;
}

.image-grid {
        column-count: 3;
        column-gap: 20px;
        max-width: 1000px;
        margin: auto;
        padding: 20px;
}

.image-grid img {
        width: 100%;
        height: auto;
        margin-bottom: 20px;
        border-radius: 10px;
        display: block;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
        break-inside: avoid;
}


.image-grid img:hover {
        transform: scale(1.03);
}

/* Circle Dots */
.dot {
        height: 20px;
        width: 20px;
        margin: 0 5px;
        background-color: #bbb;
        border-radius: 30%;
        display: inline-block;
        transition: background-color 0.3s;
        cursor: pointer;
}

.dot.active {
        background-color: #444;
}

/* Arrow Buttons */
#prevBtn, #nextBtn {
        z-index: 10;
        padding: 10px;
        border-radius: 50%;
        transition: background 0.3s ease;
}

#prevBtn svg, #nextBtn svg {
        width: 40px;
        height: 40px;
}

@media (max-width: 768px) {
        .image-grid {
                column-count: 2;
        }
}

@media (max-width: 480px) {
        .image-grid {
                column-count: 1;
        }
}

#fullscreenOverlay {
    position: fixed;
    top: 0; left: 0;
    width: 100vw; height: 100vh;
    background: rgba(0,0,0,0.95);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 10000;
}

#fullscreenContent {
    position: relative;
    width: 100%;
    height: 100%;
}

#fullscreenScrollContainer {
    overflow: hidden;
    touch-action: none;
}

#fullscreenImage {
    max-width: 90%;
    max-height: 90%;
    width: auto;
    height: auto;
    user-select: none;
    transform-origin: center;
    transition: transform 0.2s ease;
    display: block;
    margin: auto;
}



#backButton {
        position: absolute;
        top: 20px;
        left: 20px;
        background: linear-gradient(135deg, #f0b7a3, #ff87ab); /* Gradient background */
        color: white;
        font-size: 16px;
        padding: 10px 16px;
        border: none;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
        z-index: 10000;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
        transition: background 0.3s ease, transform 0.2s ease;
}

#backButton:hover {
        background: linear-gradient(135deg, #ff87ab, #f0b7a3); /* Reversed gradient on hover */
        transform: scale(1.05);
}

/* Zoom Buttons */
#zoomControls {
    position: absolute;
    bottom: 30px;
    right: 30px;
    display: flex;
    gap: 10px;
    z-index: 10001;
}


#zoomControls button {
    width: 48px;
    height: 48px;
    border: none;
    border-radius: 50%;
    font-size: 24px;
    font-weight: bold;
    color: white;
    background: linear-gradient(135deg, #36d1dc, #5b86e5);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    cursor: pointer;
    transition: transform 0.2s ease;
}

#zoomControls button:hover {
        background: linear-gradient(135deg, #2ca8b9, #4365c4);
        transform: scale(1.1);
}

/* Responsive Design */
@media (max-width: 768px) {
    #fullscreenScrollContainer {
        padding: 20px;
    }

    #zoomControls {
        bottom: 20px;
        right: 20px;
    }
}


#fullscreenOverlay {
    overflow: auto;
}



</style>

<script>
let zoomLevel = 1;
let panX = 0, panY = 0;
let isDragging = false;
let startX = 0, startY = 0;
let initialPinchDistance = null;
let lastZoomLevel = zoomLevel;
let justOpenedFullscreen = false; // Prevent immediate zoom out after opening

function openFullscreen(src) {
    const overlay = document.getElementById('fullscreenOverlay');
    const image = document.getElementById('fullscreenImage');
    const container = document.getElementById('fullscreenScrollContainer');

    overlay.style.display = 'flex';
    image.src = src;

    image.onload = () => {
        const containerWidth = container.clientWidth;
        const containerHeight = container.clientHeight;
        const naturalWidth = image.naturalWidth;
        const naturalHeight = image.naturalHeight;

        const widthRatio = containerWidth / naturalWidth;
        const heightRatio = containerHeight / naturalHeight;

        zoomLevel = Math.min(widthRatio, heightRatio); // Fit to screen
        panX = 0;
        panY = 0;
        updateTransform();
        justOpenedFullscreen = true; // Set flag to prevent immediate zoom out
        setTimeout(() => { justOpenedFullscreen = false; }, 300); // Allow zoom after 300ms
    };
}

function closeFullscreen() {
    document.getElementById('fullscreenOverlay').style.display = 'none';
}

function zoomImage(delta, clientX = null, clientY = null) {
    if (justOpenedFullscreen && delta < 0) return; // Prevent immediate zoom out
    const image = document.getElementById('fullscreenImage');
    const rect = image.getBoundingClientRect();

    const prevZoom = zoomLevel;
    zoomLevel += delta;
    zoomLevel = Math.max(0.1, Math.min(zoomLevel, 5));

    const scaleChange = zoomLevel / prevZoom;

    // Focal point for zooming (mouse or center)
    const cx = clientX !== null ? clientX - rect.left : rect.width / 2;
    const cy = clientY !== null ? clientY - rect.top : rect.height / 2;

    panX = (panX - cx) * scaleChange + cx;
    panY = (panY - cy) * scaleChange + cy;

    updateTransform();
}

function updateTransform() {
    const image = document.getElementById('fullscreenImage');
    image.style.transform = `translate(${panX}px, ${panY}px) scale(${zoomLevel})`;
}

document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('fullscreenScrollContainer');
    if (!container) return;

    // Mouse drag
    container.addEventListener('mousedown', (e) => {
        isDragging = true;
        startX = e.clientX - panX;
        startY = e.clientY - panY;
    });

    window.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        panX = e.clientX - startX;
        panY = e.clientY - startY;
        updateTransform();
    });

    window.addEventListener('mouseup', () => {
        isDragging = false;
    });

    // Scroll zoom (with mouse pointer focal point)
    container.addEventListener('wheel', (e) => {
        e.preventDefault();
        if (justOpenedFullscreen && e.deltaY > 0) return; // Prevent immediate zoom out on wheel
        const delta = e.deltaY * -0.001;
        zoomImage(delta, e.clientX, e.clientY);
    });

    // Touch handling
    let lastTouch = null;

    container.addEventListener('touchstart', (e) => {
        if (e.touches.length === 1) {
            lastTouch = e.touches[0];
            initialPinchDistance = null;
        } else if (e.touches.length === 2) {
            const dx = e.touches[0].clientX - e.touches[1].clientX;
            const dy = e.touches[0].clientY - e.touches[1].clientY;
            initialPinchDistance = Math.hypot(dx, dy);
            lastZoomLevel = zoomLevel;
        }
    });

    container.addEventListener('touchmove', (e) => {
        if (e.touches.length === 1 && lastTouch) {
            const touch = e.touches[0];
            const dx = touch.clientX - lastTouch.clientX;
            const dy = touch.clientY - lastTouch.clientY;
            panX += dx;
            panY += dy;
            lastTouch = touch;
            updateTransform();
        } else if (e.touches.length === 2 && initialPinchDistance) {
            e.preventDefault();
            const dx = e.touches[0].clientX - e.touches[1].clientX;
            const dy = e.touches[0].clientY - e.touches[1].clientY;
            const currentDistance = Math.hypot(dx, dy);
            const scaleChange = currentDistance / initialPinchDistance;
            zoomLevel = Math.max(0.1, Math.min(lastZoomLevel * scaleChange, 5));
            updateTransform();
        }
    });

    // Close with ESC
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeFullscreen();
    });
});

// Add resetZoom function to reset zoom and pan to defaults
function resetZoom() {
    zoomLevel = 1;
    panX = 0;
    panY = 0;
    updateTransform();
}
</script>

<!-- Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  let currentImagePage = 0;
  const imagePages = document.querySelectorAll('.image-page');
  const imageDots = document.querySelectorAll('.dot');

  function showPage(index) {
    imagePages.forEach((page, i) => {
      page.classList.toggle('active', i === index);
      imageDots[i].classList.toggle('active', i === index);
    });
    currentImagePage = index;
  }

  function nextPage() {
    let next = currentImagePage + 1;
    if (next >= imagePages.length) next = 0;
    showPage(next);
  }

  function prevPage() {
    let prev = currentImagePage - 1;
    if (prev < 0) prev = imagePages.length - 1;
    showPage(prev);
  }

  // Expose functions to global scope for inline onclick handlers
  window.showPage = showPage;
  window.nextPage = nextPage;
  window.prevPage = prevPage;

  // Initialize first page
  showPage(0);
});
</script>


<p style="
        font-size: 1.5rem; 
        margin-top: 5rem; 
        margin-bottom: 5rem; 
        text-align: center; 
        max-width: 800px; 
        margin-left: auto; 
        margin-right: auto; 
        line-height: 1.8;">
Scroll down, click around, and discover the skills, style, and soul behind every project.  </p> 

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
    BEHIND THE DESIGNS
  </p>  

  

<!-- Back to Top Button -->
<button id="back-to-top" title="Go to top">↑</button>

<script>
  // Get the button
  const backToTopButton = document.getElementById("back-to-top");

  // When the user scrolls down 100px from the top of the document, show the button
  window.onscroll = function () {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      backToTopButton.style.display = "block";
    } else {
      backToTopButton.style.display = "none";
    }
  };

  // When the user clicks the button, scroll to the top of the document
  backToTopButton.onclick = function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  };
</script>

<style>
/* Style for Back to Top button */
#back-to-top {
  position: fixed;
  bottom: 30px; /* Adjusted distance from the bottom */
  right: 30px; /* Adjusted distance from the right */
  background: linear-gradient(135deg, #f0b7a3, #ff87ab); /* Gradient background */
  color: white;
  border: none;
  border-radius: 50%; /* Fully rounded button */
  width: 70px; /* Set width for a perfect circle */
  height: 70px; /* Set height equal to width */
  padding: 0; /* Remove padding to maintain circular shape */
  font-size: 20px; /* Adjusted icon size */
  cursor: pointer;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2); /* Subtle shadow */
  transition: all 0.3s ease; /* Smooth transition */
  z-index: 999; /* Ensures the button stays on top */
  display: none; /* Initially hidden */
  text-align: center;
  line-height: 50px; /* Center the icon vertically */
}

#back-to-top:hover {
  background: linear-gradient(135deg, #ff87ab, #f0b7a3); /* Reversed gradient on hover */
  transform: scale(1.1); /* Slightly enlarge the button on hover */
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3); /* Enhanced shadow on hover */
}

#back-to-top:focus {
  outline: none; /* Removes the outline when the button is clicked */
}

/* Icon Styling */
#back-to-top::before {
  content: '↑'; /* Set the icon */
  font-size: 30px; /* Increase the font size */
}

</style>

<?php 
if (file_exists('home/pricing-section.php')) {
    include 'home/pricing-section.php';
} else {
    echo '<p>Pricing section is currently unavailable.</p>';
}
?>


<!-- Footer Include -->
<?php include 'footer.php'; ?>
</body>
</html>

