
<?php
include "../../../koneksi.php";


$nama		= $_POST['kelas'];
$tingkat		= $_POST['tingkat'];
$wali		= $_POST['wali'];


$sql = "INSERT into kelas (nama_kelas, tingkat, id_ptk)
values('$nama', '$tingkat','$wali')";

mysqli_query($conn, $sql);
?>
<script type='text/javascript'>
	alert('Data kelas berhasil disimpan');
	window.location.href="../../index.php?a=kelas"
</script>