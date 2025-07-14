<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CLSR - About Me</title>

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
  background: url('/img/logo/aboutme.png') center center / cover no-repeat;
  margin: 0;
  padding: 0;
  width: 100vw;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  color: white;
  text-align: left;
">
  <div class="intro-wrapper">
    <div class="intro-flex">
      <div class="intro-text">
        <h1>
          Hello there.<br><br>
          I’m Claire Samson,<br>
          Digital Artist and Web Designer<br>
        </h1>
        <a href="#explore" class="explore-button">Explore More</a>
      </div>
      <div class="profile-image">
        <img src="/img/logo/mephoto.png" alt="Claire Samson">
      </div>
    </div>
  </div>
</section>

<style>
  .hero-section {
    overflow: hidden;
  }

  .intro-wrapper {
    margin-left: 10vw;
    max-width: 90vw;
  }

  .intro-flex {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 3vw;
    transition: all 0.4s ease;
  }

  .intro-text {
    flex: 1 1 320px;
    min-width: 260px;
    transition: all 0.4s ease;
  }

  .intro-text h1 {
    padding-top: 30px;
    font-size: clamp(1.8rem, 5vw, 2rem);
    line-height: 1.3;
    font-weight: bold;
    margin: 0;
    text-shadow: 2px 2px 4px black;
  }

  .explore-button {
    display: inline-block;
    margin-top: 20px;
    padding: 12px 24px;
    background-color: rgb(80, 169, 228);
    color: white;
    text-decoration: none;
    font-size: 1rem;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
  }

  .explore-button:hover {
    background-color: rgb(60, 140, 200);
    color: black;
  }

  .profile-image {
    flex: 1 1 320px;
    padding-left: 20px;
    max-width: 900vh;
    text-align: center;
    transition: all 0.4s ease;
  }

  .profile-image img {
    width: 120%;
    height: auto;
  }

  /* 📱 Smooth, soft Mobile Responsive */
  @media (max-width: 768px) {
    .hero-section {
      justify-content: center;
      text-align: center;
    }

    .intro-wrapper {
      margin-left: 0;
      padding: 0 5vw;
      max-width: 100%;
    }

    .intro-flex {
      flex-direction: column;
      align-items: center;
      gap: 20px;
    }

    .profile-image {
      max-width: 85%;
      padding-left: 10px;
    }

    .intro-text {
      max-width: 90%;
    }


    .intro-text h1 {
      padding-top: 100px;
      font-size: 1.9rem;
    }

    .explore-button {
      font-size: 0.95rem;
      padding: 10px 20px;
    }

    .profile-image img {
      max-width: 90%;
    }
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
 PASSIONS & INTERESTS
  </p> 
  
<section id="video-gallery" style="position: relative;">

<p style="
        font-size: 1.5rem; 
        margin-top: 5rem; 
        margin-bottom: 5rem; 
        text-align: center; 
        max-width: 1000px; 
        margin-left: auto; 
        margin-right: auto; 
        line-height: 1.8;">
These are my passions and interests as a professional in the IT industry.</p> 
</section>
</section>

<div class="passion-interest-container">
  <div class="passion-interest-box">
    <img src="/img/aboutme_logo/one.png" alt="Logo 1">
    <span>Creative Visual Storytelling</span>
  </div>
  <div class="passion-interest-box">
    <img src="/img/aboutme_logo/two.png" alt="Logo 2">
    <span>Technology & Web Development</span>
  </div>
  <div class="passion-interest-box">
    <img src="/img/aboutme_logo/three.png" alt="Logo 3">
    <span>Data Analysis & Problem Solving</span>
  </div>
  <div class="passion-interest-box">
    <img src="/img/aboutme_logo/four.png" alt="Logo 4">
    <span>Photography & Videography</span>
  </div>
<div class="passion-interest-box center-last-box">
  <img src="/img/aboutme_logo/five.png" alt="Logo 5">
  <span>Human Connection</span>
</div>

</div>

<style>
.passion-interest-container {
  padding-bottom: 30px;
  display: grid;
  grid-template-columns: repeat(2, 1fr); /* desktop layout preserved */
  gap: 50px;
  max-width: 900px;
  margin: 0 auto;
  justify-items: center;
  padding-left: 20px;
  padding-right: 20px;
}

.passion-interest-box {
  background-color: #1A1B1D;
  color: white;
  border-radius: 60px;
  padding: 25px 35px;
  font-size: 1rem;
  display: flex;
  align-items: center;
  gap: 30px;
  width: 100%;
  max-width: 700px;
  box-shadow: 0 10px 25px rgba(255, 255, 255, 0.05),
              0 4px 10px rgba(255, 255, 255, 0.08);
  transition: box-shadow 0.3s ease;
}

.passion-interest-box img {
  width: 60px;
  height: 60px;
  object-fit: contain;
  border-radius: 50%;
}

.passion-interest-box span {
  flex: 1;
  text-align: left;
}

.passion-interest-box.center-last-box {
  grid-column: 1 / 3;
  padding-left: 50px;
  max-width: 450px;
}

/* 💡 Mobile View — refined to image-left, text-right, smaller spacing */
@media (max-width: 768px) {
  .passion-interest-container {
    grid-template-columns: 1fr;
    gap: 30px;
  }

  .passion-interest-box {
    flex-direction: row;
    align-items: center;
    padding: 18px 20px;
    gap: 15px;
    font-size: 0.9rem;
    max-width: 95%;
    margin: 0 auto;
  }

  .passion-interest-box img {
    width: 45px;
    height: 45px;
  }

  .passion-interest-box span {
    text-align: left;
    font-size: 0.95rem;
  }

  .passion-interest-box.center-last-box {
    grid-column: 1 / 2;
    padding-left: 0;
    padding-left: 20px;
    max-width: 95%;

  }
}
.Logo5{
  padding-left: 100px;
}


</style>

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
  TOOLS & SKILLS
  </p> 

  <p style="
        font-size: 1.5rem; 
        margin-top: 5rem; 
        margin-bottom: 5rem; 
        text-align: center; 
        max-width: 1000px; 
        margin-left: auto; 
        margin-right: auto; 
        line-height: 1.8;">
Equipped with a diverse set of technical and creative tools, I bring together design, development, and data to deliver thoughtful and effective digital solutions. My skills reflect a passion for both innovation and visual storytelling in the IT field.</p> 

<p style="
  font-size: clamp(1.2rem, 2vw, 1.5rem);
  margin: 5rem auto;
  text-align: left;
  max-width: 1000px;
  padding: 0 20px;
  line-height: 1.8;
  font-weight: bold;
">
  TECHNICAL SKILLS
</p>



<section id="technical-skills-gallery" style="position: relative; padding-bottom: 50px;">
  <!-- Prev Arrow -->
  <div id="prevBtn" onclick="prevSkillPage()">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
    </svg>
  </div>

  <!-- Next Arrow -->
  <div id="nextBtn" onclick="nextSkillPage()">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z"/>
    </svg>
  </div>

  <!-- Technical Skills Grid Pages -->
  <div class="image-page active">
    <div class="image-text">Web Development</div>
    <div class="image-grid">
      <img src="/img/aboutme_web/2.png" alt="Skill 1" onclick="showZoom(this.src)">
      <img src="/img/aboutme_web/3.png" alt="Skill 2" onclick="showZoom(this.src)">
      <img src="/img/aboutme_web/4.png" alt="Skill 3" onclick="showZoom(this.src)">
    </div>
  </div>

  <div class="image-page">
    <div class="image-text">Programming Languages</div>
    <div class="image-grid">
      <img src="/img/aboutme_web/5.png" alt="Language 5" onclick="showZoom(this.src)">
      <img src="/img/aboutme_web/6.png" alt="Language 6" onclick="showZoom(this.src)">
      <img src="/img/aboutme_web/7.png" alt="Language 7" onclick="showZoom(this.src)">
      <img src="/img/aboutme_web/8.png" alt="Language 8" onclick="showZoom(this.src)">
      <img src="/img/aboutme_web/9.png" alt="Language 9" onclick="showZoom(this.src)">
    </div>
  </div>

  <div class="image-page">
    <div class="image-text">Databases & Hosting</div>
    <div class="image-grid">
      <img src="/img/aboutme_web/12.png" alt="MySQL" onclick="showZoom(this.src)">
      <img src="/img/aboutme_web/13.png" alt="SQL Server" onclick="showZoom(this.src)">
      <img src="/img/aboutme_web/14.png" alt="OnRender" onclick="showZoom(this.src)">
    </div>
  </div>

  <div class="image-page">
    <div class="image-text">Mobile App Development</div>
    <div class="image-grid">
      <img src="/img/aboutme_web/11.png" alt="Swift" onclick="showZoom(this.src)">
      <img src="/img/aboutme_web/10.png" alt="Kotlin" onclick="showZoom(this.src)">
    </div>
  </div>

  <div class="image-page">
    <div class="image-text">Tools & Technologies</div>
    <div class="image-grid">
      <img src="/img/aboutme_web/15.png" alt="Github" onclick="showZoom(this.src)">
      <img src="/img/aboutme_web/16.png" alt="VS Code" onclick="showZoom(this.src)">
      <img src="/img/aboutme_web/17.png" alt="XAMPP" onclick="showZoom(this.src)">
    </div>
  </div>

  <!-- Sweet Dots -->
  <div id="sweet-dots" style="text-align: center; margin-top: 20px;">
    <span class="dot active" onclick="showSkillPage(0)"></span>
    <span class="dot" onclick="showSkillPage(1)"></span>
    <span class="dot" onclick="showSkillPage(2)"></span>
    <span class="dot" onclick="showSkillPage(3)"></span>
    <span class="dot" onclick="showSkillPage(4)"></span>
  </div>

  <!-- Fullscreen Overlay -->
  <div id="simpleZoomOverlay" onclick="hideZoom()">
    <img id="zoomedImage" src="" alt="Zoomed Skill">
  </div>
</section>

<style>
  .image-page { display: none; }
  .image-page.active { display: block; }

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
</style>

<script>
  let currentSkillPage = 0;

  function showSkillPage(index) {
    const pages = document.querySelectorAll('.image-page');
    const dots = document.querySelectorAll('#sweet-dots .dot');

    if (index >= pages.length) index = 0;
    if (index < 0) index = pages.length - 1;

    pages.forEach((page, i) => page.classList.toggle('active', i === index));
    dots.forEach((dot, i) => dot.classList.toggle('active', i === index));

    currentSkillPage = index;
  }

  function nextSkillPage() {
    showSkillPage(currentSkillPage + 1);
  }

  function prevSkillPage() {
    showSkillPage(currentSkillPage - 1);
  }

  document.addEventListener("DOMContentLoaded", () => {
    showSkillPage(0);
  });
</script>


 


<style>

.image-page {
  display: none;
}
.image-page.active {
  display: block;
}

.image-text {
  font-size: 1.2rem;
  font-weight: bold;
  margin: 20px auto 10px;
  text-align: center;
  color: #222;
}

.image-grid {
  column-count: 3;
  column-gap: 20px;
  max-width: 1000px;
  margin: auto;
  padding: 20px 60px;
  box-sizing: border-box;
}

.image-grid img {
  width: 100%;
  height: auto;
  margin-bottom: 20px;
  border-radius: 10px;
  display: block;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease, filter 0.3s ease, box-shadow 0.3s ease;
  break-inside: avoid;
  position: relative;
  cursor: zoom-in;
  z-index: 1;
}

/* ✨ Hover effect to simulate viewing */
.image-grid img:hover {
  transform: scale(1.05);
  filter: brightness(1.05) saturate(1.2);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.35);
  z-index: 2;
}

