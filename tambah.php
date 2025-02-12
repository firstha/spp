<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Tambah Data Siswa</h2>
    <form class="contact-form" method="POST">
        <div class="form-group">
        <label>NISN:</label>
        <input type="text" name="nisn" required><br>
        </div>
        <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>
        </div>
        <div class="form-group">
        <label>Kelas:</label>
        <input type="text" name="id_kelas" required><br>
        </div>
        <button type="submit">Simpan</button>
    </form>
    </div>
</body>
</html>

<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];

$query = "INSERT INTO siswa (nisn, nama, id_kelas) VALUES ('$nisn', '$nama', '$id_kelas')";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Gagal menyimpan data";
}
}
?>