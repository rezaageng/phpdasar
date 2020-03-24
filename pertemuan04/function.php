<?php
function salam($waktu = "Datang", $nama = "Onii-chan") {
	$jam = date("H");
	if ($jam >= 10 && $jam < 15) {
		$waktu = "Siang";
	}
	elseif ($jam >= 15 && $jam < 18) {
		$waktu = "Sore";
	}
	elseif ($jam >= 18 && $jam <24) {
		$waktu = "Malam";
	}
	elseif ($jam >= 00 && $jam <04) {
		$waktu = "Malam";
	}
	else {
		$waktu = "Pagi";
	}
	return "Selamat $waktu, $nama!";
}
echo salam();
?>