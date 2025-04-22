<section class="hero-section" style="
  position: relative;
  min-height: 70vh;
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
      font-weight: 600;
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



