<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
include 'koneksi.php';
$nisn = $_GET['nisn'];
$result = mysqli_query($conn, "SELECT * FROM siswa WHERE nisn='$nisn'");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
    <h2 align="center" >Edit Data Siswa</h2><br><br>
    <form class="contact-form" action="proses_edit.php" method="POST">
        <input type="hidden" name="nisn" value="<?= $row['nisn'] ?>">
        <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $row['nama'] ?>" required><br>
        </div>
        <div class="form-group">
        <label>Kelas:</label>
        <input type="text" name="id_kelas" value="<?= $row['id_kelas'] ?>" required><br>
        </div>
        <button type="submit">Update</button>
    </form>
    </div>
</body>
</html>