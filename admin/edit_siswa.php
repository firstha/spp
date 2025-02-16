<?php 
require 'functions_siswa.php';
require 'layouts/header.php';

$nisn = $_GET["nisn"];
$dta = query("SELECT * FROM siswa WHERE nisn = $nisn")[0];

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
	<h1>Ubah Data Siswa</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="nisn" value="<?= $dta["nisn"]; ?>">
				<label for="nis">NIS :</label>
				<input type="number" name="nis" id="nis" required value="<?= $dta["nis"]; ?>">
				<label for="nama">NAMA :</label>
				<input type="text" name="nama" id="nama" value="<?= $dta["nama"]; ?>">
				<label for="id_kelas">ID KELAS :</label>
				<input type="number" name="id_kelas" id="id_kelas" value="<?= $dta["id_kelas"]; ?>">
				<label for="alamat">ALAMAT :</label>
				<textarea name="alamat" id="alamat" value="<?= $dta["alamat"]; ?>"></textarea>
				<label for="no_telp">NO TELP :</label>
				<input type="number" name="no_telp" id="no_telp" value="<?= $dta["no_telp"]; ?>">
				<label for="id_spp">ID SPP :</label> 
				<input type="number" name="id_spp" id="id_spp">
				<button type="submit" name="submit">Ubah Data!</button>
	</form>
</div>

</body>
</html>