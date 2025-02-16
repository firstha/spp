<?php 
require 'functions_spp.php';
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
	<h1>Tambah Data SPP</h1>
	<form action="" method="post" enctype="multipart/form-data">
				<label for="id_spp">ID SPP :</label>
				<input type="number" name="id_spp" id="id_spp" required>
				<label for="tahun">TAHUN :</label>
				<input type="number" name="tahun" id="tahun">
				<label for="nominal">NOMINAL :</label>
				<input type="number" name="nominal" id="nominal">
				<button type="submit" name="submit">Tambah Data!</button>
	</form>
</div>

</body>
</html>