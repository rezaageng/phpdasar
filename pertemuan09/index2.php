<?php
// Koneksi DB
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel siswa/query data siswa
$result = mysqli_query($conn, "SELECT * FROM siswa");
// var_dump($result);
// if (!$result) {
// 	echo mysqli_error($conn);
// }

// ambil data(fetch) siswa dari objek $result
// mysqli_fetch_row() // return array numerik
// mysqli_fetch_assoc() // return array associative
// mysqli_fetch_array() // return keduanya
// mysqli_fetch_object() // return object ($sis->nama)
// while ($sis = mysqli_fetch_assoc($result)) {
// 	var_dump($sis["nama"]);
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP MySQL</title>
</head>
<body>
	<h1>Daftar Siswa</h1>
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
		<?php while ($row = mysqli_fetch_assoc($result)) : ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td>
				<a href="">Ubah</a> | 
				<a href="">Hapus</a>
			</td>
			<td><img src="img/<?php echo $row["gambar"] ?>" alt=""></td>
			<td><?php echo $row["nis"]; ?></td>
			<td><?php echo $row["nama"]; ?></td>
			<td><?php echo $row["email"]; ?></td>
			<td><?php echo $row["jurusan"]; ?></td>
		</tr>
		<?php $i++; ?>
		<?php endwhile; ?>
	</table>
</body>
</html>