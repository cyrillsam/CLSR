
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<section class="pricing-section section-padding bg-light"  style="min-height: 100vh;">
  <div class="container-fluid custom-container">

    <p class="contact-intro">
      Got something in mind? Let’s bring it to life. Whether you’re looking for a commissioned artwork, a UI design for your brand, a full website experience, or you just want to collaborate, I'm here for it.
    </p>

    <div class="d-flex justify-content-center">
      <article class="pricing-item contact-card">
        <h1 class="contact-title">CONTACT US</h1>
        <p class="contact-subtext">Drop a message below, and let’s create something unforgettable.</p>

        <form class="contact-form">
          <div class="mb-4">
            <input type="text" class="form-control contact-input" placeholder="Enter your name">
          </div>
          <div class="mb-4">
            <input type="email" class="form-control contact-input" placeholder="Enter your email address">
          </div>
          <div class="mb-4">
            <input type="text" class="form-control contact-input" placeholder="Enter your mobile number">
          </div>
          <div class="mb-4">
            <textarea class="form-control contact-input" placeholder="Enter your message"></textarea>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-danger btn-sm contact-button">Submit</button>
          </div>
        </form>
      </article>
    </div>
    
  </div>
</section>

<style>
  * {
  font-family: 'Raleway', sans-serif;
}
/* Section background */
.bg-light {
  background-color: white !important;
}

/* Container adjustments */
.custom-container {
  max-width: 1400px;
  margin: 0 auto;
}

/* Intro paragraph */
.contact-intro {
  font-size: 1.5rem;
  margin-top: 3rem;
  margin-bottom: 5rem;
  text-align: center;
  max-width: 890px;
  margin-left: auto;
  margin-right: auto;
  line-height: 1.8;
}

/* Contact card container */
.contact-card {
  background-color: rgb(37, 37, 37);
  color: white;
  border-radius: 15px;
  max-width: 600px;
  width: 100%;
  min-height: 550px;
  height: auto;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  padding: 1.5rem;
  margin-bottom: 30px;
}

/* Title and subtext */
.contact-title {
  font-size: 1.5rem;
  margin-top: 1rem;
  font-weight: bold;
  text-align: center;
  color: white;
}

.contact-subtext {
  font-size: 1rem;
  margin-top: 10px;
  margin-bottom: 20px;
  text-align: center;
  color: white;
}

/* Form styling */
.contact-form {
  width: 100%;
  max-width: 500px;
  margin-top: 1rem;
}

.contact-input {
  padding: 20px;
}

.contact-input::placeholder {
  color: #888;
}

.contact-input:focus {
  outline: none;
  border-color: #ff4d4d;
  box-shadow: 0 0 0 0.2rem rgba(255, 77, 77, 0.25);
}

/* Button */
.contact-button {
  padding: 10px 20px;
  font-size: 0.875rem;
}
</style>
