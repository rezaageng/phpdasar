<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>latihan</title>
	<style>
		.warna {background-color: silver;}
	</style>
</head>
<body>
	<h1>Cara 1</h1>
	<table border="1" cellspacing="0" cellpadding="05">
		<?php 
			for ($i = 1; $i <= 3; $i++) { 
				echo "<tr>";
				for ($s=1; $s < 5; $s++) { 
					echo "<td>$i,$s</td>";
				}
				echo "</tr>";
			}
		?>
	</table>
	<h1>Cara 2</h1>
	<table border="1" cellspacing="0" cellpadding="05">
		<?php for ($i = 1; $i <= 5; $i++) : ?>
			<?php if ($i % 2 == 0): ?>
				<tr class="warna">
			<?php else: ?>
				<tr>
			<?php endif ?>
				<?php for ($s=1; $s < 5; $s++) : ?>
					<td><?php echo "$i,$s"; ?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>
</body>
</html>