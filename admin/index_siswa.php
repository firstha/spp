<?php 
require 'functions_siswa.php';
require 'layouts/header.php';
$siswa = query("SELECT * FROM siswa ");
?>

	<h1>Daftar Siswa</h1><br><br>

	<a class="btn btn-hijau" href="tambah_siswa.php">Tambah data siswa</a>
	<br><br><br><br>

	<table border="1" cellpadding="10" cellspacing="0">
		<thead>
			<tr>
			<th>NO</th>
			<th>NISN</th>						
			<th>NIS</th>
			<th>NAMA</th>
			<th>ID KELAS</th>
			<th>ALAMAT</th>
			<th>NO TELP</th>
			<th>ID SPP</th>
			<th>AKSI</th>
		</tr>
		</thead>

		<tbody>
			<?php $i = 1; ?>
		<?php foreach( $siswa as $row) : ?>

		<tr>
			<td><?= $i; ?></td>
			<td><?= $row["nisn"]; ?></td>
			<td><?= $row["nis"]; ?></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["id_kelas"]; ?></td>
			<td><?= $row["alamat"]; ?></td>
			<td><?= $row["no_telp"]; ?></td>
			<td><?= $row["id_spp"];?></td>
			<td >
				<a href="edit_siswa.php?nisn=<?= $row["nisn"]; ?>" class="btn btn-kuning">Edit</a> |
				<a href="hapus_siswa.php?nisn=<?= $row["nisn"]; ?>" onclick="return confirm('Ingin Menghapus Data?')" class="btn btn-merah">Hapus</a>
			</td>
		</tr>	
		<?php $i++; ?>
	<?php endforeach; ?>
		</tbody>
		
	</table>
<?php 
require_once('layouts/footer.php');
?>