<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM petugas WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
        echo "Login gagal!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
    <h2 align="center">Login</h2><br><br>
    <form class="contact-form" method="POST" action="">
        <div class="form-group">
        <label>Username:</label>
        <input type="text" name="username" required><br>
        </div>
        <div class="form-group">
        <label>Password:</label>
        <input type="password" name="password" required><br>
        </div>
        <button type="submit">Login</button>
    </form>
    </div>
</body>
</html>