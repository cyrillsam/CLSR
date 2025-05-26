<section class="main-container">
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
    ART GALLERY
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
From high-definition galleries of my realistic and digital art, to interactive demos of user interfaces I’ve crafted, each feature is built to reflect both my artistic soul and my tech-savvy mind. 
  </p> 

  <!-- Horizontal Scrolling Carousel -->
  <div class="scroll-carousel-container">
    <div class="scroll-carousel-track">
      <img src="img/logo/trees.jpg" alt="trees">
      <img src="img/logo/Nicnnice.jpg" alt="Nicnnice">
      <img src="img/logo/Grindelwald.jpg" alt="Grindelwald">
      <img src="img/logo/flower.jpg" alt="flower">
      <img src="img/logo/Finn.jpg" alt="Finn">
      <img src="img/logo/miming.jpg" alt="couple">
      <!-- Duplicates for seamless loop -->
      <img src="img/logo/trees.jpg" alt="trees">
      <img src="img/logo/Nicnnice.jpg" alt="Nicnnice">
      <img src="img/logo/Grindelwald.jpg" alt="Grindelwald">
      <img src="img/logo/flower.jpg" alt="flower">
      <img src="img/logo/Finn.jpg" alt="Finn">
      <img src="img/logo/miming.jpg" alt="couple">
    </div>
  </div>

  
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
    ANIMATION
  </p>  
  <div class="video-container">
  <iframe 
    src="https://www.youtube.com/embed/x1YM2rkCOd4?autoplay=1&mute=1&rel=0&modestbranding=1" 
    allow="autoplay" allowfullscreen></iframe>
  <iframe 
    src="https://www.youtube.com/embed/_l_MGxSMr4Q?autoplay=1&mute=1&rel=0&modestbranding=1" 
    allow="autoplay" allowfullscreen></iframe>
  <iframe 
    src="https://www.youtube.com/embed/ArDXt75JMSo?autoplay=1&mute=1&rel=0&modestbranding=1" 
    allow="autoplay" allowfullscreen></iframe>


</div>

<style>
  .video-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    padding: 20px;
  }

  .video-container iframe {
    width: 360px;  /* width for portrait */
    height: 640px; /* height for portrait (9:16 ratio) */
    border: none;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.15);
  }

  @media (max-width: 400px) {
    .video-container iframe {
      width: 90vw;  /* Use 90% of the viewport width */
      height: calc(90vw * 1.77); /* Adjust the height based on the width (9:16 ratio) */
    }
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
    BEHIND THE CANVAS
  </p>  

<div style="
  display: flex; 
  align-items: center; 
  justify-content: center; 
  margin: 5rem auto; 
  max-width: 1000px; 
  gap: 40px;
  flex-wrap: wrap; /* Optional: Helps on smaller screens */
">
<img src="/img/logo/behindthecanvas.jpg" alt="Artist" class="behind-the-canvas-img" style="
  width: 40%; 
  height: auto; 
  border-radius: 12px; 
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
  flex-shrink: 0;
">
  
<p class="behind-the-canvas-text" style="
  font-size: 1.2rem; 
  text-align: left; 
  line-height: 1.8; 
  max-width: 500px; 
  padding: 10px;
">
    Not finding what you're looking for? <br>
    There's a whole universe waiting behind the button below. <br><br>
    From the fine lines of UI design to the vivid world of concept art, each category is a new chapter in the story I create. <br><br>
    Click ‘Explore more’ to reveal the category button, where you can navigate through and explore all features available on each page. <br><br>
    Because creativity doesn’t live in one place it flows, it expands. <br>
    And now, so can you.
  </p>
  <!-- 🔘 Explore More Button -->
  <a href="#explore" style="
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: rgb(80, 169, 228);
    color: #000;
    text-decoration: none;
    font-size: 1rem;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
  " 
  onmouseover="this.style.backgroundColor='rgb(60, 140, 200)'; this.style.color='white';"
  onmouseout="this.style.backgroundColor='rgb(80, 169, 228)'; this.style.color='#000';">
  Explore more
</a>
  </div>
</div>

  <style>
    html {
  scroll-behavior: smooth;
}
    /* Apply the Raleway font globally */
body, header, .desktop-nav-link, .desktop-category-toggle, 
#mobileToggle, h1, h2, h3, h4, h5, h6, p, span, 
.desktop-sub-menu li span, .desktop-sub-menu li a, 
.primary-nav-link, .sub-link, .modal-title, .category-toggle {
    font-family: 'Raleway', sans-serif; /* Apply the Raleway font to all text */
}
    @media (max-width: 768px) {
  .behind-the-canvas-img {
    width: 80% !important; /* Make it noticeably larger */
    margin-bottom: 20px;
  }

  .behind-the-canvas-text {
    text-align: center;
    font-size: 1rem;
  }
}
    .video-container {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin: 5rem auto;
      max-width: 1200px;
    }

    .video-container video {
      width: 30%;
      height: auto;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }
  </style>


  <style>
.scroll-carousel-container {
  overflow-x: auto;
  scroll-behavior: smooth;
  -webkit-overflow-scrolling: touch;
  cursor: grab;
  scrollbar-width: none; /* Hide scrollbar in Firefox */
}

.scroll-carousel-container::-webkit-scrollbar {
  display: none; /* Hide scrollbar in WebKit browsers */
}

.scroll-carousel-track {
  display: flex;
  align-items: center;
  gap: 30px;
  width: max-content;
  padding: 20px;
}
.scroll-carousel-track img {
  height: 400px;
  width: auto;
  object-fit: cover;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
  flex-shrink: 0;
  transition: transform 0.3s ease;
}

.scroll-carousel-track img:hover {
  transform: scale(1.05);
}
  @keyframes scroll-left {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-50%);
    }
  }
  </style>

