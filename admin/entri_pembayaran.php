<?php 
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['level']) || ($_SESSION['level'] != 'admin' && $_SESSION['level'] != 'petugas')) {
    die("Akses ditolak! hanya admin dan petugas yang dapat mengakses.");
}
include 'koneksi.php';
include 'layouts/header.php';

$siswaQuery = "SELECT nisn, nama FROM siswa ORDER BY nama";
$siswaResult = $conn->query($siswaQuery);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$nisn = $_POST['nisn'];
	$tgl_bayar = $_POST['tgl_bayar'];
	$bulan_dibayar = $_POST['bulan_dibayar'];
	$tahun_dibayar = $_POST['tahun_dibayar'];
	$jumlah_bayar = $_POST['jumlah_bayar'];
	$id_petugas = $_SESSION['id_petugas'];

	$sppQuery = "SELECT id_spp FROM siswa WHERE nisn = '$nisn'";
	$sppResult = $conn->query($sppQuery);
	$spp = $sppResult->fetch_assoc();
	$id_spp = $spp['id_spp'];

	$insertQuery = "INSERT INTO pembayaran (id_petugas, nisn, tgl_bayar, bulan_dibayar, tahun_dibayar, id_spp, jumlah_bayar) VALUES ('$id_petugas', '$nisn', '$tgl_bayar', '$bulan_dibayar', '$tahun_dibayar', '$id_spp', '$jumlah_bayar')";

	if ($conn->query($insertQuery) === TRUE) {
		echo "<script>alert('Pembayaran berhasil ditambahkan!'); window.location='index.php';</script>";
	}else {
		echo "Error: " . $conn->error;
	}
}

 ?>
 <div class="container">
 	<h2>Entri Pembayaran SPP</h2>
 	<form method="post">
 		<label>Pilih Siswa:</label>
 		<select name="nisn" required>
            <option value="">-- Pilih Siswa --</option>
            <?php while ($siswa = $siswaResult->fetch_assoc()) { ?>
                <option value="<?= $siswa['nisn'] ?>"><?= $siswa['nama'] ?></option> 
            <?php } ?>
        </select><br><br>

 		<label>Tanggal Bayar</label>
 		<input type="date" name="tgl_bayar" required><br><br>
 		<label>Bulan Bayar</label>
 		<input type="text" name="bulan_dibayar" placeholder="Contoh: Januari" required><br><br>
 		<label>Tahun Bayar</label>
 		<input type="text" name="tahun_dibayar" required><br><br>
 		<label>Jumlah Bayar</label>
 		<input type="number" name="jumlah_bayar" required><br><br>
 		<button type="submit">Simpan Pembayaran</button>
 	</form>
 </div>
 </body>
 </html>