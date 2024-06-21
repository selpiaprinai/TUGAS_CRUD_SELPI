<?php 
require '../config/matkul.php';

$id = $_GET["id"];

// cek kondisi
if( hapusMatkul($id) > 0 ) {
	// kondisi pertama
	echo "
		<script>
			document.location.href = '/TUGAS_PEMROGRAMAN/matkul';
		</script>
	";
} else {
	// kondisi kedua
	echo "
		<script>
			alert('Data gagal ditambahkan!');
			document.location.href = '/TUGAS_PEMROGRAMAN/matkul';
		</script>
	";
}

?>