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

    <div class="image-page">
    <div class="image-text">Data Analysis & Visualization</div>
    <div class="image-grid">
      <img src="/img/aboutme_web/18.png" alt="Microsoft Excel" onclick="showZoom(this.src)">
      <img src="/img/aboutme_web/19.png" alt="Draw.io" onclick="showZoom(this.src)">
    </div>
  </div>

    <div class="image-page">
    <div class="image-text">Software Tools</div>
    <div class="image-grid">
      <img src="/img/aboutme_web/22.png" alt="Word" onclick="showZoom(this.src)">
      <img src="/img/aboutme_web/21.png" alt="PowerPoint" onclick="showZoom(this.src)">
      <img src="/img/aboutme_web/23.png" alt="Docs" onclick="showZoom(this.src)">
    </div>
  </div>

  <!-- Sweet Dots -->
  <div id="sweet-dots" style="text-align: center; margin-top: 20px;">
    <span class="dot active" onclick="showSkillPage(0)"></span>
    <span class="dot" onclick="showSkillPage(1)"></span>
    <span class="dot" onclick="showSkillPage(2)"></span>
    <span class="dot" onclick="showSkillPage(3)"></span>
    <span class="dot" onclick="showSkillPage(4)"></span>
    <span class="dot" onclick="showSkillPage(5)"></span>
    <span class="dot" onclick="showSkillPage(6)"></span>
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


<p style="
  font-size: clamp(1.2rem, 2vw, 1.5rem);
  margin: 5rem auto;
  text-align: left;
  max-width: 1000px;
  padding: 0 20px;
  line-height: 1.8;
  font-weight: bold;
">
  CREATIVE SKILLS
</p>



<section id="creative-skills-gallery" style="position: relative; padding-bottom: 50px;">
  <!-- Prev Arrow -->
  <div id="prevCreativeBtn" onclick="prevCreativePage()">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
    </svg>
  </div>

  <!-- Next Arrow -->
  <div id="nextCreativeBtn" onclick="nextCreativePage()">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z"/>
    </svg>
  </div>

  <!-- Creative Skills Grid Pages -->
  <div class="image-page-creative active">
    <div class="image-text">Graphic Design</div>
    <div class="image-grid-creative">
      <img src="/img/aboutme_web/28.png" alt="Figma" onclick="showZoom(this.src)">
      <img src="/img/aboutme_web/24.png" alt="Canva" onclick="showZoom(this.src)">
      <img src="/img/aboutme_web/26.png" alt="Sketchbook" onclick="showZoom(this.src)">
      <img src="/img/aboutme_web/25.png" alt="iArtbook" onclick="showZoom(this.src)">
    </div>
  </div>

  <div class="image-page-creative">
    <div class="image-text">Multimedia Editing</div>
    <div class="image-grid-creative">
      <img src="/img/aboutme_web/27.png" alt="CapCut" onclick="showZoom(this.src)">
    </div>
  </div>

  <!-- Creative Dots -->
  <div id="creative-dots" style="text-align: center; margin-top: 20px;">
    <span class="dot-creative active" onclick="showCreativePage(0)"></span>
    <span class="dot-creative" onclick="showCreativePage(1)"></span>
  </div>
</section>


<style>
  .image-page-creative { display: none; }
  .image-page-creative.active { display: block; }

.image-grid-creative {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-auto-rows: auto;
  gap: 20px;
  max-width: 1000px;
  margin: auto;
  padding: 20px 60px;
  box-sizing: border-box;
}

.image-grid-creative img {
  width: 100%;
  height: auto;
  border-radius: 10px;
  display: block;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease, filter 0.3s ease, box-shadow 0.3s ease;
  cursor: zoom-in;
  z-index: 1;
}

.image-grid-creative img:hover {
  transform: scale(1.05);
  filter: brightness(1.05) saturate(1.2);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.35);
  z-index: 2;
}

