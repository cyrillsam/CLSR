<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CLSR - Photography</title>

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
  background: url('/img/logo/photography.jpg') center center / cover no-repeat;
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
  Your lens is your language.<br>
  Every shot, is a sentence.
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
<p>Welcome to my world of photography. You'll see what I see through my lens, more than just pictures, these are stories, emotions, and fleeting moments captured in light. Each shot is a silent dialogue between the subject and the soul.</p>

</section>
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
  PHOTOGRAPHY
  </p>  
</section>

<!-- Random -->
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
    <div class="image-text" style="position: static; top: auto; left: auto; transform: none; color: #222; background: none; margin-bottom: 10px; font-size: 1.1rem; font-weight: bold; text-align: center;">
      Random Photos
    </div>
    <div class="image-grid">
      <img src="/img/photography/p1.jpg" alt="photo 1" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p2.jpg" alt="photo 2" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p3.jpg" alt="photo 3" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p4.jpg" alt="photo 4" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p5.jpg" alt="photo 5" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p6.jpg" alt="photo 6" onclick="openFullscreen(this.src)">
    </div>
  </div>

  <!-- Page 2 -->
  <div class="image-page">
    <div class="image-text" style="position: static; top: auto; left: auto; transform: none; color: #222; background: none; margin-bottom: 10px; font-size: 1.1rem; font-weight: bold; text-align: center;">
      Random Photos
    </div>
    <div class="image-grid">
      <img src="/img/photography/p13.jpg" alt="photo 13" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p7.jpg" alt="photo 7" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p8.jpg" alt="photo 8" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p9.jpg" alt="photo 9" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p10.jpg" alt="photo 10" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p11.jpg" alt="photo 11" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p12.jpg" alt="photo 12" onclick="openFullscreen(this.src)">
    </div>
  </div>

  <!-- Page 3 -->
  <div class="image-page">
    <div class="image-text" style="position: static; top: auto; left: auto; transform: none; color: #222; background: none; margin-bottom: 10px; font-size: 1.1rem; font-weight: bold; text-align: center;">
      Random Photos
    </div>
    <div class="image-grid">
      <img src="/img/photography/p14.jpg" alt="photo 14" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p15.jpg" alt="photo 15" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p16.jpg" alt="photo 16" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p17.jpg" alt="photo 17" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p18.jpg" alt="photo 18" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p19.jpg" alt="photo 19" onclick="openFullscreen(this.src)">
    </div>
  </div>

  <!-- Page 4 -->
  <div class="image-page">
    <div class="image-text" style="position: static; top: auto; left: auto; transform: none; color: #222; background: none; margin-bottom: 10px; font-size: 1.1rem; font-weight: bold; text-align: center;">
      Random Photos
    </div>
    <div class="image-grid">
      <img src="/img/photography/p20.jpg" alt="photo 20" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p21.jpg" alt="photo 21" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p22.jpg" alt="photo 22" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p23.jpg" alt="photo 23" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p28.jpg" alt="photo 28" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p38.jpg" alt="photo 30" onclick="openFullscreen(this.src)">
    </div>
  </div>

  <!-- Page 5 -->
  <div class="image-page">
    <div class="image-text" style="position: static; top: auto; left: auto; transform: none; color: #222; background: none; margin-bottom: 10px; font-size: 1.1rem; font-weight: bold; text-align: center;">
      Random Photos
    </div>
    <div class="image-grid">
      <img src="/img/photography/p24.jpg" alt="photo 24" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p25.jpg" alt="photo 25" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p26.jpg" alt="photo 26" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p27.jpg" alt="photo 27" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p40.jpg" alt="photo 40" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p37.jpg" alt="photo 37" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p44.jpg" alt="photo 35" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p45.jpg" alt="photo 35" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p46.jpg" alt="photo 35" onclick="openFullscreen(this.src)">
    </div>
  </div>

  <!-- Page 6 -->
  <div class="image-page">
    <div class="image-text" style="position: static; top: auto; left: auto; transform: none; color: #222; background: none; margin-bottom: 10px; font-size: 1.1rem; font-weight: bold; text-align: center;">
      Random Photos
    </div>
    <div class="image-grid">
      <img src="/img/photography/p30.jpg" alt="photo 30" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p31.jpg" alt="photo 31" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p32.jpg" alt="photo 32" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p33.jpg" alt="photo 33" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p34.jpg" alt="photo 34" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p35.jpg" alt="photo 35" onclick="openFullscreen(this.src)">
    </div>
  </div>

  <!-- Page 7 -->
  <div class="image-page">
    <div class="image-text" style="position: static; top: auto; left: auto; transform: none; color: #222; background: none; margin-bottom: 10px; font-size: 1.1rem; font-weight: bold; text-align: center;">
      Random Photos
    </div>
    <div class="image-grid">
      <img src="/img/photography/p39.jpg" alt="photo 35" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p41.jpg" alt="photo 35" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p42.jpg" alt="photo 35" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p43.jpg" alt="photo 35" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p47.jpg" alt="photo 35" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p49.jpg" alt="photo 49" onclick="openFullscreen(this.src)">
    </div>
  </div>

  <!-- Page 8 -->
  <div class="image-page">
    <div class="image-text" style="position: static; top: auto; left: auto; transform: none; color: #222; background: none; margin-bottom: 10px; font-size: 1.1rem; font-weight: bold; text-align: center;">
      Random Photos
    </div>
    <div class="image-grid">
      <img src="/img/photography/p50.jpg" alt="photo 35" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p51.jpg" alt="photo 35" onclick="openFullscreen(this.src)">
      <img src="/img/photography/p52.jpg" alt="photo 35" onclick="openFullscreen(this.src)">
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

