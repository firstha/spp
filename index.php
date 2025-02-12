<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM siswa");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>

    table {
      border-collapse: collapse;
      width: 100%;
    }
    .center{
        text-align: center;
    }
    .btn {
        padding: 5px;
        color: #fff;
        text-decoration: none;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s ease;
    }
    .btn:hover{
        background-color: #0056b3;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #DDD;
    }
    th{
        background-color: #D6EEEE;
    }

    tr:hover {
        background-color: #D6EEEE;
    }
</style>

<body>

    <h2 class="center">Data Siswa</h2><br>
    <div>
    <a class="btn" href="tambah.php">Tambah Data</a>
    <a class="btn" href="logout.php">Logout</a>
</div><br><br>
    <table border="1">
        <tr>
            <th>NISN</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['nisn'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['id_kelas'] ?></td>
            <td>
                <a href="edit.php?nisn=<?= $row['nisn'] ?>">Edit</a> |
                <a href="hapus.php?nisn=<?= $row['nisn'] ?>" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>