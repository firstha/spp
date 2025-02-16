<?php 
require 'functions_petugas.php';
require 'layouts/header.php';

$id_petugas = $_GET["id_petugas"];
$dta = query("SELECT * FROM petugas WHERE id_petugas = $id_petugas")[0];

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
	<h1>Ubah Data petugas</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id_petugas" value="<?= $dta["id_petugas"]; ?>">
				<label for="username">USERNAME :</label>
				<input type="text" name="username" id="username" required value="<?= $dta["username"]; ?>">
				<label for="password">PASSWORD :</label>
				<input type="password" name="password" id="password" value="<?= $dta["password"]; ?>">
				<label for="nama_petugas">NAMA PETUGAS :</label>
				<input type="text" name="nama_petugas" id="nama_petugas" value="<?= $dta["nama_petugas"]; ?>">
				<label for="level">level :</label>
				<select name="level" id="level">
				    <option value="admin" <?= ($dta['level'] == 'admin') ? 'selected' : '' ?>>Admin</option>
				    <option value="petugas" <?= ($dta['level'] == 'petugas') ? 'selected' : '' ?>>Petugas</option>
				</select>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>
	</form>
</div>

</body>
</html>