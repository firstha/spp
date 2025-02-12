<?php 
require 'functions.php';

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
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Siswa</title>
</head>
<body>

	<h1>Ubah Data Siswa</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="nisn" value="<?= $dta["nisn"]; ?>">
		<ul>
			<li>
				<label for="nis">NIS :</label>
				<input type="number" name="nis" id="nis" required value="<?= $dta["nis"]; ?>">
			</li>
			<li>
				<label for="nama">NAMA :</label>
				<input type="text" name="nama" id="nama" value="<?= $dta["nama"]; ?>">
			</li>
			<li>
				<label for="id_kelas">ID KELAS :</label>
				<input type="number" name="id_kelas" id="id_kelas" value="<?= $dta["id_kelas"]; ?>">
			</li>
			<li>
				<label for="alamat">ALAMAT :</label>
				<textarea name="alamat" id="alamat" value="<?= $dta["alamat"]; ?>"></textarea>
			</li>
			<li>
				<label for="no_telp">NO TELP :</label>
				<input type="number" name="no_telp" id="no_telp" value="<?= $dta["no_telp"]; ?>">
			</li>
			<li>
				<label for="id_spp">ID SPP :</label> 
				<input type="number" name="id_spp" id="id_spp">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>
	</form>

</body>
</html>