<?php 
// array (variabel yang mempunyai banyak nilai)
// elemen pada array boleh memilki tipe data yang berbeda
// pasanyan antara key dan value
// keynya adalah index, yang dimulai dari 0

// cara lama
$nama = array("Paijo", "Paini", "Tumingan");
// cara baru
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
$arr = [123, "Paijo", true];
// menampilkan array
echo $hari[3];
echo "<br>";
var_dump($arr);
echo "<br>";
print_r($arr);
// menambah array
$arr[] = "Paini";
echo "<br>";
var_dump($arr);
?>