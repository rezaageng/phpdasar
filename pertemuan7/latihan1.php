<?php
$anime = [
			[
				"nama" => "Shingeki no Kyojin Season 3 Part 2",
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
	<title>GET</title>
</head>
<body>
	<ul>
		<?php foreach ($anime as $an): ?>
			<li><a href="latihan2.php?nama=<?php echo $an["nama"]; ?>&studio=<?php echo $an["studio"]; ?>&tayang=<?php echo $an["tayang"]; ?>&eps=<?php echo $an["eps"]; ?>&img=<?php echo $an["img"]; ?>">
				<?php echo $an["nama"]; ?></a></li>
		<?php endforeach ?>
	</ul>
</body>
</html>