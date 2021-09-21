
<?php
include "../../../koneksi.php";


$nama		= $_POST['nama'];
$mapel		= $_POST['mapel'];


$sql = "INSERT into guru (nama_guru, id_mapel)
values('$nama', '$mapel')";

mysqli_query($conn, $sql);
?>
<script type='text/javascript'>
	alert('Data guru berhasil disimpan');
	window.location.href="../../index.php?a=guru"
</script>