<?php 
require 'functions_kelas.php';
require 'layouts/header.php';
$kelas = query("SELECT * FROM kelas ");

?>

	<h1>Daftar kelas</h1><br><br>

	<a class="btn btn-hijau" href="tambah_kelas.php">Tambah data kelas</a>
	<br><br><br><br>

	<table border="1" cellpadding="10" cellspacing="0">
		<thead>
			<tr>
			<th>NO</th>
			<th>ID KELAS</th>						
			<th>NAMA KELAS</th>
			<th>KOMPETENSI KEAHLIAN</th>
			<th>AKSI</th>
		</tr>
		</thead>

		<tbody>
			<?php $i = 1; ?>
		<?php foreach( $kelas as $row) : ?>

		<tr>
			<td><?= $i; ?></td>
			<td><?= $row["id_kelas"]; ?></td>
			<td><?= $row["nama_kelas"]; ?></td>
			<td><?= $row["kompetensi_keahlian"]; ?></td>
			<td >
				<a href="edit_kelas.php?id_kelas=<?= $row["id_kelas"]; ?>" class="btn btn-kuning">Edit</a> |
				<a href="hapus_kelas.php?id_kelas=<?= $row["id_kelas"]; ?>" onclick="return confirm('Ingin Menghapus Data?')" class="btn btn-merah">Hapus</a>
			</td>
		</tr>	
		<?php $i++; ?>
	<?php endforeach; ?>
		</tbody>
		
	</table>
<?php 
require_once('layouts/footer.php');
?>