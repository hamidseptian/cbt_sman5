<?php 
session_start();
include "../../../koneksi.php" ;
$idsiswa=$_SESSION['id_user'];
$idpaket= $_POST['idp'];
$idsoal= $_POST['ids'];
$jawaban= $_POST['jawaban'];

          $q3=mysqli_query($conn, "SELECT * from ujian where id_paket='$idpaket' and id_soal='$idsoal' and id_siswa='$idsiswa' and jadwal_ujian=''")or die(mysqli_error());
          $dat=mysqli_fetch_array($q3);
          $jawabanterpilih=$dat['jawaban'];


$q5=mysqli_query($conn, "SELECT max(nomor_soal) as nomormax from soal where id_paket='$idpaket'")or die("query salah");

$dd=mysqli_fetch_array($q5);
$nomorakhir=$dd['nomormax'];



if ($jawabanterpilih !='') {
	

    $q3=mysqli_query($conn, "UPDATE  ujian set jawaban='$jawaban' where id_paket='$idpaket' and id_soal='$idsoal' and id_siswa='$idsiswa'  ")or die(mysqli_error());
         
    $q4=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket' and nomor_soal='$idsoal' ")or die("query salah");
          $dat=mysqli_fetch_array($q4);
 $next=$dat['nomor_soal'] +1;		

       if ($nomorakhir==$dat['nomor_soal']) {
            header("Location:../../?m=paket&id=$idpaket&idsoal=$nomorakhir");
          }
          else{
            header("Location:../../?m=paket&id=$idpaket&idsoal=$next");
          }
}

else  {
	

    $q3=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket' and nomor_soal='$idsoal'  ")or die("query salah");
          $dat=mysqli_fetch_array($q3);
 $next=$dat['nomor_soal'] +1;	

	$perintah= "INSERT into ujian 
			values('$idsiswa','$idpaket','$idsoal', '$jawaban','')";
			$sql=mysqli_query($conn, $perintah)or die(mysqli_error());

    if ($nomorakhir==$dat['nomor_soal']) {
      header("Location:../../?m=paket&id=$idpaket&idsoal=$nomorakhir");
    }
    else{
      header("Location:../../?m=paket&id=$idpaket&idsoal=$next");
    }
    
}
//  echo "<meta http-equiv='refresh' content='0; url=http:../../index.php?m=wargapanti'>";
 ?>
 