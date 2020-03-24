<?php
require 'functions.php';

if (isset($_POST["register"])) {
	if (registrasi($_POST) > 0) {
		echo "
			<script>
				alert('Registrasi berhasil!');
			</script>
		";
	} else {
		echo "
			<script>
				alert('Registrasi gagal!');
			</script>
		";;
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrasi</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>
	<h1>Registrasi</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username : </label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password : </label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<label for="password2">Konfirmasi Password : </label>
				<input type="password" name="password2" id="password2">
			</li>
			<li>
				<button type="submit" name="register">Register!</button>
			</li>
		</ul>
	</form>
</body>
</html>