/* Responsive Columns */
@media (max-width: 768px) {
  .image-grid-creative {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 480px) {
  .image-grid-creative {
    grid-template-columns: 1fr;
  }
}

  /* Navigation Arrows */
  #prevCreativeBtn, #nextCreativeBtn {
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
  #prevCreativeBtn {
    left: 5px;
  }
  #nextCreativeBtn {
    right: 5px;
  }
  #prevCreativeBtn svg, #nextCreativeBtn svg {
    width: 40px;
    height: 40px;
    fill: #444;
  }

  /* Creative Dots */
  .dot-creative {
    height: 20px;
    width: 20px;
    margin: 0 5px;
    background-color: #bbb;
    border-radius: 30%;
    display: inline-block;
    transition: background-color 0.3s;
    cursor: pointer;
  }
  .dot-creative.active {
    background-color: #444;
  }

  /* Responsive Columns */
  @media (max-width: 768px) {
    .image-grid-creative {
      column-count: 2;
    }
  }
  @media (max-width: 480px) {
    .image-grid-creative {
      column-count: 1;
    }
  }
</style>

<script>
  let currentCreativePage = 0;
  const creativePages = document.querySelectorAll('.image-page-creative').length;

  function showCreativePage(index) {
    const pages = document.querySelectorAll('.image-page-creative');
    const dots = document.querySelectorAll('#creative-dots .dot-creative');

    if (index >= pages.length) index = 0;
    if (index < 0) index = pages.length - 1;

    pages.forEach((page, i) => page.classList.toggle('active', i === index));
    dots.forEach((dot, i) => dot.classList.toggle('active', i === index));

    currentCreativePage = index;
  }

  function nextCreativePage() {
    showCreativePage(currentCreativePage + 1);
  }

  function prevCreativePage() {
    showCreativePage(currentCreativePage - 1);
  }

  document.addEventListener("DOMContentLoaded", () => {
    showCreativePage(0);
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


<!-- 🌈 Responsive Full-Width Image Section -->
<section class="aboutme-fullwidth-image" style="position: relative;">
  <img src="/img/logo/scrollaround.png" alt="scroll">
  <div class="scroll-overlay-text animated-glow-text">
    Scroll down, click around, and discover the skills, style, and soul behind every project.
  </div>
</section>

<style>
/* 🎈 Enhanced Floating Animation */
@keyframes floatText {
  0%   { transform: translate(-50%, -50%) translateY(0); }
  50%  { transform: translate(-50%, -50%) translateY(-20px); } /* More bounce */
  100% { transform: translate(-50%, -50%) translateY(0); }
}

/* 🌟 Gentle Glow Animation */
@keyframes glow {
  0%, 100% {
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7),
                 0 0 8px rgba(255, 255, 255, 0.2);
  }
  50% {
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7),
                 0 0 20px rgba(255, 255, 255, 0.6);
  }
}

/* 🌠 Apply Animations */
.animated-glow-text {
  animation:
    floatText 3s ease-in-out infinite,
    glow 4s ease-in-out infinite;
}

.scroll-overlay-text {
  position: absolute;
  top: 50%;
  left: 50%;
  color: #fff;
  font-size: 2.2rem;
  text-align: center;
  width: 90%;
  max-width: 850px;
  pointer-events: none;
  line-height: 1.4;
  transform: translate(-50%, -50%);
}

/* 📱 Responsive Text Sizes */
@media (max-width: 768px) {
  .scroll-overlay-text {
    font-size: 1.1rem;
    line-height: 1.3;
    padding: 0 10px;
  }
}
@media (max-width: 480px) {
  .scroll-overlay-text {
    font-size: 1rem;
  }
}

/* 🖼 Fullwidth Image Container */
.aboutme-fullwidth-image {
  width: 100%;
  margin: 0; /* No extra spacing */
  padding: 0; /* Ensure no padding too */
  overflow: hidden;
  display: block;
  position: relative;
}
.aboutme-fullwidth-image img {
  width: 100%;
  height: auto;
  display: block; /* 🔥 Removes bottom space */
  object-fit: contain;
  margin: 0;       /* Just in case */
  padding: 0;
  border: 0;
}
</style>


