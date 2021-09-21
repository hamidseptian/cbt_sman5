<?php 
session_start();
include "../../../koneksi.php" ;
$idmember=$_SESSION['id_user'];
$idpaket= $_GET['id'];
$idsoal= $_GET['idsoal'];
//$jawaban= $_POST['jawaban'];

          $q3=mysqli_query($conn, "DELETE from try_out where id_paket='$idpaket' and id_soal='$idsoal' and id_member='$idmember' and jadwal_ujian=''")or die(mysqli_error());
        
          



 echo "<meta http-equiv='refresh' content='0; url=http:../../?m=paket&id=$idpaket&idsoal=$idsoal'>";
 ?>
 