<?php

session_start();
if (!isset($_SESSION["login"])) {
	header("location: login.php");
	exit;
}

require 'functions.php';

// ambil data dari tabel siswa/query data siswa
$siswa = query("SELECT * FROM siswa LIMIT $awalData, $dataHalaman");

// ketika tombol cari ditekan
if (isset($_POST["cari"])) {
	$siswa = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP MySQL</title>
</head>
<body>
	<h1>Daftar Siswa</h1>
	<a href="logout.php">Logout</a><br>
	<a href="tambah.php">Tambah Data</a><br><br>
	<form action="" method="post">
		<input type="text" name="keyword" autocomplete="off" autofocus size="30" placeholder="Apa yang anda cari?">
		<button type="submit" name="cari">Cari</button>
	</form><br>
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
			<td><?php echo $i + $awalData; ?></td>
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
	<!-- navigasi -->
	<?php if ($halAktif > 1): ?>
		<a href="?hal=<?php echo $halAktif - 1; ?>">&laquo</a>
	<?php endif ?>
	<?php for ($i = 1; $i <= $halaman; $i++): ?>
		<?php if ($i == $halAktif): ?>
			<a href="?hal=<?php echo $i; ?>" style="font-weight: bold; color: red;"><?php echo $i; ?></a>
		<?php else: ?>
			<a href="?hal=<?php echo $i; ?>"><?php echo $i; ?></a>	
		<?php endif ?>
	<?php endfor ?>
	<?php if ($halAktif < $halaman): ?>
		<a href="?hal=<?php echo $halAktif + 1; ?>">&raquo</a>
	<?php endif ?>
</body>
</html>