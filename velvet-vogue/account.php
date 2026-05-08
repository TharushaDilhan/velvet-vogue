<?php
session_start();

// Protect page: block direct access
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velvet Vogue - User Dashboard</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- ================= HEADER ================= -->
<header class="dashboard-header">
  <h1>Velvet Vogue</h1>
  <nav>
    <a href="index.php">Home</a>
    <a href="shop.php">Shop</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <a href="logout.php">Logout</a>
  </nav>
</header>

<!-- ================= MAIN ================= -->
<main class="dashboard-container">

  <h2>User Dashboard</h2>

  <!-- Profile Card -->
  <section class="profile-card">
    <h3>Profile Details</h3>

    <p><strong>Name:</strong>Tharusha Dilhan <?php echo htmlspecialchars($_SESSION["user"]); ?></p>
    <p><strong>Email:</strong> demo@velvetvogue.com</p>
    <p><strong>Membership:</strong> Regular</p>

    <div class="profile-actions">
      <button onclick="alert('Profile Updated (Demo)')">Edit Profile</button>
      <a href="logout.php">
        <button>Logout</button>
      </a>
    </div>
  </section>

  <!-- Order History -->
  <section class="order-history">
    <h3>Order History</h3>

    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Product</th>
            <th>Date</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>001</td>
            <td>Classic Black Blazer</td>
            <td>2025-12-01</td>
            <td>Delivered</td>
          </tr>
          <tr>
            <td>002</td>
            <td>Red Summer Dress</td>
            <td>2025-12-05</td>
            <td>Shipped</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

</main>

<!-- ================= FOOTER ================= -->
<footer>
  <p>&copy; 2025 Velvet Vogue. All rights reserved.</p>
</footer>

</body>
</html>

