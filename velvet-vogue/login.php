<?php
session_start();
$error = "";

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Demo: match session from signup
    if(isset($_SESSION["user"]) && $username === $_SESSION["user"]) {
        $_SESSION["loggedin"] = true;
        header("Location: account.php");
        exit;
    } else {
        $error = "Invalid username";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velvet Vogue - Login</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    .auth-container {
      max-width: 400px;
      margin: 50px auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }
    .auth-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
    .auth-container input {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }
    .auth-container button {
      width: 100%;
      padding: 12px;
      background-color: #ff4081;
      color: #fff;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
    }
    .auth-container button:hover {
      background-color: #e73370;
    }
    .auth-container p {
      text-align: center;
      margin-top: 15px;
    }
    .auth-container p a {
      color: #ff4081;
      text-decoration: none;
      font-weight: bold;
    }
    .auth-container .message {
      text-align: center;
      margin-bottom: 15px;
      font-weight: bold;
    }
    .message.error { color: red; }
  </style>
</head>
<body>

<header>
  <h1 style="text-align:center; margin-top:30px;">Velvet Vogue</h1>
</header>

<main>
  <div class="auth-container">
    <?php if($error): ?>
      <div class="message error"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="post">
      <h2>Login</h2>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
  </div>
</main>

</body>
</html>


