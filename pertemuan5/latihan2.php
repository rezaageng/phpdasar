<?php
	$siswa = [["Reza Ageng Trihandoko",181910065,"XI-RPL2"],["Paijo",181910099,"XI-RPL2"]];
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
		<li>Nama : <?php echo $swa[0]; ?></li>
		<li>NIS : <?php echo $swa[1]; ?></li>
		<li>Kelas : <?php echo $swa[2]; ?></li><br>
	<?php endforeach ?>
</body>
</html>