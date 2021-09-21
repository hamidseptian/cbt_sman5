
<?php
include "../../../koneksi.php";


$id		= $_GET['id'];
$akses = date('ymdhis');

		$sql = "UPDATE guru set 
			username='$akses',
			password='$akses',
			akses_sistem='Ya'
			where id_guru='$id'
	";

	mysqli_query($conn, $sql);
	?>
	<script type='text/javascript'>
		alert('Data akses login guru berhasil disimpan');
		window.location.href="../../index.php?a=akses_guru"
	</script>
	