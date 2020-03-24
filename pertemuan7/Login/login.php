<?php 
if (isset($_POST["submit"])) {
	if ($_POST["username"] == "paijo" && $_POST["pw"] == "1234") {
		header("Location: admin.php");
		exit;
	}
} else {
	$error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<?php if (isset($error)): ?>
		<p style="color: red;">Username atau password salah!</p>
	<?php endif ?>
	<form action="" method="post">
		<label for="username">Username : </label>
		<input type="text" name="username" id="username"><br>
		<label for="pw">Password : </label>
		<input type="password" name="pw" id="pw"><br>
		<button type="submit" name="submit">Login</button>
	</form>
</body>
</html>