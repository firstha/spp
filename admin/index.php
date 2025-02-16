<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit;
}
include 'koneksi.php';
include 'layouts/header.php';

$sql = "SELECT pembayaran.id_pembayaran, siswa.nisn, siswa.nama, kelas.nama_kelas, spp.tahun, spp.nominal, pembayaran.tgl_bayar, pembayaran.bulan_dibayar, pembayaran.tahun_dibayar, pembayaran.jumlah_bayar, petugas.nama_petugas
    FROM pembayaran
    JOIN siswa ON pembayaran.nisn = siswa.nisn
    JOIN kelas ON siswa.id_kelas = kelas.id_kelas
    JOIN spp ON pembayaran.id_spp = spp.id_spp
    JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas
    ORDER BY pembayaran.tgl_bayar DESC";
$result = $conn->query($sql);

?>
<h1 style="color: darkblue; margin-left: 50px;">HALAMAN ADMIN</h1><br>
    <h3 style="margin-left: 50px;">History Pembayaran SPP</h3> <a style="margin-left: 83%;" href="entri_pembayaran.php" class="btn btn-hijau">Entri data Pembayaran</a><br><br><br>
    <table>
        <thead>
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
        </thead>
        <tbody>
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
        </tbody>
    </table>
<?php 
require_once('layouts/footer.php');
?>