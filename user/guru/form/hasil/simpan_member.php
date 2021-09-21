<?php 
include "../../../koneksi.php" ;

$nm= $_POST['nm'];
$pgl= $_POST['pgl'];
$em= $_POST['em'];
$hp= $_POST['hp'];
$wa= $_POST['wa'];
$tmpl= $_POST['tmpl'];
$tgll= $_POST['tgll'];
$jk= $_POST['jk'];
$alm= $_POST['alm'];
$pt= $_POST['pt'];
$ins= $_POST['ins'];
$j= $_POST['jurusan'];
$ipk= $_POST['ipk'];
$ikut= $_POST['ikut'];

$tiu= $_POST['tiu'];
$twk= $_POST['twk'];
$tkp= $_POST['tkp'];
$mp= $_POST['mp'];
$pemb= $_POST['pemb'];
$gabungnilai=[$tiu, $twk, $tkp];
$nilai = implode(",", $gabungnilai);

$perintah= "INSERT into member 
			values('','$nm','$pgl', '$em','$hp', '$wa','$tmpl', '$tgll','$jk', '$alm', '$pt','$ins', '$j','$ipk', '$ikut','$nilai', '$mp','$pemb')";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());

header("Location:../../?a=member");


//  echo "<meta http-equiv='refresh' content='0; url=http:../../index.php?m=wargapanti'>";
 ?>
 