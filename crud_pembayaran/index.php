<?php 
require 'functions.php';
$pembayaran = query("SELECT * FROM pembayaran ");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<style>
		*{			
            font-family: sans-serif;
		}
        table {
            width: 100%;
        }
        th, td, h1 {
            padding: 18px;
            text-align: center;
        }
        th {
            background-color: skyblue;
        }
        .logo{
			max-width: 10%;
			float: left;
		}
		.tmbh{
			text-decoration: none;
			color: blue;
			margin-left: 100px;
		}

    </style>
</head>
<body>

	<h1>Daftar pembayaran</h1>

	<a class="tmbh" href="tambah_pembayaran.php">Tambah data pembayaran</a>
	<br><br><br><br>

	<table border="1" cellpadding="10" cellspacing="0">
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
				<a href="edit_pembayaran.php?id_pembayaran=<?= $row["id_pembayaran"]; ?>">Edit</a> |
				<a href="hapus_pembayaran.php?id_pembayaran=<?= $row["id_pembayaran"]; ?>" onclick="return confirm('Ingin Menghapus Data?')">Hapus</a>
			</td>
		</tr>	
		<?php $i++; ?>
	<?php endforeach; ?>
		
	</table>
</body>
</html>