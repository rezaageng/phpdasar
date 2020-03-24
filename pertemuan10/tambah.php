<?php
require 'functions.php';
// cek apakah submit sudah ditekan
if (isset($_POST["submit"])) {
	


	// cek apakah berhasil ditambahkan
	if (tambah($_POST) > 0) {
		echo "
				<script>
					alert('Data berhasil ditambahkan');
					document.location.href = 'index.php'
				</script>
		";
	}
	else {
		echo "<script>
					alert('Data Gagal ditambahkan');
					document.location.href = 'tambah.php'
				</script> <br>";
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
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="nis">NIS : </label>
				<input type="text" name="nis" id="nis" required>
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email" required>
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required>
			</li>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="text" name="gambar" id="gambar" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah</button>
			</li>
		</ul>
	</form>
</body>
</html>