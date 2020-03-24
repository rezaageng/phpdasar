<?php 
if (!isset($_GET["nama"]) || !isset($_GET["studio"]) || !isset($_GET["tayang"]) || !isset($_GET["eps"]) || !isset($_GET["img"])) {
	header("location: latihan1.php");
	exit;
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get</title>
</head>
<body>
	<h1>Daftar Anime</h1>
	<ul>
		<li type="none"><img src="img/<?php echo $_GET["img"]; ?>" alt="cover"></li>
		<li>Nama : <?php echo $_GET["nama"]; ?></li>
		<li>Studio : <?php echo $_GET["studio"]; ?></li>
		<li>Penayangan : <?php echo $_GET["tayang"]; ?></li>
		<li>Episode : <?php echo $_GET["eps"]; ?></li>
	</ul>
</body>
</html>