<?php
include '../../../../koneksi.php';
$id=$_GET['id'];
$kelas=$_GET['kelas'];




$sql="DELETE from siswa where id_siswa='$id'";
$result=mysqli_query($conn, $sql) or die ('GAGAL');
?>
<script type="text/javascript">
	alert('Data siswa dihapus');
	window.location.href='../../?a=data_siswa&id=<?php echo $kelas ?>'
</script>