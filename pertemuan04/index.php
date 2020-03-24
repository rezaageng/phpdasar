<?php
// date (menampilkan tanggal dengan format tertentu)
echo date("l, d M Y");
echo "<br>";

// time
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlalu dari 1 Januari 1970
echo time();
echo "<br>";
echo date("l, d M Y", time() + 60 * 60 * 24 * 1000);
echo "<br>";

// mktime
// membuat detik sendiri
// jam, menit, detik, bulan, tanggal, tahun
echo date("l, d M Y", mktime(0,0,0,4,7,2003));
echo "<br>";

// strtotime
echo date("l, d M Y", strtotime("7 Apr 2003"));
?>