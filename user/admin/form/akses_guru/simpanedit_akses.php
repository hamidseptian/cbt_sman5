
<?php
include "../../../koneksi.php";


$id		= $_POST['id'];
$username		= $_POST['username'];
$password		= $_POST['password'];

$qcek = mysqli_query($conn, "SELECT * from guru where username='$username'")or die(mysqli_error());
$jcek = mysqli_num_rows($qcek);
$dcek = mysqli_fetch_array($qcek);
if ($dcek['akses_sistem']=='Tidak') {

	if ($jcek>0)  { ?>
	<script type='text/javascript'>
		alert('Gagal memberi akses\nUsername sudah dipakai');
		window.location.href="../../index.php?a=tambah_akses_guru&id=<?php echo $id ?>"
	</script>
	<?php }
	else{

		$sql = "UPDATE guru set 
			username='$username',
			password='$password',
			akses_sistem='Ya'
			where id_guru='$id'
	";

	mysqli_query($conn, $sql);
	?>
	<script type='text/javascript'>
		alert('Data akses login guru berhasil disimpan');
		window.location.href="../../index.php?a=akses_guru"
	</script>
	<?php } ?>
<?php } 
else{
	if ($jcek>1)  { ?>
	<script type='text/javascript'>
		alert('Gagal memberi akses\nUsername sudah dipakai');
		window.location.href="../../index.php?a=tambah_akses_guru&id=<?php echo $id ?>"
	</script>
	<?php }
	else{

		$sql = "UPDATE guru set 
			username='$username',
			password='$password',
			akses_sistem='Ya'
			where id_guru='$id'
	";

	mysqli_query($conn, $sql);
	?>
	<script type='text/javascript'>
		alert('Data akses login guru berhasil disimpan');
		window.location.href="../../index.php?a=akses_guru"
	</script>
	<?php } 
} ?>