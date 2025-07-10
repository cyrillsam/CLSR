<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CLSR - Certificate</title>

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
  background: url('/img/logo/certi1.jpg') center center / cover no-repeat;
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
  Certified skills, Real results<br>
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
<p>Welcome to my professional space. I am a soon-to-be graduate in Information Technology with a passion for digital design, quality assurance, and web development. 
<br>
</p>

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
  CERTIFICATE
  </p>  
</section>


<p style="
        font-size: 1.5rem; 
        margin-top: 5rem; 
        margin-bottom: 5rem; 
        text-align: center; 
        max-width: 1000px; 
        margin-left: auto; 
        margin-right: auto; 
        line-height: 1.8;">
Each certificate shown here was earned during seminars and academic sessions that built my practical knowledge. I’ve built a skill set that blends logic, precision, and artistry perfect for delivering innovative and user-focused digital solutions.

Feel free to explore the proof of my dedication below. Every badge, every lesson, every skill tells part of my story.</p> 

<!-- CERTIFICATE GALLERY -->
 <!-- TIMELINE TABS -->
  <div class="timeline-tabs">
    <div class="year-tab active" onclick="showYear('2021')">2021</div>
    <div class="year-tab" onclick="showYear('2022')">2022</div>
    <div class="year-tab" onclick="showYear('2023')">2023</div>
    <div class="year-tab" onclick="showYear('2024')">2024</div>
    <div class="year-tab" onclick="showYear('2025')">2025</div>
  </div>

  <!-- GALLERY SECTIONS -->
  <div id="2021" class="gallery-section active">
    <img src="/img/certificates/21.jpg" alt="Certificate 21" onclick="openFullscreen(this.src)">
  </div>

  <div id="2022" class="gallery-section">
    <img src="/img/certificates/22.jpg" alt="Certificate 22" onclick="openFullscreen(this.src)">
    <img src="/img/certificates/25.jpg" alt="Certificate 25" onclick="openFullscreen(this.src)">
    <img src="/img/certificates/26.jpg" alt="Certificate 26" onclick="openFullscreen(this.src)">
  </div>

   <div id="2023" class="gallery-section">
    <img src="/img/certificates/1.jpg" alt="Certificate 1"onclick="openFullscreen(this.src)" />
    <img src="/img/certificates/2.jpg" alt="Certificate 2"onclick="openFullscreen(this.src)" />
    <img src="/img/certificates/3.jpg" alt="Certificate 3" onclick="openFullscreen(this.src)"/>
    <img src="/img/certificates/4.jpg" alt="Certificate 4"onclick="openFullscreen(this.src)" />
    <img src="/img/certificates/5.jpg" alt="Certificate 5"onclick="openFullscreen(this.src)" />
  </div>

  <div id="2024" class="gallery-section">
    <img src="/img/certificates/6.jpg" alt="Certificate 6"onclick="openFullscreen(this.src)"  />
    <img src="/img/certificates/9.jpg" alt="Certificate 9" onclick="openFullscreen(this.src)" />
    <img src="/img/certificates/10.jpg" alt="Certificate 10" onclick="openFullscreen(this.src)" />
    <img src="/img/certificates/12.jpg" alt="Certificate 12" onclick="openFullscreen(this.src)" />
    <img src="/img/certificates/13.jpg" alt="Certificate 13" onclick="openFullscreen(this.src)" />
    <img src="/img/certificates/14.jpg" alt="Certificate 14" onclick="openFullscreen(this.src)" />
    <img src="/img/certificates/15.jpg" alt="Certificate 15" onclick="openFullscreen(this.src)" />
    <img src="/img/certificates/16.jpg" alt="Certificate 16" onclick="openFullscreen(this.src)" />
    <img src="/img/certificates/17.png" alt="Certificate 17" onclick="openFullscreen(this.src)" />
    <img src="/img/certificates/18.jpg" alt="Certificate 18" onclick="openFullscreen(this.src)" />
    <img src="/img/certificates/19.png" alt="Certificate 19" onclick="openFullscreen(this.src)" />
    <img src="/img/certificates/20.PNG" alt="Certificate 20" onclick="openFullscreen(this.src)" />
    <img src="/img/certificates/24.jpg" alt="Certificate 24" onclick="openFullscreen(this.src)" />
    <img src="/img/certificates/23.jpg" alt="Certificate 23" onclick="openFullscreen(this.src)" />
    <img src="/img/certificates/27.jpg" alt="Certificate 27" onclick="openFullscreen(this.src)" />
    <img src="/img/certificates/28.jpg" alt="Certificate 28" onclick="openFullscreen(this.src)" />
  </div>

  <div id="2025" class="gallery-section">
    <img src="/img/certificates/7.jpg" alt="Certificate 7" onclick="openFullscreen(this.src)"  />
    <img src="/img/certificates/8.jpg" alt="Certificate 8"onclick="openFullscreen(this.src)"  />
    <img src="/img/certificates/11.jpg" alt="Certificate 11" onclick="openFullscreen(this.src)" />
    <img src="/img/certificates/29.jpg" alt="Certificate 29" onclick="openFullscreen(this.src)" />
  </div>
  <!-- Add more years the same way -->
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

