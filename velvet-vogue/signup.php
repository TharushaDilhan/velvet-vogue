<?php
session_start();
$error = "";
$success = "";

// Handle signup form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST["fullname"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Simple demo check
    if ($fullname && $email && $password) {
        // Save in session (demo)
        $_SESSION["user"] = $fullname;
        $_SESSION["email"] = $email;

        $success = "Signup successful! Redirecting to login page...";
        header("refresh:2;url=login.php"); // Redirect after 2 seconds
    } else {
        $error = "All fields are required!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velvet Vogue - Sign Up</title>
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
    .message.success { color: green; }
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
    <?php if($success): ?>
      <div class="message success"><?php echo $success; ?></div>
    <?php endif; ?>

    <form method="post">
      <h2>Sign Up</h2>
      <input type="text" name="fullname" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Sign Up</button>
    </form>

    <p>Already have an account? <a href="login.php">Login</a></p>
  </div>
</main>

</body>
</html>





