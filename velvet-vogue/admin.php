<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velvet Vogue - Admin Panel</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- ================= HEADER ================= -->
<header class="admin-header">
  <h1>Velvet Vogue Admin Panel</h1>
  <nav>
    <a href="index.html">Home</a>
    <a href="shop.html">Shop</a>
    <a href="about.html">About</a>
    <a href="contact.html">Contact</a>
    <a href="login.html">Logout</a>
  </nav>
</header>

<!-- ================= MAIN ================= -->
<main class="admin-container">

  <h2>Dashboard</h2>

  <!-- ================= Add Product ================= -->
  <section class="admin-section">
    <h3>Add Product (Demo)</h3>
    <form class="admin-form">
      <div class="form-group">
        <label>Product Name</label>
        <input type="text" placeholder="Enter product name">
      </div>
      <div class="form-group">
        <label>Price</label>
        <input type="number" placeholder="Enter price">
      </div>
      <div class="form-group">
        <label>Category</label>
        <input type="text" placeholder="Enter category">
      </div>
      <button type="button" class="admin-btn">Add Product</button>
    </form>
  </section>

  <!-- ================= Manage Products ================= -->
  <section class="admin-section">
    <h3>Manage Products (Demo)</h3>
    <div class="product-cards">
      <div class="product-card">
        <h4>Classic Black Blazer</h4>
        <p>Price: LKR 9,500</p>
        <div class="card-actions">
          <button class="admin-btn edit">Edit</button>
          <button class="admin-btn delete">Delete</button>
        </div>
      </div>
      <div class="product-card">
        <h4>Red Summer Dress</h4>
        <p>Price: LKR 6,800</p>
        <div class="card-actions">
          <button class="admin-btn edit">Edit</button>
          <button class="admin-btn delete">Delete</button>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= View Orders ================= -->
  <section class="admin-section">
    <h3>View Orders (Demo)</h3>
    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Customer</th>
            <th>Product</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>001</td>
            <td>Jane Doe</td>
            <td>Classic Black Blazer</td>
            <td>Delivered</td>
          </tr>
          <tr>
            <td>002</td>
            <td>John Smith</td>
            <td>Red Summer Dress</td>
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

<!-- ================= JS ================= -->
<script>
document.querySelectorAll(".admin-btn").forEach(btn => {
  btn.addEventListener("click", () => {
    alert("Admin action performed (Demo)");
  });
});
</script>

</body>
</html>