<!-- 🌟 Goals & Dreams Section -->
<section class="dreams-section">
  <div class="dreams-container">
    <h2 class="dreams-title">GOAL & DREAMS</h2>
    <p class="dreams-description">
      My goal is to continuously grow as a digital artist and web designer, creating meaningful and innovative solutions that inspire and connect people. I dream of building platforms and experiences that blend creativity, technology, and human connection, leaving a positive impact in the digital world and beyond.
    </p>

    <div class="dreams-interest-grid">
      <div class="dreams-interest-box">
        <img src="/img/logo/target.png" alt="Logo 1">
        <span>Creative innovation</span>
      </div>
      <div class="dreams-interest-box">
        <img src="/img/logo/target.png" alt="Logo 2">
        <span>Tech-driven problem solving</span>
      </div>
      <div class="dreams-interest-box">
        <img src="/img/logo/target.png" alt="Logo 3">
        <span>Meaningful user experience</span>
      </div>
      <div class="dreams-interest-box">
        <img src="/img/logo/target.png" alt="Logo 4">
        <span>Continuous learning</span>
      </div>
            <div class="dreams-interest-box">
        <img src="/img/logo/target.png" alt="Logo 4">
        <span>Visual storytelling</span>
      </div>
      <div class="dreams-interest-box">
        <img src="/img/logo/target.png" alt="Logo 4">
        <span>Impactful design</span>
      </div>
      <div class="dreams-interest-box">
        <img src="/img/logo/target.png" alt="Logo 4">
        <span>Collaborative growth</span>
      </div>
       <div class="dreams-interest-box">
        <img src="/img/logo/target.png" alt="Logo 4">
        <span>Purposeful development</span>
      </div>
      <div class="dreams-interest-box">
        <img src="/img/logo/target.png" alt="Logo 4">
        <span>Empowering others through tech</span>
      </div>
      <div class="dreams-interest-box">
        <img src="/img/logo/target.png" alt="Logo 4">
        <span>Building something that matters</span>
      </div>
    </div>
  </div>
</section>

<style>
  /* 🌙 Unique Goals & Dreams Section Styling */
.dreams-section {
  background-color: #1A1B1D;
  padding: 60px 20px;
  color: #fff;
}

.dreams-container {
  max-width: 900px;
  margin: 0 auto;
  text-align: center;
}

.dreams-title {
  padding-top: 70px;
  font-size: 2.2rem;
  font-weight: bold;
  margin-bottom: 1.5rem;
  letter-spacing: 2px;
}

.dreams-description {
  font-size: 1.3rem;
  line-height: 1.7;
  margin: 0 auto 3rem auto;
  max-width: 1000px;
  color: #ffffff;
}

/* 💡 Interest Boxes */
.dreams-interest-grid {
  padding-bottom: 40px;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 50px;
  max-width: 900px;
  margin: 0 auto;
  justify-items: center;
}

.dreams-interest-box {
  background-color: #fafafa;
  color: #1A1B1D;
  border-radius: 60px;
  padding: 25px 35px;
  font-size: 1rem;
  display: flex;
  align-items: center;
  gap: 30px;
  width: 100%;
  max-width: 700px;
  transition: box-shadow 0.3s ease;
}

.dreams-interest-box img {
  width: 60px;
  height: 60px;
  object-fit: contain;
  border-radius: 50%;
}

.dreams-interest-box span {
  flex: 1;
  text-align: left;
}

/* 📱 Responsive Refinement */
@media (max-width: 768px) {
  .dreams-interest-grid {
    grid-template-columns: 1fr;
    gap: 30px;
  }

  .dreams-interest-box {
    flex-direction: row;
    align-items: center;
    padding: 18px 20px;
    gap: 15px;
    font-size: 0.9rem;
    max-width: 95%;
    margin: 0 auto;
  }

  .dreams-interest-box img {
    width: 45px;
    height: 45px;
  }

  .dreams-interest-box span {
    text-align: left;
    font-size: 0.95rem;
  }

  .dreams-title {
    font-size: 1.7rem;
  }

  .dreams-description {
    font-size: 1.1rem;
  }
}
</style>

