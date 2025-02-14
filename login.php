<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    $query_petugas = "SELECT * FROM petugas WHERE username='$username' AND password='$password'";
    $result_petugas = $conn->query($query_petugas);

    if ($result_petugas->num_rows > 0) {
        $data = $result_petugas->fetch_assoc();
        $_SESSION['id_petugas'] = $data['id_petugas'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama_petugas'] = $data['nama_petugas'];
        $_SESSION['level'] = $data['level'];

        if ($data['level'] == 'admin') {
            header("Location: admin/index.php");
        } else {
            header("Location: petugas/index.php");
        }
        exit;
    }

    $query_siswa = "SELECT * FROM siswa WHERE nis='$username' AND nis='$password'";
    $result_siswa = $conn->query($query_siswa);

    if ($result_siswa->num_rows > 0) {
        $data = $result_siswa->fetch_assoc();
        $_SESSION['nisn'] = $data['nisn'];
        $_SESSION['username'] = $data['nis'];
        $_SESSION['level'] = 'siswa';

        header("Location: index.php");
        exit;
    }

    echo "<script>alert('Login gagal! username atau password salah.'); window.location='login.php';</script>";
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
    <form class="contact-form" method="POST">
        <div class="form-group">
        <label>Username: (NIS untuk siswa)</label>
        <input type="text" name="username" required><br>
        </div>
        <div class="form-group">
        <label>Password: (NIS untuk siswa)</label>
        <input type="password" name="password" required><br>
        </div>
        <button type="submit">Login</button>
    </form>
    </div>
</body>
</html>