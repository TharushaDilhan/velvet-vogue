
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velvet Vogue - Checkout</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- ================= HEADER ================= -->
<header>
  <h1>Velvet Vogue</h1>
  <nav>
    <a href="index.html">Home</a>
    <a href="shop.html">Shop</a>
    <a href="about.html">About</a>
    <a href="contact.html">Contact</a>
    <a href="login.html">Login</a>
  </nav>
</header>

<!-- ================= MAIN CONTENT ================= -->
<main class="checkout-container">

  <h2>Checkout</h2>
  <p>Fill in your billing & shipping details (Demo)</p>

  <div class="checkout-form-container">

    <!-- Billing Form -->
    <form id="checkoutForm">
      <div class="form-group">
        <label for="fullName">Full Name</label>
        <input type="text" id="fullName" placeholder="Enter your full name" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Enter your email" required>
      </div>

      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" id="address" placeholder="Street Address" required>
      </div>

      <div class="form-group">
        <label for="city">City</label>
        <input type="text" id="city" placeholder="City" required>
      </div>

      <div class="form-group">
        <label for="postal">Postal Code</label>
        <input type="text" id="postal" placeholder="Postal Code" required>
      </div>

      <div class="form-group">
        <label for="payment">Payment Method</label>
        <select id="payment" required>
          <option value="">Select Payment</option>
          <option value="credit">Credit Card</option>
          <option value="paypal">PayPal</option>
          <option value="cod">Cash on Delivery</option>
        </select>
      </div>

      <button type="submit" class="btn">Place Order</button>
    </form>

    <!-- Order Summary (Demo) -->
    <div class="order-summary">
      <h3>Order Summary</h3>
      <p>Classic Black Blazer - LKR 9,500</p>
      <p>Red Summer Dress - LKR 6,800</p>
      <hr>
      <p><strong>Total: LKR 16,300</strong></p>
    </div>

  </div>
</main>

<!-- ================= FOOTER ================= -->
<footer>
  <p>&copy; 2025 Velvet Vogue. All rights reserved.</p>
</footer>

<!-- ================= JS ================= -->
<script>
const checkoutForm = document.getElementById("checkoutForm");
checkoutForm.addEventListener("submit", function(e) {
  e.preventDefault();
  alert("Order placed successfully! (Demo)");
  checkoutForm.reset();
});
</script>

</body>
</html>
