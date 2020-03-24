<?php
$anime = [
			[
				"nama" => "Shingeki no Kyoujin Season 3 Part 2",
				"studio" => "Wit Studio",
				"tayang" => "Apr 29, 2019 to Jul 1, 2019",
				"eps" => "10",
				"img" => "snk.jpg"
			],
			[
				"nama" => "Ansatsu Kyoushitsu 2nd Season",
				"studio" => "Lerche",
				"tayang" => "Jan 8, 2016 to Jul 1, 2016",
				"eps" => "25",
				"img" => "ass.jpg"
			],
			[
				"nama" => "Darling in the FranXX",
				"studio" => "A-1 Pictures, Trigger, CloverWorks",
				"tayang" => "Jan 13, 2018 to Jul 7, 2018",
				"eps" => "24",
				"img" => "dar.jpg"
			]
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Association Array</title>
</head>
<body>
	<?php foreach ($anime as $an): ?>
		<ul>
			<li type="none"><img src="img/<?php echo $an["img"] ?>" alt="cover"></li>
			<li>Judul : <?php echo $an["nama"]; ?></li>
			<li>Studio : <?php echo $an["studio"]; ?></li>
			<li>Penayangan : <?php echo $an["tayang"]; ?></li>
			<li>Jumlah Episode : <?php echo $an["eps"]; ?></li>
		</ul>
	<?php endforeach ?>
</body>
</html>