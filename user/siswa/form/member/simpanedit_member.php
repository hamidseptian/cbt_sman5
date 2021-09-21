<?php 
include "../../../koneksi.php" ;

$id= $_POST['id'];
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

$perintah= "UPDATE member set 
			nama='$nm',
			panggilan='$pgl',
			email= '$em',
			hp='$hp',
			wa= '$wa',
			tmpl='$tmpl', 
			tgll='$tgll',
			jk='$jk',
			alamat='$alm',
			pendidikan= '$pt',
			instansi='$ins', 
			jurusan='$j',
			ipk='$ipk', 
			pernah_cpns='$ikut',
			nilai='$nilai', 
			program='$mp',
			pembayaran='$pemb'
			where id_member='$id'";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());

header("Location:../../?m=biodata");


//  echo "<meta http-equiv='refresh' content='0; url=http:../../index.php?m=wargapanti'>";
 ?>
 