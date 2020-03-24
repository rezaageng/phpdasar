<?php
	// Require composer autoload
	require_once __DIR__ . '/vendor/autoload.php';
	// Create an instance of the class:
	$mpdf = new \Mpdf\Mpdf();
	
	// ambil data dari tabel siswa/query data siswa
	require 'functions.php';
	$siswa = query("SELECT * FROM siswa");

	// Write some HTML code:
	$html = '<!DOCTYPE html>
<head>
	<title>Data Siswa</title>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="5">
			<tr>
				<th>No.</th>
				<th>Gambar</th>
				<th>NIS</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Jurusan</th>
			</tr>';
			$i = 1;
			foreach ($siswa as $row) {
				$html .= '<tr>
					<td>'. $i++ .'</td>
					<td><img src="img/'. $row["gambar"] .'" width="120px"></td>
					<td>'. $row["nis"] .'</td>
					<td>'. $row["nama"] .'</td>
					<td>'. $row["email"] .'</td>
					<td>'. $row["jurusan"] .'</td>


				</tr>';
			}
	$html.= '</table>
</body>
</html>';		

	$mpdf->WriteHTML($html);

	// Output a PDF file directly to the browser
	$mpdf->Output('dataSiswa.pdf', 'I');
?>