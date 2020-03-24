<?php
// Pengulangan pada arrat
// for/foreach
$angka = [1,32,56,3,4,64];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pengulangan Array</title>
	<style>
		.kotak {
			background-color: salmon;
			width: 50px;
			height: 50px;
			text-align: center;
			line-height: 50px;
			float: left;
			margin: 3px;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<?php for ($i = 0; $i < count($angka); $i++): ?>
		<div class="kotak"><?php echo $angka[$i]; ?></div>
	<?php endfor ?>
	<div class="clear"></div>
	<?php foreach ($angka as $a): ?>
		<div class="kotak"><?php echo $a; ?></div>
	<?php endforeach ?>
</body>
</html>