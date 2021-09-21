<?php
include '../../../../koneksi.php';
$id=$_GET['id'];




$sql="DELETE from mapel where id_mapel='$id'";
$result=mysqli_query($conn, $sql) or die ('GAGAL');
?>
<script type="text/javascript">
	alert('Mata pelajaran dihapus');
	window.location.href='../../?a=mapel'
</script>