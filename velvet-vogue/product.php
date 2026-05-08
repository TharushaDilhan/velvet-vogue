<?php
session_start();

// Demo product info
$product = [
    "name" => "Classic Black Blazer",
    "description" => "A premium-quality black blazer designed for modern formal wear. Perfect for office meetings, events, and special occasions.",
    "sizes" => ["S", "M", "L", "XL"],
    "price" => 99,
    "image" => "images/blazer.jpg"
];

// Check if user is logged in
$isLoggedIn = isset($_SESSION["user"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Velvet Vogue | <?php echo htmlspecialchars($product['name']); ?></title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    .details-container {
      max-width: 900px;
      margin: 50px auto;
      display: flex;
      gap: 40px;
      padding: 20px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }
    .details-container img {
      width: 400px;
      height: auto;
      border-radius: 10px;
    }
    .details-content {
      flex: 1;
    }
    .details-content h2 {
      margin-bottom: 15px;
      color: #333;
    }
    .details-content p {
      margin-bottom: 10px;
      line-height: 1.5;
    }
    .btn {
      padding: 12px 20px;
      background-color: #ff4081;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: 0.3s;
    }
    .btn:hover {
      background-color: #e73370;
    }
    a {
      color: #ff4081;
      text-decoration: none;
      font-weight: bold;
    }
    header nav a {
      margin-right: 15px;
    }
  </style>
</head>
<body>

<header>
  <h1>Velvet Vogue</h1>
  <nav>
    <a href="index.php">Home</a>
    <a href="shop.php">Shop</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <?php if($isLoggedIn): ?>
      <a href="account.php">Account</a>
      <a href="logout.php">Logout</a>
    <?php else: ?>
      <a href="login.php">Login</a>
    <?php endif; ?>
  </nav>
</header>

<main class="details-container">

  <img src="<?php echo $product['image']; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">

  <div class="details-content">
    <h2><?php echo htmlspecialchars($product['name']); ?></h2>
    <p><?php echo htmlspecialchars($product['description']); ?></p>
    <p><strong>Available Sizes:</strong> <?php echo implode(", ", $product['sizes']); ?></p>
    <p><strong>Price:</strong> $<?php echo $product['price']; ?></p>

    <button class="btn" onclick="addToCart()">Add to Cart (Demo)</button>
    <br><br>
    <a href="shop.php">← Back to Shop</a>
  </div>

</main>

<footer>
  <p>&copy; 2025 Velvet Vogue. All rights reserved.</p>
</footer>

<script>
function addToCart() {
  alert("Added to cart! (Demo)");
}
</script>

</body>
</html>

          

