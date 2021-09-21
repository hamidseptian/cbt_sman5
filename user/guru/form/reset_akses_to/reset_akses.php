<?php
include '../../../koneksi.php';

$id=$_GET['id'];
$sql="DELETE from try_out where id_member='$id'";
$result=mysqli_query($conn, $sql) or die(mysqli_error()) ;


		echo "<script type='text/javascript'>
			alert('Data try out member telah dihapus..!!');
		</script>";
	
		echo "<meta http-equiv='refresh' content='0;
	url=../../?a=reset_akses_to'>";
	
?>

