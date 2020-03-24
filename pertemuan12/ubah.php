<?php
require 'functions.php';
$id = $_GET["id"];
$sis = query("SELECT * FROM siswa WHERE id = $id")[0];
// cek apakah submit sudah ditekan
if (isset($_POST["submit"])) {
	


	// cek apakah berhasil diubah
	if (ubah($_POST) > 0) {
		echo "
				<script>
					alert('Data berhasil diubah');
					document.location.href = 'index.php'
				</script>
		";
	}
	else {
		echo "<script>
					alert('Data Gagal diubah');
					document.location.href = 'ubah.php'
				</script> <br>";
		echo mysqli_error($conn);
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubah</title>
</head>
<body>
	<h1>Ubah data</h1>
	<form action="" method="post">
		<input type="hidden" name="id" id="id" value="<?php echo $sis["id"] ?>">
		<ul>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required value="<?php echo $sis["nama"] ?>">
			</li>
			<li>
				<label for="nis">NIS : </label>
				<input type="text" name="nis" id="nis" required value="<?php echo $sis["nis"] ?>">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email" required value="<?php echo $sis["email"] ?>">
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required value="<?php echo $sis["jurusan"] ?>">
			</li>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="text" name="gambar" id="gambar" required value="<?php echo $sis["gambar"] ?>">
			</li>
			<button type="submit" name="submit">Tambah</button>
		</ul>
	</form>
</body>
</html>