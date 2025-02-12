<?php 
require 'functions.php';

if( isset($_POST["submit"]) ) {
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan');
				document.location.href = 'index.php';
			</script>
		";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Pembayaran</title>
</head>
<body>
	<h1>Tambah Data Pembayaran</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="id_pembayaran">ID PEMBAYARAN :</label>
				<input type="number" name="id_pembayaran" id="id_pembayaran" required>
			</li>
			<li>
				<label for="id_petugas">ID PETUGAS :</label>
				<input type="number" name="id_petugas" id="id_petugas">
			</li>
			<li>
				<label for="nisn">NISN :</label>
				<input type="number" name="nisn" id="nisn">
			</li>
			<li>
				<label for="tgl_bayar">TANGGAL BAYAR :</label>
				<input type="date" name="tgl_bayar" id="tgl_bayar">
			</li>
			<li>
				<label for="bulan_dibayar">BULAN BAYAR :</label>
				<input type="text" name="bulan_dibayar" id="bulan_dibayar">
			</li>
			<li>
				<label for="tahun_dibayar">TAHUN BAYAR :</label>
				<input type="text" name="tahun_dibayar" id="tahun_dibayar">
			</li>
			<li>
				<label for="id_spp">ID SPP :</label>
				<input type="number" name="id_spp" id="id_spp">
			</li>
			<li>
				<label for="jumlah_bayar">JUMLAH BAYAR :</label>
				<input type="number" name="jumlah_bayar" id="jumlah_bayar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>
	</form>

</body>
</html>