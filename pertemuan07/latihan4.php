<?php 
if (!isset($_POST["nama"]) || !isset($_POST["submit"])) {
	header("location: latihan3.php");
	exit;
}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>POST</title>
</head>
<body>
	<h1>Selamat Datang <?php echo $_POST["nama"]; ?>!</h1>
</body>
</html>