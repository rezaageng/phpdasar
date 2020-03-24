<?php 
require 'functions.php';
$id = $_GET["id"];

if (hapus($id) > 0) {
		echo "
				<script>
					alert('Data berhasil dihapus');
					document.location.href = 'index.php'
				</script>
		";
	}
	else {
		echo "<script>
					alert('Data Gagal dihapus');
					document.location.href = 'index.php'
				</script> <br>";
		echo mysqli_error($conn);
	}
?>