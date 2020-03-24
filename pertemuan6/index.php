<?php
// Associative array
// sama seperti array numerik (biasa) tapi keynya adalah string yang kita buat sendiri
	$siswa = [
				[
					"nama" => "Reza Ageng Trihandoko",
					"NIS" => 181910065,
					"kelas" => "XI-RPL2",
					"email" => "rezaageng5@gmail.com",
					"foto" => "noragmi.jpg"
				],
				[
					"nama" => "Paijo",
					"NIS" => 181910099,
					"kelas" => "XI-RPL2",
					"email" => "paijo@gmail.com",
					"foto" => "onof.png"
				],
				[
					"nama" => "Paini",
					"NIS" => 181910069,
					"kelas" => "XI-RPL2",
					"email" => "paini@gmail.com",
					"foto" => "R.png"
				]
	];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Siswa</title>
</head>
<body>
	<h1>Daftar siswa SMKN 1 Katapang</h1>
	<?php foreach ($siswa as $swa): ?>
		<li type="none"><img src="img/<?php echo $swa["foto"]; ?>"></li>
		<li>Nama : <?php echo $swa["nama"]; ?></li>
		<li>NIS : <?php echo $swa["NIS"]; ?></li>
		<li>Kelas : <?php echo $swa["kelas"]; ?></li>
		<li>email : <?php echo $swa["email"]; ?></li><br>
	<?php endforeach ?>
</body>
</html>