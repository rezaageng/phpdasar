// ambil elemen yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombolCari');
var container = document.getElementById('container');

// event ketika keyword ditulis
keyword.addEventListener('keyup', function() {
	// buat ojek ajax
	var xhr = new XMLHttpRequest();

	// cek kesiapan ajax
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			container.innerHTML = xhr.responseText;
		}
	}

	// eksekusi
	xhr.open('GET', 'ajax/siswa.php?keyword=' + keyword.value, true);
	xhr.send();
})