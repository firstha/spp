<?php 
require 'functions_pembayaran.php';
require 'layouts/header.php';

$id_pembayaran = $_GET["id_pembayaran"];
$dta = query("SELECT * FROM pembayaran WHERE id_pembayaran = $id_pembayaran")[0];

if( isset($_POST["submit"]) ) {
	if( ubah($_POST) > 0 ) {
		echo "<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>";
	} else {
		echo "<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>";
	}
}
?>
	<div class="container">
	<h1>Ubah Data pembayaran</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id_pembayaran" value="<?= $dta["id_pembayaran"]; ?>">
				<label for="id_petugas">id_petugas :</label>
				<input type="number" name="id_petugas" id="id_petugas" required value="<?= $dta["id_petugas"]; ?>">
				<label for="nisn">nisn :</label>
				<input type="number" name="nisn" id="nisn" value="<?= $dta["nisn"]; ?>">
				<label for="tgl_bayar">TANGGAL BAYAR :</label>
				<input type="date" name="tgl_bayar" id="tgl_bayar" value="<?= $dta["tgl_bayar"]; ?>">
				<label for="bulan_dibayar">BULAN BAYAR :</label>
				<input type="text" name="bulan_dibayar" id="bulan_dibayar" value="<?= $dta["bulan_dibayar"]; ?>">
				<label for="tahun_dibayar">TAHUN BAYAR :</label>
				<input type="text" name="tahun_dibayar" id="tahun_dibayar" value="<?= $dta["tahun_dibayar"]; ?>">
				<label for="id_spp">ID SPP :</label> 
				<input type="number" name="id_spp" id="id_spp" value="<?= $dta["id_spp"]; ?>">
				<label for="jumlah_bayar">JUMLAH BAYAR :</label> 
				<input type="number" name="jumlah_bayar" id="jumlah_bayar" value="<?= $dta["jumlah_bayar"]; ?>">
				<button type="submit" name="submit">Ubah Data!</button>
	</form>
	</div>

</body>
</html>