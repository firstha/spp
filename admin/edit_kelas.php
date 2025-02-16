<?php 
require 'functions_kelas.php';
require 'layouts/header.php';

$id_kelas = $_GET["id_kelas"];
$dta = query("SELECT * FROM kelas WHERE id_kelas = $id_kelas")[0];

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
	<h1>Edit Data Kelas</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id_kelas" value="<?= $dta["id_kelas"]; ?>">
				<label for="nama_kelas">NAMA KELAS :</label>
				<input type="text" name="nama_kelas" id="nama_kelas" required value="<?= $dta["nama_kelas"]; ?>">
				<label for="kompetensi_keahlian">KOMPETENSI KEAHLIAN :</label>
				<input type="text" name="kompetensi_keahlian" id="kompetensi_keahlian" required value="<?= $dta["kompetensi_keahlian"]; ?>">
				<button type="submit" name="submit">Ubah Data!</button>
	</form>
	</div>

</body>
</html>