<?php 
require 'functions.php';
$petugas = query("SELECT * FROM petugas ");
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

	<h1>Daftar Petugas</h1>

	<a class="tmbh" href="tambah_petugas.php">Tambah data petugas</a>
	<br><br><br><br>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>NO</th>
			<th>ID PETUGAS</th>						
			<th>USERNAME</th>
			<th>PASSWORD</th>
			<th>NAMA PETUGAS</th>
			<th>LEVEL</th>
			<th>AKSI</th>
		</tr>

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
				<a href="edit_petugas.php?id_petugas=<?= $row["id_petugas"]; ?>">Edit</a> |
				<a href="hapus_petugas.php?id_petugas=<?= $row["id_petugas"]; ?>" onclick="return confirm('Ingin Menghapus Data?')">Hapus</a>
			</td>
		</tr>	
		<?php $i++; ?>
	<?php endforeach; ?>
		
	</table>
</body>
</html>