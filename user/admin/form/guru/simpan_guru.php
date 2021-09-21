
<?php
include "../../../koneksi.php";


$ptk		= $_POST['ptk'];
$mapel		= $_POST['mapel'];

$cek = mysqli_query($conn, "SELECT * from guru where id_ptk='$ptk'")or die(mysqli_error());
$j = mysqli_num_rows($cek);

if ($j>0) { 
	$qptk = mysqli_query($conn, "SELECT * from ptk where id_ptk='$ptk'")or die(mysqli_error());
	$d = mysqli_fetch_array($qptk);
	?>
<script type='text/javascript'>
	alert('Data guru gagal disimpan\n<?php echo $d['nama_ptk'] ?> sudah menjadi guru mata pelajaran');
	window.location.href="../../index.php?a=guru"
</script>
	
<?php }
else{
$q = mysqli_query($conn, "INSERT INTO guru set
	id_ptk='$ptk',
	id_mapel='$mapel'
	")or die(mysqli_error());


?>
<script type='text/javascript'>
	alert('Data guru berhasil disimpan');
	window.location.href="../../index.php?a=guru"
</script>
<?php } ?>