<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CLSR - Digital Art</title>

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
<!-- animation.php -->
<?php include 'header.php'; ?>


<section class="hero-section" style="
  position: relative;
  min-height: 100vh;
  background: url('/img/logo/digitalart.jpg') center center / cover no-repeat;
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
      Sketch. Click. Create.<br>
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
  max-width: 840px; 
  margin-left: auto; 
  margin-right: auto; 
  line-height: 1.8;
">
  <p>Welcome to a vivid canvas of imagination on my Digital Art page!
My digital creations aren't just visuals they're immersive experiences crafted to ignite emotion, spark curiosity, and tell stories beyond the frame.
Get ready to explore the fusion of tech and artistry where every piece is more than meets the eye.</p>
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
  DIGITAL ARTS
  </p>  

</section>

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

<!-- Image Pages -->
<div id="image-pages" style="text-align: center;">

  <!-- Page 1 -->
  <div class="image-page active">
    <div class="image-grid">
    <img src="/img/logo/image 1.jpg" alt="Art 4" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 2.jpg" alt="Art 4" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 3.jpg" alt="Art 4" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 5.jpg" alt="Art 4" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 6.jpg" alt="Art 4" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 7.jpg" alt="Art 4" onclick="openFullscreen(this.src)">
    </div>
  </div>

  <!-- Page 2 -->
  <div class="image-page">
    <div class="image-grid">
    <img src="/img/logo/image 4.jpg" alt="Art 4" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 8.jpg" alt="Art 8" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 9.jpg" alt="Art 9" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 10.jpg" alt="Art 10" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 11.jpg" alt="Art 11" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 12.jpg" alt="Art 12" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 13.jpg" alt="Art 13" onclick="openFullscreen(this.src)">
    </div>
  </div>

  <!-- Page 3 -->
  <div class="image-page">
    <div class="image-grid">
    <img src="/img/logo/image 14.jpg" alt="Art 14" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 17.jpg" alt="Art 17" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 18.jpg" alt="Art 18" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 19.jpg" alt="Art 19" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 20.jpg" alt="Art 20" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 22.jpg" alt="Art 22" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 23.jpg" alt="Art 23" onclick="openFullscreen(this.src)">
    </div>
  </div>

  <!-- Page 4 -->
    <div class="image-page">
    <div class="image-grid">
    <img src="/img/logo/image 21.jpg" alt="Art 21" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 16.jpg" alt="Art 16" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 24.jpg" alt="Art 24" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 25.jpg" alt="Art 25" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 26.jpg" alt="Art 26" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 27.jpg" alt="Art 27" onclick="openFullscreen(this.src)">
    </div>
  </div>

    <!-- Page 5 -->
    <div class="image-page">
    <div class="image-grid">
    <img src="/img/logo/image 15.jpg" alt="Art 15" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 28.jpg" alt="Art 16" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 35.jpg" alt="Art 35" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 50.jpg" alt="Art 50" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 29.jpg" alt="Art 17" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 30.jpg" alt="Art 18" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 31.jpg" alt="Art 19" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 32.jpg" alt="Art 20" onclick="openFullscreen(this.src)">
    </div>
  </div>

      <!-- Page 6 -->
      <div class="image-page">
    <div class="image-grid">
    <img src="/img/logo/image 33.jpg" alt="Art 15" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 34.jpg" alt="Art 16" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 37.jpg" alt="Art 50" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 38.jpg" alt="Art 17" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 40.jpg" alt="Art 19" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 41.jpg" alt="Art 20" onclick="openFullscreen(this.src)">
    </div>
  </div>

        <!-- Page 7 -->
        <div class="image-page">
    <div class="image-grid">
    <img src="/img/logo/image 36.jpg" alt="Art 15" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 42.jpg" alt="Art 16" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 43.jpg" alt="Art 50" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 44.jpg" alt="Art 17" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 46.jpg" alt="Art 19" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 47.jpg" alt="Art 20" onclick="openFullscreen(this.src)">
    </div>
  </div>

  
        <!-- Page 8 -->
        <div class="image-page">
    <div class="image-grid">
    <img src="/img/logo/image 48.jpg" alt="Art 15" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 49.jpg" alt="Art 16" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 51.jpg" alt="Art 17" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 52.jpg" alt="Art 18" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 53.jpg" alt="Art 19" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 54.jpg" alt="Art 20" onclick="openFullscreen(this.src)">
    </div>
  </div>

          <!-- Page 9 -->
          <div class="image-page">
    <div class="image-grid">
    <img src="/img/logo/image 39.jpg" alt="Art 15" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 45.jpg" alt="Art 16" onclick="openFullscreen(this.src)">
    <img src="/img/logo/image 55.jpg" alt="Art 18" onclick="openFullscreen(this.src)">
    </div>
  </div>

</div>

<!-- Dots -->
<div id="dots" style="text-align: center; margin-top: 20px;">
  <span class="dot active" onclick="showPage(0)"></span>
  <span class="dot" onclick="showPage(1)"></span>
  <span class="dot" onclick="showPage(2)"></span>
  <span class="dot" onclick="showPage(3)"></span>
  <span class="dot" onclick="showPage(4)"></span>
  <span class="dot" onclick="showPage(5)"></span>
  <span class="dot" onclick="showPage(6)"></span>
  <span class="dot" onclick="showPage(7)"></span>
  <span class="dot" onclick="showPage(8)"></span>
