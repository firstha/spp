<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit;
}
include '../koneksi.php';

$sql = "SELECT pembayaran.id_pembayaran, siswa.nisn, siswa.nama, kelas.nama_kelas, spp.tahun, spp.nominal, pembayaran.tgl_bayar, pembayaran.bulan_dibayar, pembayaran.tahun_dibayar, pembayaran.jumlah_bayar, petugas.nama_petugas
    FROM pembayaran
    JOIN siswa ON pembayaran.nisn = siswa.nisn
    JOIN kelas ON siswa.id_kelas = kelas.id_kelas
    JOIN spp ON pembayaran.id_spp = spp.id_spp
    JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas
    ORDER BY pembayaran.tgl_bayar DESC";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>History Pembayaran SPP</title>
</head>
<style>
    *{
        font-family: sans-serif;
    }
    table {
      border-collapse: collapse;
      width: 100%;
    }
    table, th, td{
        border: 1px solid black;
    }
    th, td {
        padding: 8px;
        text-align: left;
    }
    th{
        background-color: #f2f2f2;
    }
</style>
<body>

    <h2>History Pembayaran SPP</h2><br>
    <div>
<!--     <a class="btn" href="tambah.php">Tambah Data</a><br> -->
    <a class="btn" href="../logout.php">Logout</a><br><br>
    <a href="entri_pembayaran.php">Tambah Pembayaran</a>
</div><br><br>
    <table>
        <tr>
            <th>ID Pembayaran</th>
            <th>NISN</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Tahun SPP</th>
            <th>Nominal SPP</th>
            <th>Tanggal Bayar</th>
            <th>Bulan Bayar</th>
            <th>Tahun Bayar</th>
            <th>Jumlah Bayar</th>
            <th>Petugas</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id_pembayaran"] . "</td>
                    <td>" . $row["nisn"] . "</td>
                    <td>" . $row["nama"] . "</td>
                    <td>" . $row["nama_kelas"] . "</td>
                    <td>" . $row["tahun"] . "</td>
                    <td>Rp " . number_format($row["nominal"]) . "</td>
                    <td>" . $row["tgl_bayar"] . "</td>
                    <td>" . $row["bulan_dibayar"] . "</td>
                    <td>" . $row["tahun_dibayar"] . "</td>
                    <td>Rp " . number_format($row["jumlah_bayar"]) . "</td>
                    <td>" . $row["nama_petugas"] . "</td>
                </tr>";
        }
        } else {
            echo "<tr><td colspan='11'>Tidak ada data pembayaran.</td></tr>";
        }
        ?>
    </table>
</body>
</html>