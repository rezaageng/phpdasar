$(document).ready(function () {
	// hilangkan tombol cari
	$('#tombolCari').hide();

	// event keyword ditulis
	$('#keyword').on('keyup', function(){
		// munculkan loading
		$('.load').show();

		// ajax menggunakan load
		$('#container').load('ajax/siswa.php?keyword=' + $('#keyword').val());

		// ajax menggunakan $.get
		$.get('ajax/siswa.php?keyword=' + $('#keyword').val(), function (data) {
			$('#container').html(data);
			$('.load').hide();
		});
	});
});
