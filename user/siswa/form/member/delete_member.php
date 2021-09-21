<?php
include '../../../koneksi.php';

$id=$_GET['id'];
$sql="delete from member where id_member='$id'";
$result=mysqli_query($conn, $sql) or die(mysqli_error()) ;


		echo "<script type='text/javascript'>
			alert('Data member telah dihapus..!!');
		</script>";
	
		echo "<meta http-equiv='refresh' content='0;
	url=../../?a=member'>";
	
?>

