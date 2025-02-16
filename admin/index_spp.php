<?php 
require 'functions_spp.php';
require 'layouts/header.php';
$spp = query("SELECT * FROM spp ");
?>

	<h1>Daftar SPP</h1><br><br>

	<a class="btn btn-hijau" href="tambah_spp.php">Tambah data spp</a>
	<br><br><br><br>

	<table border="1" cellpadding="10" cellspacing="0">
		<thead>
			<tr>
			<th>NO</th>
			<th>ID SPP</th>						
			<th>TAHUN</th>
			<th>NOMINAL</th>
			<th>AKSI</th>
		</tr>
		</thead>

		<tbody>
			<?php $i = 1; ?>
		<?php foreach( $spp as $row) : ?>

		<tr>
			<td><?= $i; ?></td>
			<td><?= $row["id_spp"]; ?></td>
			<td><?= $row["tahun"]; ?></td>
			<td><?= $row["nominal"]; ?></td>
			<td >
				<a href="edit_spp.php?id_spp=<?= $row["id_spp"]; ?>" class="btn btn-kuning">Edit</a> |
				<a href="hapus_spp.php?id_spp=<?= $row["id_spp"]; ?>" onclick="return confirm('Ingin Menghapus Data?')" class="btn btn-merah">Hapus</a>
			</td>
		</tr>	
		<?php $i++; ?>
	<?php endforeach; ?>
		</tbody>
		
	</table>
<?php 
require_once('layouts/footer.php');
?>