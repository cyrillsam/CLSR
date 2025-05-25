<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CLSR - Pencil and Paper</title>

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
  background: url('/img/logo/pencilandpaper.jpg') center center / cover no-repeat;
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
      Before pixels, there was this.<br>
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
  <p>Welcome to a raw, tactile creative experience with pencil and paper!
  Before the clicks, before the code this is where every idea takes its first breath. Pencil and paper offer an honest space for sketching, scribbling, and shaping thoughts with unfiltered expression. Here’s where the real magic begins:</p>
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
  PENCIL AND PAPER
  </p>  
</section>

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


