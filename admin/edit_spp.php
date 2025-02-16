<?php 
require 'functions_spp.php';
require 'layouts/header.php';

$id_spp = $_GET["id_spp"];
$dta = query("SELECT * FROM spp WHERE id_spp = $id_spp")[0];

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
	<h1>Ubah Data spp</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id_spp" value="<?= $dta["id_spp"]; ?>">
				<label for="tahun">tahun :</label>
				<input type="number" name="tahun" id="tahun" required value="<?= $dta["tahun"]; ?>">
				<label for="nominal">nominal :</label>
				<input type="number" name="nominal" id="nominal" value="<?= $dta["nominal"]; ?>">
				<button type="submit" name="submit">Ubah Data!</button>
	</form>
</div>

</body>
</html>