<!-- Nature -->
<section id="nature-photography-gallery" style="position: relative;">
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
  <div id="nature-image-pages" style="text-align: center;">
    <!-- Example Page 1 -->
    <div class="nature-image-page active">
      <div class="image-text" style="position: static; top: auto; left: auto; transform: none; color: #222; background: none; margin-bottom: 10px; font-size: 1.1rem; font-weight: bold; text-align: center; padding-top:80px;">
        Nature Photography
      </div>
      <div class="image-grid">
        <img src="/img/nature/n1.jpg" alt="nature 1" onclick="openFullscreen(this.src)">
        <img src="/img/nature/n2.jpg" alt="nature 2" onclick="openFullscreen(this.src)">
        <img src="/img/nature/n3.jpg" alt="nature 3" onclick="openFullscreen(this.src)">
        <img src="/img/nature/n4.jpg" alt="nature 4" onclick="openFullscreen(this.src)">
        <img src="/img/nature/n5.jpg" alt="nature 5" onclick="openFullscreen(this.src)">
        <img src="/img/nature/n6.jpg" alt="nature 6" onclick="openFullscreen(this.src)">
      </div>
    </div>
    <!-- Add more .nature-image-page blocks as needed -->
  </div>

  <!-- Dots -->
  <div id="nature-dots" style="text-align: center; margin-top: 20px;">
    <span class="dot active" onclick="showNaturePage(0)"></span>
    <span class="dot" onclick="showNaturePage(1)"></span>
    <!-- Add more span.dot elements as needed -->
  </div>

  <!-- Fullscreen Overlay (Shared) -->
  <div id="fullscreenOverlay" aria-hidden="true">
    <div id="fullscreenContent">
      <button id="backButton" onclick="closeFullscreen()" aria-label="Go Back">Back</button>
      <div id="zoomControls">
        <button onclick="zoomImage(0.1)" aria-label="Zoom In">＋</button>
        <button onclick="zoomImage(-0.1)" aria-label="Zoom Out">−</button>
      </div>
      <div id="fullscreenScrollContainer">
        <img id="fullscreenImage" src="" alt="Fullscreen Art Preview">
      </div>
    </div>
  </div>
</section>

 <!-- Food -->
<section id="food-photography-gallery" style="position: relative;">
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
  <div id="food-image-pages" style="text-align: center;">
    <!-- Example Page 1 -->
    <div class="food-image-page active">
      <div class="image-text" style="position: static; top: auto; left: auto; transform: none; color: #222; background: none; margin-bottom: 10px; font-size: 1.1rem; font-weight: bold; text-align: center; padding-top:80px;">
        Food Photography
      </div>
      <div class="image-grid">
        <img src="/img/food/f1.jpg" alt="food 1" onclick="openFullscreen(this.src)">
        <img src="/img/food/f2.jpg" alt="food 2" onclick="openFullscreen(this.src)">
        <img src="/img/food/f3.jpg" alt="food 3" onclick="openFullscreen(this.src)">
        <img src="/img/food/f4.jpg" alt="food 4" onclick="openFullscreen(this.src)">
        <img src="/img/food/f5.jpg" alt="food 5" onclick="openFullscreen(this.src)">
        <img src="/img/food/f6.jpg" alt="food 6" onclick="openFullscreen(this.src)">
      </div>
    </div>

    <!-- Add more .food-image-page blocks as needed -->
  </div>



  <!-- Dots -->
  <div id="food-dots" style="text-align: center; margin-top: 20px;">
    <span class="dot active" onclick="showFoodPage(0)"></span>
    <span class="dot" onclick="showFoodPage(1)"></span>
    <!-- Add more span.dot elements as needed -->
  </div>

  <!-- Fullscreen Overlay (Shared) -->
  <div id="fullscreenOverlay" aria-hidden="true">
    <div id="fullscreenContent">
      <button id="backButton" onclick="closeFullscreen()" aria-label="Go Back">Back</button>
      <div id="zoomControls">
        <button onclick="zoomImage(0.1)" aria-label="Zoom In">＋</button>
        <button onclick="zoomImage(-0.1)" aria-label="Zoom Out">−</button>
      </div>
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
    BEHIND THE CAPTURE
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
Each interface is built with precision clean grids, smart flows, and responsive elements.
Designed for clarity. Engineered for performance.
This is where technology meets intuitive experience.
</p>

