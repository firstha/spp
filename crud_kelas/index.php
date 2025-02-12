<?php 
require 'functions.php';
$kelas = query("SELECT * FROM kelas ");

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

	<h1>Daftar kelas</h1>

	<a class="tmbh" href="tambah_kelas.php">Tambah data kelas</a>
	<br><br><br><br>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>NO</th>
			<th>ID KELAS</th>						
			<th>NAMA KELAS</th>
			<th>KOMPETENSI KEAHLIAN</th>
			<th>AKSI</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach( $kelas as $row) : ?>

		<tr>
			<td><?= $i; ?></td>
			<td><?= $row["id_kelas"]; ?></td>
			<td><?= $row["nama_kelas"]; ?></td>
			<td><?= $row["kompetensi_keahlian"]; ?></td>
			<td >
				<a href="edit_kelas.php?id_kelas=<?= $row["id_kelas"]; ?>">Edit</a> |
				<a href="hapus_kelas.php?id_kelas=<?= $row["id_kelas"]; ?>" onclick="return confirm('Ingin Menghapus Data?')">Hapus</a>
			</td>
		</tr>	
		<?php $i++; ?>
	<?php endforeach; ?>
		
	</table>
</body>
</html>