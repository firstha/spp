<?php 
require 'functions_petugas.php';
require 'layouts/header.php';
$petugas = query("SELECT * FROM petugas ");
?>

	<h1>Daftar Petugas</h1><br><br>

	<a class="btn btn-hijau" href="tambah_petugas.php">Tambah data petugas</a><br><br><br><br>

	<table border="1" cellpadding="10" cellspacing="0">
		<thead>
			<tr>
			<th>NO</th>
			<th>ID PETUGAS</th>						
			<th>USERNAME</th>
			<th>PASSWORD</th>
			<th>NAMA PETUGAS</th>
			<th>LEVEL</th>
			<th>AKSI</th>
		</tr>
		</thead>

		<tbody>
			<?php $i = 1; ?>
		<?php foreach( $petugas as $row) : ?>

		<tr>
			<td><?= $i; ?></td>
			<td><?= $row["id_petugas"]; ?></td>
			<td><?= $row["username"]; ?></td>
			<td><?= $row["password"]; ?></td>
			<td><?= $row["nama_petugas"]; ?></td>
			<td><?= $row["level"]; ?></td>
			<td >
				<a href="edit_petugas.php?id_petugas=<?= $row["id_petugas"]; ?>" class="btn btn-kuning">Edit</a> |
				<a href="hapus_petugas.php?id_petugas=<?= $row["id_petugas"]; ?>" onclick="return confirm('Ingin Menghapus Data?')" class="btn btn-merah">Hapus</a>
			</td>
		</tr>	
		<?php $i++; ?>
	<?php endforeach; ?>
		</tbody>
		
	</table>
<?php 
require_once('layouts/footer.php');
?>