<!-- 🌟 Education -->
<section class="edu-sec">
  <div class="edu-sec-title">EDUCATION</div>

  <div id="edu-sec-gallery">
    <!-- Prev Arrow -->
    <div id="edu-sec-prev-btn" onclick="eduPrevPage()">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
      </svg>
    </div>

    <!-- Next Arrow -->
    <div id="edu-sec-next-btn" onclick="eduNextPage()">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z"/>
      </svg>
    </div>

    <!-- Carousel Pages -->
    <div class="edu-sec-page active">
      <div class="edu-sec-text">College</div>
      <div class="edu-sec-grid">
        <img src="/img/education/27.png" alt="College" onclick="eduShowZoom(this.src)">
      </div>
    </div>

    <div class="edu-sec-page">
      <div class="edu-sec-text">Senior High School</div>
      <div class="edu-sec-grid">
        <img src="/img/education/28.png" alt="Senior High School" onclick="eduShowZoom(this.src)">
      </div>
    </div>

    <div class="edu-sec-page">
      <div class="edu-sec-text">Middle School</div>
      <div class="edu-sec-grid">
        <img src="/img/education/29.png" alt="Middle School" onclick="eduShowZoom(this.src)">
      </div>
    </div>

    <div class="edu-sec-page">
      <div class="edu-sec-text">Elementary School</div>
      <div class="edu-sec-grid">
        <img src="/img/education/30.png" alt="Elementary" onclick="eduShowZoom(this.src)">
      </div>
    </div>

    <!-- Dots -->
    <div id="edu-sec-dots">
      <span class="edu-sec-dot active" onclick="eduShowPage(0)"></span>
      <span class="edu-sec-dot" onclick="eduShowPage(1)"></span>
      <span class="edu-sec-dot" onclick="eduShowPage(2)"></span>
      <span class="edu-sec-dot" onclick="eduShowPage(3)"></span>
    </div>
  </div>

  <!-- Zoom Overlay -->
  <div id="edu-sec-zoom-overlay" onclick="eduHideZoom()">
    <img id="edu-sec-zoomed-image" src="" alt="Zoomed Education">
  </div>
</section>

<style>
.edu-sec {
  position: relative;
  background-image: url('/img/logo/edu_bg.png');
  background-size: cover;
  background-position: center;
  height: 130vh;
  padding: 4rem 2rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  color: white;
  overflow: hidden;
}

.edu-sec-title {
  font-size: 2.0rem;
  font-weight: bold;
  margin-top: 1rem;
  text-align: center;
  color: white;
}

#edu-sec-gallery {
  width: 100%;
  max-width: 1000px;
  margin-top: 2rem;
  position: relative;
}

.edu-sec-page { display: none; }
.edu-sec-page.active { display: block; }

.edu-sec-grid {
  display: flex;
  justify-content: center;
  gap: 1rem;
  flex-wrap: wrap;
  padding: 1rem;
}

.edu-sec-grid img {
  justify-content: center;
  width: 400px;
  border-radius: 20px;
  cursor: pointer;
  transition: transform 1s;
}

.edu-sec-grid img:hover {
  transform: scale(1.05);
}

.edu-sec-text {
  text-align: center;
  font-size: 1.5rem;
  margin-bottom: 1rem;
}

#edu-sec-prev-btn, #edu-sec-next-btn {
  padding-top: 60px;
  position: absolute;
  top: 40%;
  transform: translateY(-50%);
  padding: 10px;
  cursor: pointer;
}

#edu-sec-prev-btn { left: 10px; }
#edu-sec-next-btn { right: 10px; }

#edu-sec-prev-btn svg, #edu-sec-next-btn svg {
  fill: white;
  width: 40px;
  height: 40px;
}

#edu-sec-dots {
  text-align: center;
  margin-top: 10px;
}

.edu-sec-dot {
    height: 20px;
    width: 20px;
    margin: 0 5px;
    background-color: #bbb;
    border-radius: 30%;
    display: inline-block;
    transition: background-color 0.3s;
    cursor: pointer;
}

.edu-sec-dot.active {
    background-color: #444;
}

/* Zoom Overlay */
#edu-sec-zoom-overlay {
  display: none;
  position: fixed;
  top: 0; left: 0; right: 0; bottom: 0;
  background-color: rgba(0, 0, 0, 0.9);
  z-index: 9999;
  justify-content: center;
  align-items: center;
}

#edu-sec-zoom-overlay img {
  max-width: 90%;
  max-height: 90%;
  border-radius: 10px;
}

/* mobile view */
@media (max-width: 768px) {
  .edu-sec {
    height: auto;
    padding: 2rem 1rem;
  }

  .edu-sec-title {
    font-size: 1.5rem;
    margin-top: 0.5rem;
  }

  .edu-sec-grid img {
    width: 90%;
    max-width: 320px;
  }

  #edu-sec-prev-btn,
  #edu-sec-next-btn {
    top: 50%;
    padding: 5px;
  }

  #edu-sec-prev-btn svg,
  #edu-sec-next-btn svg {
    width: 30px;
    height: 30px;
  }

  .edu-sec-text {
    font-size: 1.2rem;
  }

  .edu-sec-dot {
    height: 15px;
    width: 15px;
    margin: 0 3px;
  }

  #edu-sec-dots {
    margin-top: 8px;
  }

  #edu-sec-zoom-overlay img {
    max-width: 95%;
    max-height: 85%;
  }
}


