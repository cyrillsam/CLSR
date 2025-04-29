<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CLSR - Animation</title>

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
  background: url('/img/logo/animation-page.PNG') center center / cover no-repeat;
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
    ">
      Motion meets meaning<br>
    </h1>
    <a href="#explore" style="
      display: inline-block;
      margin-top: 20px;
      padding: 12px 24px;
      background-color: rgb(80, 169, 228);
      color: black;
      text-decoration: none;
      font-size: 1rem;
      border-radius: 5px;
      transition: background-color 0.3s, color 0.3s;
    "
    onmouseover="this.style.backgroundColor='rgb(60, 140, 200)'; this.style.color='white';"
    onmouseout="this.style.backgroundColor='rgb(80, 169, 228)'; this.style.color='black';">
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
  <p>Welcome to a dynamic browsing experience with my cutting-edge page animations! 
Designed to elevate user interaction, my page animations help create a seamless, visually engaging journey as you explore different sections of our website. 
Here’s how the magic happens:</p>
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
  ANIMATION
  </p>  
  
<section id="video-gallery" style="position: relative;">

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

<!-- Video Pages -->
<div id="video-pages" style="text-align: center;">

  <!-- Page 1 -->
  <div class="video-page active">
    <div class="video-grid" style="justify-content: center;gap: 70px;">
      <iframe src="https://www.youtube.com/embed/x1YM2rkCOd4?autoplay=1&mute=1&rel=0&modestbranding=1" allow="autoplay" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/embed/_l_MGxSMr4Q?autoplay=1&mute=1&rel=0&modestbranding=1" allow="autoplay" allowfullscreen></iframe>
    </div>
  </div>

  <!-- Page 2 -->
  <div class="video-page">
    <div class="video-grid" style="justify-content: center; gap: 70px;">
      <iframe src="https://www.youtube.com/embed/ArDXt75JMSo?autoplay=1&mute=1&rel=0&modestbranding=1" allow="autoplay" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/embed/lNEzGg3bBUM?autoplay=1&mute=1&rel=0&modestbranding=1" allow="autoplay" allowfullscreen></iframe>
    </div>
  </div>

  <!-- Page 3 -->
  <div class="video-page">
    <div class="video-grid" style="justify-content: center;gap: 70px;">
      <iframe src="https://www.youtube.com/embed/rov3NQMs7zs?autoplay=1&mute=1&rel=0&modestbranding=1" allow="autoplay" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/embed/2InP_cYeb7w?autoplay=1&mute=1&rel=0&modestbranding=1" allow="autoplay" allowfullscreen></iframe>
    </div>
  </div>

  <!-- Page 4 -->
  <div class="video-page">
    <div class="video-grid" style="justify-content: center;gap: 70px;">
      <iframe src="https://www.youtube.com/embed/ChADWtFcyEE?autoplay=1&mute=1&rel=0&modestbranding=1" allow="autoplay" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/embed/ETGg4OTXnZM?autoplay=1&mute=1&rel=0&modestbranding=1" allow="autoplay" allowfullscreen></iframe>
    </div>
  </div>

  <!-- Page 5 -->
  <div class="video-page">
    <div class="video-grid" style="justify-content: center; gap: 70px;">
      <iframe src="https://www.youtube.com/embed/K-ztjxePW0w?autoplay=1&mute=1&rel=0&modestbranding=1" allow="autoplay" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/embed/6MGE-yLHsy0?autoplay=1&mute=1&rel=0&modestbranding=1" allow="autoplay" allowfullscreen></iframe>
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
</div>

</section>

<style>
  /* Base Arrow Button Styles */
  #prevBtn, #nextBtn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    z-index: 10;
    padding: 10px;
    border-radius: 50%;
    transition: background 0.3s ease;
  }



  #prevBtn svg, #nextBtn svg {
    width: 40px;
    height: 40px;
  }

  #prevBtn {
    left: 10px;
  }

  #nextBtn {
    right: 10px;
  }

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    #prevBtn, #nextBtn {
      top: auto;
      bottom: 10px;
      transform: none;
    }

    #prevBtn {
      left: 20%;
    }

    #nextBtn {
      right: 20%;
    }

    #prevBtn svg, #nextBtn svg {
      width: 28px;
      height: 28px;
    }
  }

  @media (max-width: 480px) {
    #prevBtn {
      left: 10%;
    }

    #nextBtn {
      right: 10%;
    }
  }
</style>


<p style="
        font-size: 1.5rem; 
        padding-bottom: 50px;
        padding-top: 50px;
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
    BEHIND THE MOTION
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
Every animation, every transition you see here was crafted for smooth, cinematic motion. 
I mix the power of design with storytelling tools to breathe life into pixels.

<div class="row text-center justify-content-center" style="padding-bottom: 50px;">
  <div class="col-md-6 d-flex flex-column align-items-center mb-4">
    <div class="text-center" style="min-width: 120px;">
      <img src="/img/logo/capcut.png" alt="CapCut" style="width: 150px; height: auto; margin-bottom: 10px; margin-top: 15px;">
      <p style="font-size: 1.1rem; margin: 0; text-align: center; font-weight: bold;">CapCut</p>
      <p style="font-size: 1.1rem; margin: 0; text-align: center; max-width: 250px; padding-top: 20px;">CapCut is where still frames move. From scrolls to cinema style cuts, I craft stories with rhythm and style.</p>
    </div>
  </div>
  <div class="col-md-6 d-flex flex-column align-items-center mb-4">
    <div class="text-center" style="min-width: 120px;">
      <img src="/img/logo/canva.png" alt="Canva" style="width: 150px; height: auto; margin-bottom: 10px; margin-top: 15px;">
      <p style="font-size: 1.1rem; margin: 0; text-align: center; font-weight: bold;">Canva</p>
      <p style="font-size: 1.1rem; margin: 0; text-align: center; max-width: 250px; padding-top: 20px;">Canva is where my ideas take shape effortlessly. Clean layouts, sharp type, and bold visuals, all without the struggle.</p>
    </div>
  </div>
</div>
</section>


<!-- Styles -->
<style>



.video-grid {
  display: flex;
  gap: 20px;
  justify-content: center;
  flex-wrap: wrap;
}

.video-grid iframe {
  width: 360px;
  height: 640px;
  object-fit: cover; /* Ensures contents behave properly */
  border-radius: 12px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.15);
  border: none;
}

/* Each page of videos */
.video-page {
  display: none;
  
}

.video-page.active {
  display: block;
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
  background-color: #555;
}

/* 🚫 NO scaling for mobile: keep original 360x640 */
@media (max-width: 768px) {
  .video-grid iframe {
    width: 360px;
    height: 640px;
  }
}
</style>


<!-- JavaScript -->
<script>
let currentPage = 0;

function showPage(index) {
const pages = document.querySelectorAll('.video-page');
const dots = document.querySelectorAll('.dot');

if (index < 0) index = pages.length - 1;
if (index >= pages.length) index = 0;

pages.forEach(page => page.classList.remove('active'));
dots.forEach(dot => dot.classList.remove('active'));

pages[index].classList.add('active');
dots[index].classList.add('active');

currentPage = index;
}

function nextPage() {
showPage(currentPage + 1);
}

function prevPage() {
showPage(currentPage - 1);
}
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

<?php include 'home/pricing-section.php'; ?>


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