<script>
  const container = document.querySelector('.scroll-carousel-container');
  let isDown = false;
  let startX;
  let scrollLeft;
  let autoScrollInterval;
  let velocity = 1;
  let lastMouseX;
  let isUserInteracting = false;
  let userTimeout;

  // Drag with momentum
  container.addEventListener('mousedown', (e) => {
    isDown = true;
    container.classList.add('active');
    startX = e.pageX;
    scrollLeft = container.scrollLeft;
    lastMouseX = e.pageX;
    pauseAutoScroll();
  });

  container.addEventListener('mouseup', () => {
    isDown = false;
    container.classList.remove('active');
    resumeAutoScrollAfterDelay();
  });

  container.addEventListener('mouseleave', () => {
    isDown = false;
    container.classList.remove('active');
  });

  container.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX;
    const walk = (x - startX) * 1.5;
    container.scrollLeft = scrollLeft - walk;
    velocity = x - lastMouseX;
    lastMouseX = x;
  });

  // Touch support
  container.addEventListener('touchstart', pauseAutoScroll);
  container.addEventListener('touchend', resumeAutoScrollAfterDelay);

  function autoScroll() {
    container.scrollLeft += velocity;
    if (container.scrollLeft >= container.scrollWidth - container.clientWidth) {
      container.scrollLeft = 0;
    }
  }

  function startAutoScroll() {
    autoScrollInterval = setInterval(() => {
      container.scrollLeft += 0.5; // Adjust for speed
      if (container.scrollLeft >= container.scrollWidth - container.clientWidth) {
        container.scrollLeft = 0;
      }
    }, 15); // Lower = smoother
  }

  function pauseAutoScroll() {
    clearInterval(autoScrollInterval);
    isUserInteracting = true;
  }

  function resumeAutoScrollAfterDelay() {
    clearTimeout(userTimeout);
    userTimeout = setTimeout(() => {
      isUserInteracting = false;
      startAutoScroll();
    }, 2500); // Resume after 2.5s
  }

  // Init
  startAutoScroll();
</script>


</section>