</style>

<script>
let eduSecCurrentPage = 0;
const eduSecPages = document.querySelectorAll('.edu-sec-page');
const eduSecDots = document.querySelectorAll('.edu-sec-dot');

function eduShowPage(index) {
  eduSecPages.forEach((page, i) => {
    page.classList.toggle('active', i === index);
    eduSecDots[i].classList.toggle('active', i === index);
  });
  eduSecCurrentPage = index;
}

function eduNextPage() {
  eduSecCurrentPage = (eduSecCurrentPage + 1) % eduSecPages.length;
  eduShowPage(eduSecCurrentPage);
}

function eduPrevPage() {
  eduSecCurrentPage = (eduSecCurrentPage - 1 + eduSecPages.length) % eduSecPages.length;
  eduShowPage(eduSecCurrentPage);
}

function eduShowZoom(src) {
  const overlay = document.getElementById('edu-sec-zoom-overlay');
  const image = document.getElementById('edu-sec-zoomed-image');
  image.src = src;
  overlay.style.display = 'flex';
}

function eduHideZoom() {
  document.getElementById('edu-sec-zoom-overlay').style.display = 'none';
}

// Auto-switch every 4 seconds
setInterval(() => {
  eduNextPage();
}, 4000);

// Init
eduShowPage(0);

</script>



 <!-- Title & Description -->
<p class="work-title">WORK EXPERIENCE</p>
<p class="work-subtitle">
  Each role taught me something new, sharpened my skills, and fueled my growth.
</p>

<!-- Work Experience Section -->
<section class="work_bg">
  <div class="work-bg-wrapper">
    <div class="work-bg-content">
      <img src="/img/logo/w_one.png" alt="Delivery Icon" class="work-icon">
      <div class="work-bg-text">
        <h2>SES Delivery Service</h2>
        <p>Customer Transactions Encoder & Delivery Assistant. Ensured timely and secure delivery of packages and important documents to clients while maintaining high service quality.</p>
      </div>
    </div>

    <div class="work-bg-content">
      <img src="/img/logo/w_two.png" alt="Illustrator Icon" class="work-icon">
      <div class="work-bg-text">
        <h2>Digital Illustrator</h2>
        <p>Digital marketing strategies to reach more clients through websites and social media.</p>
      </div>
    </div>
  </div>
</section>

<!-- STYLES -->
<style>
/* Title & Subtitle */
.work-title {
  font-size: 2rem;
  margin: 5rem auto 2rem auto;
  text-align: center;
  max-width: 800px;
  line-height: 1.6;
  font-weight: bold;
}

.work-subtitle {
  font-size: 1.3rem;
  margin: 0 auto 4rem auto;
  text-align: center;
  max-width: 1000px;
  line-height: 1.6;
  padding: 0 20px;
}

/* Background Section */
.work_bg {
  background-image: url('/img/logo/work_bg.png');
  background-repeat: no-repeat;
  background-position: top center;
  background-size: auto;
  width: 100%;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  margin: 0;
  padding: 0;
}

/* Wrapper */
.work-bg-wrapper {
  padding-left: 90px;
  padding-right: 30px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 40px;
  max-width: 700px;
  width: 100%;
}

/* Experience Content */
.work-bg-content {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  gap: 20px;
}

.work-icon {
  width: 70px;
  height: auto;
  object-fit: contain;
  margin-top: 3px;
}

/* Text */
.work-bg-text {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.work-bg-text h2 {
  font-size: 1.5rem;
  margin: 0 0 0.3rem 0;
  font-weight: bold;
  text-align: left;
}

.work-bg-text p {
  font-size: 1rem;
  color: #555;
  margin: 0;
  line-height: 1.5;
  text-align: left;
}

/* Responsive */
@media (max-width: 768px) {
  .work-title {
    font-size: 1.5rem;
    margin: 3rem 1rem 1rem 1rem;
  }

  .work-subtitle {
    font-size: 1.1rem;
    margin: 0 1rem 3rem 1rem;
  }

  .work-bg-wrapper {
    padding: 20px;
    gap: 30px;
  }

  .work-bg-content {
    flex-direction: column;
    align-items: flex-start;
  }

  .work-icon {
    margin: 0 0 10px 0;
  }

  .work-bg-text h2 {
    font-size: 1.3rem;
  }

  .work-bg-text p {
    font-size: 0.95rem;
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
