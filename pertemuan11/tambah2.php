<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// cek apakah submit sudah ditekan
if (isset($_POST["submit"])) {
	// ambil data dari form
	$nama = $_POST["nama"];
	$nis = $_POST["nis"];
	$email = $_POST["email"];
	$jurusan = $_POST["jurusan"];
	$gambar = $_POST["gambar"];

	// query insert data
	$query = "INSERT INTO siswa VALUES ('','$nama', '$nis', '$email', '$jurusan', '$gambar')";
	mysqli_query($conn, $query);

	// cek apakah berhasil ditambahkan
	if (mysqli_affected_rows($conn) > 0) {
		echo "Berhasil";
	}
	else {
		echo "Gagal <br>";
		echo mysqli_error($conn);
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah</title>
</head>
<body>
	<h1>Tambah data</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama">
			</li>
			<li>
				<label for="nis">NIS : </label>
				<input type="text" name="nis" id="nis">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email">
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan">
			</li>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="text" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah</button>
			</li>
		</ul>
	</form>
</body>
</html>