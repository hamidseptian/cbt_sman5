<?php
include '../../../../koneksi.php';
$id=$_GET['id'];




$sql="DELETE from ptk where id_ptk='$id'";
$result=mysqli_query($conn, $sql) or die ('GAGAL');
?>
<script type="text/javascript">
	alert('Data PTK dihapus');
	window.location.href='../../?a=ptk'
</script>