</div>

<!-- Fullscreen Overlay -->
<div id="fullscreenOverlay" aria-hidden="true">
  <div id="fullscreenContent">
    <!-- Back Button -->
    <button id="backButton" onclick="closeFullscreen()" aria-label="Go Back">Back</button>

    <!-- Zoom Controls -->
    <div id="zoomControls">
      <button onclick="zoomImage(0.1)" aria-label="Zoom In">＋</button>
      <button onclick="zoomImage(-0.1)" aria-label="Zoom Out">−</button>
    </div>

    <!-- Scrollable Image Wrapper -->
    <div id="fullscreenScrollContainer">
      <img id="fullscreenImage" src="" alt="Fullscreen Art Preview">
    </div>
  </div>
</div>


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
    padding: 20px 60px; /* Add horizontal padding */
    box-sizing: border-box;
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

/* Fullscreen Overlay Styles */
#fullscreenOverlay {
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background-color: rgb(34, 34, 34);
  display: none;
  justify-content: center;
  align-items: center;
  z-index: 9999;
  overflow: hidden;
}

#fullscreenContent {
  position: relative;
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
}

#fullscreenScrollContainer {
  flex: 1;
  overflow: auto;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px;
}

#fullscreenImage {
  max-width: 90vw;
  max-height: 90vh;
  width: auto;
  height: auto;
  transform-origin: center center;
  transition: transform 0.2s ease;
  cursor: grab;
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

/* Zoom Controls */
#zoomControls {
    position: absolute;
    bottom: 30px;
    right: 30px;
    z-index: 10001;
    display: flex;
    gap: 12px;
}


#zoomControls button {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #36d1dc, #5b86e5);
    border: none;
    border-radius: 50%;
    font-size: 24px;
    font-weight: bold;
    color: white;
    cursor: pointer;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    transition: background 0.3s ease, transform 0.2s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    line-height: 1;
    padding: 0;
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

  function openFullscreen(src) {
    const overlay = document.getElementById('fullscreenOverlay');
    const image = document.getElementById('fullscreenImage');

    image.src = src;
    overlay.style.display = 'flex';
    zoomLevel = 1;
    image.style.transform = `scale(${zoomLevel})`;
  }

  function closeFullscreen() {
    document.getElementById('fullscreenOverlay').style.display = 'none';
  }

  function zoomImage(delta) {
    const image = document.getElementById('fullscreenImage');
    zoomLevel += delta;
    zoomLevel = Math.min(Math.max(zoomLevel, 0.5), 5);
    image.style.transform = `scale(${zoomLevel})`;
  }

  document.addEventListener('DOMContentLoaded', () => {
    const image = document.getElementById('fullscreenImage');

    // Mouse wheel zoom
    image.addEventListener('wheel', (e) => {
      e.preventDefault();
      zoomLevel += e.deltaY * -0.001;
      zoomLevel = Math.min(Math.max(zoomLevel, 0.5), 5);
      image.style.transform = `scale(${zoomLevel})`;
    });

    // Click resets zoom
    image.addEventListener('click', () => {
      if (zoomLevel !== 1) {
        zoomLevel = 1;
        image.style.transform = 'scale(1)';
      }
    });

    // ESC to close
    document.addEventListener('keydown', (e) => {
      if (e.key === "Escape") {
        closeFullscreen();
      }
    });
  });
</script>





<!-- Script -->
<script>
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
    BEHIND THE STROKES
  </p>  

  <p style="
        font-size: 1.5rem; 
        margin-top: 5rem; 
        margin-bottom: 5rem; 
        text-align: center; 
        max-width: 800px; 
        margin-left: auto; 
        margin-right: auto; 
        line-height: 1.8;">
Every mark is intentional. Every composition tells a quiet story. This is digital art with depth where technique meets emotion, and imagination finds structure. Clean lines. Rich palettes. Endless possibility.</p>

<div class="row justify-content-center text-center" style="padding-bottom: 30px; gap: 20px;">
    <div class="col-md-5 d-flex flex-column align-items-center">
        <div style="min-width: 120px;">
            <img src="/img/logo/sketchbook.PNG" alt="Sketchbook" style="width: 130px; height: auto; margin-bottom: 10px; margin-top: 10px;">
            <p style="font-size: 1.1rem; margin: 0; font-weight: bold;">Sketchbook</p>
            <p style="font-size: 1rem; margin: 0; max-width: 250px; padding-top: 8px;">
                Sketchbook is where my ideas begin raw lines, quick sketches, and pure expression straight from the stylus.
            </p>
        </div>
    </div>

    <div class="col-md-5 d-flex flex-column align-items-center">
        <div style="min-width: 120px;">
            <img src="/img/logo/iartbook.PNG" alt="iArtbook" style="width: 130px; height: auto; margin-bottom: 10px; margin-top: 10px;">
            <p style="font-size: 1.1rem; margin: 0; font-weight: bold;">iArtbook</p>
            <p style="font-size: 1rem; margin: 0; max-width: 250px; padding-top: 8px;">
                iArtbook is where they evolve refined strokes, layered colors, and polished detail that bring each piece to life.
            </p>
        </div>
    </div>
</div>

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