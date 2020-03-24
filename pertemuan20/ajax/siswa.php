<?php
usleep(500000);
require '../functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM siswa WHERE nama LIKE '%$keyword%' OR nis LIKE '%$keyword%' OR email LIKE '%$keyword%' OR jurusan LIKE '%$keyword%'";
$siswa = query($query);
?>
<table border="1" cellspacing="0" cellpadding="5">
			<tr>
				<th>No.</th>
				<th>Aksi</th>
				<th>Gambar</th>
				<th>NIS</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Jurusan</th>
			</tr>
			<?php $i = 1; ?>
			<?php foreach ($siswa as $row) : ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td>
					<a href="ubah.php?id=<?php echo $row["id"]; ?>">Ubah</a> | 
					<a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Hapus data?');">Hapus</a>
				</td>
				<td><img src="img/<?php echo $row["gambar"] ?>" alt="Foto Profil" style="width: 120px"></td>
				<td><?php echo $row["nis"]; ?></td>
				<td><?php echo $row["nama"]; ?></td>
				<td><?php echo $row["email"]; ?></td>
				<td><?php echo $row["jurusan"]; ?></td>
			</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</table>