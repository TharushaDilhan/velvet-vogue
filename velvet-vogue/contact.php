<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velvet Vogue - Contact Us</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
  <h1>Velvet Vogue</h1>
  <nav>
    <a href="index.html">Home</a>
    <a href="shop.html">Shop</a>
    <a href="about.html">About</a>
    <a href="contact.html" class="active">Contact</a>
    <a href="login.html">Login</a>
  </nav>
</header>

<main class="contact-page">

  <section class="contact-header">
    <h2>Contact Us</h2>
    <p>We’d love to hear from you. Reach out for inquiries, feedback, or support.</p>
  </section>

  <section class="contact-wrapper">

    <!-- CONTACT DETAILS -->
    <div class="contact-card">
      <h3>Get in Touch</h3>
      <p><strong>Email:</strong> contact@velvetvogue.com</p>
      <p><strong>Phone:</strong> +94 11 234 5678</p>
      <p><strong>Address:</strong><br>
        123 Fashion Street,<br>
        Colombo, Sri Lanka
      </p>
      <p class="note">Business Hours: Mon – Fri | 9.00 AM – 6.00 PM</p>
    </div>

    <!-- CONTACT FORM -->
    <div class="contact-card">
      <h3>Send a Message</h3>

      <form id="contactForm" class="contact-form">
        <label>Full Name</label>
        <input type="text" placeholder="Enter your full name" required>

        <label>Email</label>
        <input type="email" placeholder="Enter your email address" required>

        <label>Message</label>
        <textarea placeholder="Type your message here..." required></textarea>

        <button type="submit">Send Message</button>
      </form>
    </div>

  </section>

</main>

<footer>
  <p>&copy; 2025 Velvet Vogue. All rights reserved.</p>
</footer>

<script>
const contactForm = document.getElementById("contactForm");

contactForm.addEventListener("submit", function(e) {
  e.preventDefault();
  alert("Thank you! Your message has been sent successfully (Demo).");
  contactForm.reset();
});
</script>

</body>
</html>
