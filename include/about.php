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
    font-size: clamp(1.8rem, 5vw, 3rem);
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
    padding-right: 40px;
    max-width: 500px;
    text-align: center;
    transition: all 0.4s ease;
  }

  .profile-image img {
    width: 100%;
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
      max-width: 80%;
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
