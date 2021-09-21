
<?php
include "../../../koneksi.php";


$nama		= $_POST['mapel'];
$kkm		= $_POST['kkm'];


$sql = "INSERT into mapel (nama_mapel, kkm)
values('$nama','$kkm')";




mysqli_query($conn, $sql);
?>
<script type='text/javascript'>
	alert('Mata pelajaran berhasil disimpan');
	window.location.href="../../index.php?a=mapel"
</script>