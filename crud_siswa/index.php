<?php 
require 'functions.php';
$siswa = query("SELECT * FROM siswa ");
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

	<h1>Daftar Siswa</h1>

	<a class="tmbh" href="tambah_siswa.php">Tambah data siswa</a>
	<br><br><br><br>

	<table border="1" cellpadding="10" cellspacing="0">
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
				<a href="edit_siswa.php?nisn=<?= $row["nisn"]; ?>">Edit</a> |
				<a href="hapus_siswa.php?nisn=<?= $row["nisn"]; ?>" onclick="return confirm('Ingin Menghapus Data?')">Hapus</a>
			</td>
		</tr>	
		<?php $i++; ?>
	<?php endforeach; ?>
		
	</table>
</body>
</html>