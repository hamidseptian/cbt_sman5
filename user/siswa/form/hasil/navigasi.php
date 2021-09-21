

<?php 
include "../koneksi.php";
    $id=$_GET['idp'];
    //echo $id;
$idsiswa=$_SESSION['id_user'];


$perintah= "SELECT * from paket  where id_paket='$id'";
$sql = mysqli_query($conn, $perintah)or die(mysqli_error());
$jumlahsoal=mysqli_num_rows($sql);

$data=mysqli_fetch_array($sql); 
?>
  
<hr>
<?php 
$nom=1;
$nq=mysqli_query($conn, "SELECT * from soal where id_paket='$id'")or die("query salah");







  while ($qdt=mysqli_fetch_array($nq)) {?>
<?php 
 $idsoal=$qdt['nomor_soal'];
 $idto=$qdt['id_soal'];
    $q3=mysqli_query($conn, "SELECT * from soal join ujian on ujian.id_soal=soal.nomor_soal where ujian.id_paket='$id' and ujian.id_siswa='$idsiswa' and soal.nomor_soal='$idsoal'")or die("query salah");
    $d4=mysqli_fetch_array($q3);
    $idsoallterjawab=$d4['nomor_soal'];



 ?>
<!--   <?php //elseif($idsoal==$_GET['idsoal']): ?>
             class="btn btn-info" -->
     <a href="?m=pembahasan&idp=<?php echo $data['id_paket']?>&idsoal=<?php echo $qdt['nomor_soal'] ?>"
        <?php if ($idsoal==$idsoallterjawab): ?>
            class="btn btn-info" style="width :50px; height: 35px; margin-bottom: 2px;"
      
      
        <?php else: ?> 
            class="btn btn-default"
             style="width :50px; height: 35px;margin-bottom: 2px;" 
        <?php endif ?>
      >
    <?php echo $qdt['nomor_soal'] ?>
 
        
    </a>

  <?php }
 ?>

<br>