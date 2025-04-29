<!-- Hero Section -->
<section class="hero-section" style="
  position: relative;
  min-height: 100vh;
  background: url('img/logo/background.jpg') center center / cover no-repeat;
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
      From Imagination to Reality,<br>
      Bringing Art to Life.
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
  padding-top: 60px;
  font-size: 1.5rem;
  text-align: center;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
  line-height: 1.8;
">
  <p>Welcome to the heart of my creative universe where code meets canvas, and pixels tell stories. This space is designed not just to showcase my work, but to immerse you in it.</p>
</section>





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

  /* Mobile logo - fit perfectly on mobile devices */
    @media (max-width: 700px) {
    .clsr-logo img {
      width: 100%; /* Logo will take up 100% of the container width */
      max-width: 300px; /* You can adjust this value based on how large you want it to appear on mobile */
      height: auto; /* Maintain aspect ratio */
    }
    }
    
    .primary-nav-link {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      font-size: 16px; /* Slightly smaller for mobile readability */
      font-weight: normal;
      color: #333;
      transition: all 0.3s ease;
      padding: 10px 16px;
      cursor: pointer;
      position: relative;
      width: 100%; /* Full width on mobile */
      text-decoration: none; /* Remove underline */
      border-radius: 8px;
      }
      
      .primary-nav-link:hover {
      background: linear-gradient(135deg, #5693c9, #3b6ea5);
      transform: translateX(5px);
      color: #fff;
      text-decoration: none; /* Remove underline */
      }
      
      /* Mobile Sub-links inside collapse menu */
      .sub-link {
      display: block;
      font-size: 15px;
      font-weight: normal;
      color: #333;
      text-decoration: none; /* Remove underline */
      padding: 10px 14px;
      margin-bottom: 8px;
      border-radius: 8px;
      transition: background 0.2s ease, transform 0.2s ease;
      }
      
      .sub-link:hover {
      background: linear-gradient(135deg, #5693c9, #3b6ea5);
      transform: translateX(5px);
      color: #fff;
      text-decoration: none; /* Remove underline */
      }
      
      /* Collapse Category Container */
      #categoryCollapse {
      background: #bbbaba; /* Gray background for container */
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.404); /* Add shadow for container */
      padding: 1rem;
      border-radius: 12px;
      }

      #categoryCollapse ul li {
      list-style: none;
      }
      
      /* Mobile Modal Specific */
      .modal-dialog-top {
      margin: 1rem auto; /* Keep modal near top for mobile */
      }
      
      .modal-content {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
      padding: 1rem;
      }
      
      /* Modal Header Centered and Clean */
      .modal-header {
      border-bottom: none;
      justify-content: center;
      position: relative;
      }
      
      .modal-title {
      font-weight: normal;
      color: #333;
      }
      
      /* Custom Close Button */
      .custom-close-btn {
      position: absolute;
      right: 1rem;
      top: 1rem;
      background: none;
      border: none;
      font-size: 1.5rem;
      opacity: 0.7;
      transition: opacity 0.3s ease;
      }
      
      .custom-close-btn:hover {
      opacity: 1;
      transform: scale(1.2);
      }
      
      /* Button inside collapse */
      .category-toggle {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      font-size: 16px;
      font-weight: normal;
      gap: 6px;
      padding: 10px 16px;
      border: none;
      background: none;
      cursor: pointer;
      color: #333;
      transition: all 0.3s ease;
      text-align: center;
      border-radius: 8px;
      text-decoration: none; /* Remove underline */
      }
      
      .category-toggle:hover {
      background: linear-gradient(135deg, #5693c9, #3b6ea5);
      transform: translateX(5px);
      color: #fff;
      text-decoration: none; /* Remove underline */
      }
      
      /* Mobile Adjustments */
      @media (max-width: 768px) {
      .modal-dialog {
        max-width: 90%;
      }
      }
      
      /* End of Mobile Nav Buttons */

</style>



