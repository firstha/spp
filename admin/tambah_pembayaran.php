<?php 
require 'functions_pembayaran.php';
require 'layouts/header.php';

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

<div class="container">
	<h1>Tambah Data Pembayaran</h1>
	<form action="" method="post" enctype="multipart/form-data">
				<label for="id_pembayaran">ID PEMBAYARAN :</label>
				<input type="number" name="id_pembayaran" id="id_pembayaran" required>
				<label for="id_petugas">ID PETUGAS :</label>
				<input type="number" name="id_petugas" id="id_petugas">
				<label for="nisn">NISN :</label>
				<input type="number" name="nisn" id="nisn">
				<label for="tgl_bayar">TANGGAL BAYAR :</label>
				<input type="date" name="tgl_bayar" id="tgl_bayar">
				<label for="bulan_dibayar">BULAN BAYAR :</label>
				<input type="text" name="bulan_dibayar" id="bulan_dibayar">
				<label for="tahun_dibayar">TAHUN BAYAR :</label>
				<input type="text" name="tahun_dibayar" id="tahun_dibayar">
				<label for="id_spp">ID SPP :</label>
				<input type="number" name="id_spp" id="id_spp">
				<label for="jumlah_bayar">JUMLAH BAYAR :</label>
				<input type="number" name="jumlah_bayar" id="jumlah_bayar">>
				<button type="submit" name="submit">Tambah Data!</button>>
	</form>
</div>

</body>
</html>