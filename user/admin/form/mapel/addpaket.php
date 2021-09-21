<?php
include '../../../../koneksi.php';
$id=$_GET['id'];
// mysqli_query($conn, "START transaction");
$q1 = myssqli_query($conn, "SELECT * from mapel where id_mapel = '$id'")or die(mysqli_error());
$d1=mysqli_fetch_array($q1);
$namamapel = $d1[nama_mapel];
$q2=mysqli_query($conn, "INSERT INTO paket (nama_paket, boleh_akses, jenis_ujian, id_mapel)" 
VALUES (), ()
);
?>
<script type="text/javascript">
	alert('Mata pelajaran dihapus');
	window.location.href='../../?a=mapel'
</script>