/* Navigation Arrows */
#prevBtn, #nextBtn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: #fff;
  padding: 10px;
  border-radius: 50%;
  cursor: pointer;
  z-index: 10;
  transition: background 0.3s ease;
}
#prevBtn {
  left: 5px;
}
#nextBtn {
  right: 5px;
}
#prevBtn svg, #nextBtn svg {
  width: 40px;
  height: 40px;
  fill: #444;
}

/* 📸 Simplified Zoom Overlay */
#simpleZoomOverlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(34, 34, 34, 0.95);
  display: none;
  justify-content: center;
  align-items: center;
  z-index: 9999;
  cursor: zoom-out;
}

#simpleZoomOverlay img {
  max-width: 90vw;
  max-height: 90vh;
  border-radius: 12px;
  transition: transform 0.3s ease;
  transform: scale(1.05);
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
}

/* Responsive Columns */
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

</style>

<script>
  function showZoom(src) {
  const overlay = document.getElementById('simpleZoomOverlay');
  const image = document.getElementById('zoomedImage');
  image.src = src;
  overlay.style.display = 'flex';
}

function hideZoom() {
  document.getElementById('simpleZoomOverlay').style.display = 'none';
}

</script>

<script>
  let currentPage = 0;
  const totalPages = document.querySelectorAll('.image-page').length;

  function showSweetPage(index) {
    const pages = document.querySelectorAll('.image-page');
    const dots = document.querySelectorAll('.dot');
    
    pages.forEach((page, i) => {
      page.classList.toggle('active', i === index);
    });

    dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === index);
    });

    currentPage = index;
  }

  function nextSkillPage() {
    const nextPage = (currentPage + 1) % totalPages;
    showSweetPage(nextPage);
  }

  function prevSkillPage() {
    const prevPage = (currentPage - 1 + totalPages) % totalPages;
    showSweetPage(prevPage);
  }

  // 🌟 This ensures the first one shows when page loads!
  document.addEventListener('DOMContentLoaded', () => {
    showSweetPage(0);
  });
</script>




















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

<style>
/* For Mobile */
@media (max-width: 768px) {
  .hero-section {
    background-size: 100% 50%; /* Adjusts image size to fit width while keeping the height smaller */
    background-position: center center; /* Focuses the center of the image */
    background-attachment: scroll; /* Disables parallax effect for mobile */
  }

  .hero-content {
    margin-left: 5vw; /* Adjust left margin for mobile to make the text more centered */
    max-width: 90vw;
  }

  .hero-content h1 {
    font-size: clamp(1.5rem, 4vw, 2.5rem); /* Adjust font size for mobile */
  }
}
</style>