<div class="container">
  <div class="row justify-content-center text-center" style="padding-bottom: 30px; gap: 20px;">
          <div class="image-text" style="position: static; top: auto; left: auto; transform: none; color: #222; background: none; margin-bottom: 10px; font-size: 1.5rem; font-weight: bold; text-align: center; padding-top:80px;">
        Cameras
      </div>
    <!-- Apple -->
    <div class="col-md-5 d-flex flex-column align-items-center">
      <div style="min-width: 120px;">
        <img src="/img/logo/apple.png" alt="Apple" style="width: 150px; height: auto; margin-bottom: 10px; margin-top: 10px;">
        <p style="font-size: 1.1rem; margin: 0; font-weight: bold;">Apple</p>
        <p style="font-size: 1rem; margin: 0; max-width: 300px; padding-top: 8px;">
          Apple is for high-quality, true-to-life photography, perfect for capturing sharp details and vibrant colors.
        </p>
      </div>
    </div>

    <!-- Vivo -->
    <div class="col-md-5 d-flex flex-column align-items-center">
      <div style="min-width: 120px;">
        <img src="/img/logo/vivo.png" alt="Vivo" style="width: 200px; height: auto; margin-bottom: 10px; margin-top: 65px;">
        <p style="font-size: 1.1rem; margin: 0; font-weight: bold;">Vivo</p>
        <p style="font-size: 1rem; margin: 0; max-width: 300px; padding-top: 8px;">
          Vivo is for stylish, enhanced shots, perfect for low-light scenes and beauty-focused photography.
        </p>
      </div>
    </div>

             <div class="image-text" style="position: static; top: auto; left: auto; transform: none; color: #222; background: none; margin-bottom: 10px; font-size: 1.5rem; font-weight: bold; text-align: center; padding-top:80px;">
        Applications
      </div>

    <!-- Lightroom -->
    <div class="col-md-5 d-flex flex-column align-items-center">
      <div style="min-width: 120px;">
        <img src="/img/logo/adobe.png" alt="Adobe Lightroom" style="width: 150px; height: auto; margin-bottom: 10px; margin-top: 10px;">
        <p style="font-size: 1.1rem; margin: 0; font-weight: bold;">Adobe Lightroom</p>
        <p style="font-size: 1rem; margin: 0; max-width: 300px; padding-top: 8px;">
          Adobe Lightroom is for professional-grade editing, perfect for advanced color control and high-resolution enhancements.
        </p>
      </div>
    </div>

    <!-- Snapseed -->
    <div class="col-md-5 d-flex flex-column align-items-center">
      <div style="min-width: 120px;">
        <img src="/img/logo/snapseed.png" alt="Snapseed" style="width: 150px; height: auto; margin-bottom: 10px; margin-top: 10px;">
        <p style="font-size: 1.1rem; margin: 0; font-weight: bold;">Snapseed</p>
        <p style="font-size: 1rem; margin: 0; max-width: 300px; padding-top: 8px;">
          Snapseed is for precision editing, perfect for detailed adjustments and quick fixes on the go.
        </p>
      </div>
    </div>

    <!-- VSCO -->
    <div class="col-md-5 d-flex flex-column align-items-center">
      <div style="min-width: 120px;">
        <img src="/img/logo/vsco.png" alt="VSCO" style="width: 150px; height: auto; margin-bottom: 10px; margin-top: 10px;">
        <p style="font-size: 1.1rem; margin: 0; font-weight: bold;">VSCO</p>
        <p style="font-size: 1rem; margin: 0; max-width: 300px; padding-top: 8px;">
          VSCO is for aesthetic photo editing, perfect for applying trendy filters and subtle tones.
        </p>
      </div>
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

