<?php
include '../../../../koneksi.php';
$id=$_GET['id'];




$sql = "UPDATE guru set 
			username='',
			password='',
			akses_sistem='Tidak'
			where id_guru='$id'
	";

$result=mysqli_query($conn, $sql) or die ('GAGAL');
?>
<script type="text/javascript">
	alert('Data akses guru dihapus');
	window.location.href='../../?a=akses_guru'
</script>