<!-- SCRIPT -->
<script>
  let zoomLevel = 1;

  function showYear(year) {
    document.querySelectorAll('.year-tab').forEach(tab => tab.classList.remove('active'));
    document.querySelectorAll('.gallery-section').forEach(sec => sec.classList.remove('active'));

    document.querySelector(`.year-tab[onclick="showYear('${year}')"]`).classList.add('active');
    document.getElementById(year).classList.add('active');
  }

  function openFullscreen(src) {
    const overlay = document.getElementById('fullscreenOverlay');
    const img = document.getElementById('fullscreenImage');
    img.src = src;
    zoomLevel = 1;
    img.style.transform = `scale(${zoomLevel})`;
    overlay.style.display = 'flex';
  }

  function closeFullscreen() {
    document.getElementById('fullscreenOverlay').style.display = 'none';
  }

  function zoomImage(delta) {
    const img = document.getElementById('fullscreenImage');
    zoomLevel += delta;
    zoomLevel = Math.max(1, Math.min(zoomLevel, 5));
    img.style.transform = `scale(${zoomLevel})`;
  }

  // ESC to close fullscreen
  document.addEventListener('keydown', e => {
    if (e.key === "Escape") closeFullscreen();
  });
</script>



<style>
.certificate-gallery {
  max-width: 1200px;
  margin: 50px auto;
  padding: 30px 25px 500px 25px; /* top, right, bottom, left */
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
  position: relative;
}

  .timeline-tabs {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 30px;
  }

  .year-tab {
    padding: 10px 25px;
    background-color: #f1f3f4;
    border-radius: 30px;
    font-weight: bold;
    color: #444;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .year-tab:hover {
    background-color: #d2e3fc;
  }

  .year-tab.active {
    background: linear-gradient(135deg, #5693c9, #3b6ea5);
    color: white;
  }

.gallery-section {
  display: none;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
  padding: 20px 60px;
  box-sizing: border-box;
  max-height: auto; /* adjust this height as needed */
  padding-bottom: 100px;
}

.gallery-section.active {
  display: flex;

}

 .gallery-section img {
  width: calc(33.333% - 13.33px); /* 3 columns with 20px gap */
  max-width: 100%;
  height: auto;
  border-radius: 10px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
  cursor: zoom-in;
  transition: transform 0.3s ease;
  object-fit: cover;
}

  .gallery-section img:hover {
    transform: scale(1.03);
  }

  /* Responsive columns */
  @media (max-width: 768px) {
    .gallery-section {
      column-count: 2;
      padding: 20px 30px;
    }
  }

  @media (max-width: 480px) {
    .gallery-section {
      column-count: 1;
      padding: 20px;
    }
  }

  
/* 📱 Unique Mobile View (1 large full-width image per row) */
@media (max-width: 600px) {
  .gallery-section {
    flex-direction: column;
    padding: 15px 15px 60px;
    gap: 16px;
  }

  .gallery-section img {
    width: 100%;
    height: auto;
    border-radius: 14px;
    box-shadow: 0 6px 14px rgba(0, 0, 0, 0.08);
    object-fit: contain;
  }
}
  /* Fullscreen Overlay */
  #fullscreenOverlay {
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background-color: rgb(34, 34, 34);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    overflow: auto;
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
    background: linear-gradient(135deg, #f0b7a3, #ff87ab);
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
    background: linear-gradient(135deg, #ff87ab, #f0b7a3);
    transform: scale(1.05);
  }

  /* Zoom Controls */
  #zoomControls {
    position: fixed;
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

  @media (max-width: 768px) {
    #fullscreenScrollContainer {
      padding: 20px;
    }

    #zoomControls {
      bottom: 20px;
      right: 20px;
    }
  }
</style>



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



<!-- Footer Include -->
<?php include 'footer.php'; ?>
</body>
</html>

