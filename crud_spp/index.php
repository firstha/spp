<?php 
require 'functions.php';
$spp = query("SELECT * FROM spp ");
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

	<h1>Daftar SPP</h1>

	<a class="tmbh" href="tambah_spp.php">Tambah data spp</a>
	<br><br><br><br>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>NO</th>
			<th>ID SPP</th>						
			<th>TAHUN</th>
			<th>NOMINAL</th>
			<th>AKSI</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach( $spp as $row) : ?>

		<tr>
			<td><?= $i; ?></td>
			<td><?= $row["id_spp"]; ?></td>
			<td><?= $row["tahun"]; ?></td>
			<td><?= $row["nominal"]; ?></td>
			<td >
				<a href="edit_spp.php?id_spp=<?= $row["id_spp"]; ?>">Edit</a> |
				<a href="hapus_spp.php?id_spp=<?= $row["id_spp"]; ?>" onclick="return confirm('Ingin Menghapus Data?')">Hapus</a>
			</td>
		</tr>	
		<?php $i++; ?>
	<?php endforeach; ?>
		
	</table>
</body>
</html>