<?php
include 'koneksi.php';
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];

$query = "INSERT INTO siswa (nisn, nama, id_kelas) VALUES ('$nisn', '$nama', '$id_kelas')";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Gagal menyimpan data";
}
?>