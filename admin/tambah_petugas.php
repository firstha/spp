<?php 
require 'functions_petugas.php';
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
	<h1>Tambah Data Petugas</h1>
	<form action="" method="post" enctype="multipart/form-data">
				<label for="id_petugas">ID PETUGAS :</label>
				<input type="number" name="id_petugas" id="id_petugas" required>
				<label for="username">USERNAME :</label>
				<input type="text" name="username" id="username">
				<label for="password">PASSWORD :</label>
				<input type="password" name="password" id="password">
				<label for="nama_petugas">NAMA PETUGAS :</label>
				<input type="text" name="nama_petugas" id="nama_petugas">
				<label for="level">Level :</label>
				<select name="level" id="level">
    				<option value="admin">Admin</option>
    				<option value="petugas">Petugas</option>
				</select>
				<button type="submit" name="submit">Tambah Data!</button>
	</form>
</div>

</body>
</html>