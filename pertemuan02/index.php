<!-- Sintaks PHP -->


<!-- Standar output -->
<?php 
	echo "Hello World<br>";
	print("Hello World<br>");
	print_r("Hello World<br>"); //Array
	var_dump("Hello World<br>"); //Mengecek variabel
 ?>

<!-- Penulisan PHP -->
<!-- 1. PHP didalam html -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP dasar</title>
</head>
<body>
	<h1>Hello <?php echo "World"; ?></h1>
	<p><?php echo "lorem ipsum dolor sit amet"; ?></p>
</body>
</html>
<!-- 2. HTML didalam PHP -->
<?php 
	echo "<h1>Hello World</h1>";
?>
<!-- Variabel -->
<?php 
// Tidak boleh diawali dengan angka tapi boleh menggunakan angka
 	$nama = "Reza";
 	echo "Nama saya $nama,<br>";
?>
<!-- Operator -->
<?php 
// Aritmatika (+, -, *, /, %)
$x = 10;
$y = 20;
echo $x * $y . "<br>";

// Penggabung string / concat (.)
$nama_depan = "Reza";
$nama_belakang = "Ageng";
echo $nama_depan . " " . $nama_belakang . "<br>";

// Assignment (=, +=, -=, *=, /=, %=, .=)
$angka = 5;
$angka += 79;
echo $angka . "<br>";

// Perbandingan (<, >, ==, !=, <=, >=)
var_dump(1 < 5);
echo "<br>";

// identitas (===, !==)
var_dump(1===1);
echo "<br>";
var_dump(1!==1);
echo "<br>";

// Logika (&&, ||, !)
var_dump(1 < 10 && 1 == 1); //True bila kondisinya benar semua
echo "<br>";
var_dump(1 < 10 || 1 == 5); //True bila salah satu kondisinya benar
?>
