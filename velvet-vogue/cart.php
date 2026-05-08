<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velvet Vogue - Shopping Cart</title>
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
<main class="cart-container">

  <h2>Your Shopping Cart</h2>

  <div class="cart-items">

    <!-- Single Product Item -->
    <div class="cart-item">
      <img src="images/product1.jpg" alt="Classic Black Blazer">
      <div class="cart-item-details">
        <h3>Classic Black Blazer</h3>
        <p>Price: LKR 9,500</p>
        <label>Quantity: 
          <input type="number" value="1" min="1">
        </label>
      </div>
      <button class="remove-btn">Remove</button>
    </div>

    <div class="cart-item">
      <img src="images/product6.jpg" alt="Red Summer Dress">
      <div class="cart-item-details">
        <h3>Red Summer Dress</h3>
        <p>Price: LKR 6,800</p>
        <label>Quantity: 
          <input type="number" value="1" min="1">
        </label>
      </div>
      <button class="remove-btn">Remove</button>
    </div>

  </div>

  <!-- Cart Summary -->
  <div class="cart-summary">
    <h3>Order Summary</h3>
    <p>Subtotal: LKR 16,300</p>
    <p>Shipping: LKR 500</p>
    <hr>
    <p><strong>Total: LKR 16,800</strong></p>
    <button id="checkoutBtn" class="btn">Proceed to Checkout</button>
  </div>

</main>

<!-- ================= FOOTER ================= -->
<footer>
  <p>&copy; 2025 Velvet Vogue. All rights reserved.</p>
</footer>

<!-- ================= JS ================= -->
<script>
const checkoutBtn = document.getElementById("checkoutBtn");
checkoutBtn.addEventListener("click", function() {
  alert("Redirecting to Checkout page (Demo)");
  window.location.href = "checkout.html";
});

document.querySelectorAll('.remove-btn').forEach(button => {
  button.addEventListener('click', function() {
    alert("Item removed from cart (Demo)");
  });
});
</script>

</body>
</html>

