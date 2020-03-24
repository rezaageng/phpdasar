<?php 
// Pengulangan

// For
for ($i = 0; $i < 5; $i++) { 
	echo "Omoshiroi!!! <br>";
}

// while - cek kemudian jalankan
$i = 0;
while ($i < 5) {
	echo "ora!!! <br>";
$i++;
}

// do while - jalankan kemudian cek
$x = 0;
do {
	echo "muda!!! <br>";
$x++;
} while ($x < 5);


// Pengkondisian/Percabangan
$x = 0;
// if...else
if ($x < 10) {
	echo "Sip";
} else {
	echo "Janai!!!";
}

// if...else if...else
if ($x < 10) {
	echo "Sip";
} else if ($x > 10) {
	echo "OK";
} else {
	echo "Janai!!!";
}
?>