<?php 
require 'functions_pembayaran.php';
require 'layouts/header.php';
$pembayaran = query("SELECT * FROM pembayaran ");
?>


	<h1>Daftar pembayaran</h1><br><br>

	<a class="btn btn-hijau" href="tambah_pembayaran.php">Tambah data pembayaran</a>
	<br><br><br><br>

	<table border="1" cellpadding="10" cellspacing="0">
		<thead>
			<tr>
			<th>NO</th>
			<th>ID PEMBAYARAN</th>						
			<th>ID PETUGAS</th>
			<th>NISN</th>
			<th>TANGGAL BAYAR</th>
			<th>BULAN BAYAR</th>
			<th>TAHUN BAYAR</th>
			<th>ID SPP</th>
			<th>JUMLAH BAYAR</th>
			<th>AKSI</th>
		</tr>
		</thead>

		<tbody>
			<?php $i = 1; ?>
		<?php foreach( $pembayaran as $row) : ?>

		<tr>
			<td><?= $i; ?></td>
			<td><?= $row["id_pembayaran"]; ?></td>
			<td><?= $row["id_petugas"]; ?></td>
			<td><?= $row["nisn"]; ?></td>
			<td><?= $row["tgl_bayar"]; ?></td>
			<td><?= $row["bulan_dibayar"]; ?></td>
			<td><?= $row["tahun_dibayar"]; ?></td>
			<td><?= $row["id_spp"];?></td>
			<td><?= $row["jumlah_bayar"];?></td>
			<td >
				<a href="edit_pembayaran.php?id_pembayaran=<?= $row["id_pembayaran"]; ?>" class="btn btn-kuning">Edit</a> |
				<a href="hapus_pembayaran.php?id_pembayaran=<?= $row["id_pembayaran"]; ?>" onclick="return confirm('Ingin Menghapus Data?')" class="btn btn-merah">Hapus</a>
			</td>
		</tr>	
		<?php $i++; ?>
	<?php endforeach; ?>
		</tbody>
		
	</table>
<?php 
require_once('layouts/footer.php');
?>