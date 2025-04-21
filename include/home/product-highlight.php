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
  <img src="/img/logo/me.jpg" alt="Artist" style="
    width: 40%; 
    height: auto; 
    border-radius: 12px; 
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    flex-shrink: 0;
  ">
  
  <p style="
    font-size: 1.2rem; 
    text-align: left; 
    line-height: 1.8; 
    max-width: 500px; 
    padding: 10px;
  ">
    Not finding what you're looking for? <br>
    There's a whole universe waiting behind the button below. <br><br>
    From the fine lines of UI design to the vivid world of concept art, each category is a new chapter in the story I create. <br><br>
    Click ‘Explore more’ and unlock more of what inspires, designs, and defines my creative journey. <br><br>
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
    overflow: hidden;
    width: 100%;
    height: auto;
    position: relative;
    padding: 20px 0;
  }

  .scroll-carousel-track {
    display: flex;
    align-items: center;
    gap: 30px;
    width: max-content;
    animation: scroll-left 40s linear infinite;
  }

  .scroll-carousel-track img {
    height: 500px;
    width: auto;
    object-fit: contain;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
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
</section>
