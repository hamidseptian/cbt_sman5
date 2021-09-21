<?php 
session_start();
$iduser=$_SESSION['id_user'];
include "../koneksi.php";
    $id=$_GET['id'];



$perintah= "SELECT * from paket  where id_paket='$id'";
$sql = mysqli_query($conn, $perintah)or die(mysqli_error());
$jumlahsoal=mysqli_num_rows($sql);

$data=mysqli_fetch_array($sql); 
?>
<h2 ><?php echo $data['nama_paket']; ?></h2>
  
  
<hr>



<table class="table table-striped table-bordered">
  <thead>
  <tr>
    <td style="width: 5%">No Soal</td>
   
    <td>Jenis Soal</td>
    <td>Soal / Pertanyaan</td>
    <td>Jawaban Anda</td>
    <td>Jawaban Benar</td>
    <td>Poin</td>
  
  </tr>
</thead>


<?php 
$no=1;
$idpaket=$_GET['id'];
$idsoal=$_GET['idsoal'];
$ptiu=0;
$ptwk=0;
$ptkp=0;
$q=mysqli_query($conn, "SELECT * from try_out 
  join soal on soal.id_soal=try_out.id_soal
  where try_out.id_paket='$idpaket' and try_out.id_member='$iduser' order by soal.nomor_soal")or die("query salah");
while($dt=mysqli_fetch_array($q)){ 
 
?>
  <?php 
$ids=$dt['id_soal'];
$jawaban=$dt['jawaban']; 
$q2=mysqli_query($conn, "SELECT * from jawaban join soal on jawaban.id_soal=soal.id_soal where jawaban.id_paket='$idpaket' and jawaban.id_soal='$ids' and jawaban.pilihan='$jawaban'")or die("query salah");
$dtj=mysqli_fetch_array($q2);
$poin=$dtj['poin'];

$jmlpoin+=$poin
?>
  <tr>
    <td><?php echo $dt['nomor_soal']; ?></td>
    <td><?php echo $dt['jenis_soal']; ?></td>
    <td><?php echo $dt['soal']; ?>
          
      <ol type="A">
    
          <?php   

          $q2=mysqli_query($conn, "SELECT * from jawaban where id_paket='$idpaket' and id_soal='$ids' and pilihan!='Z'")or die("query salah");
              while ($data=mysqli_fetch_array($q2)) { ?>  
               <li> <?php echo $data['jawaban']; ?></li>
          <?php   } ?>
</ol>
</td>
    </td>
    <td>
      <?php if ($dtj['pilihan']=='Z'): ?>
        Tidak Terjawab
      <?php else: ?>
        <?php echo $dtj['pilihan']; ?>
      <?php endif ?>
    </td>

    <td><?php echo $dt['kunci_jawaban']; ?></td>
 <td><?php echo $poin; ?></td><?php

//menjumlahkan poin TIU
$q4=mysqli_query($conn, "SELECT * from jawaban join soal on jawaban.id_soal=soal.id_soal where (jawaban.id_paket='$idpaket' and jawaban.id_soal='$ids' and jawaban.pilihan='$jawaban') and soal.jenis_soal='TIU'")or die("query salah");
$djtiu=mysqli_fetch_array($q4);
$pointiu=$djtiu['poin'];
// echo $pointiu;
$ptiu+=$pointiu;
//menjumlahkan poin Twk
$q5=mysqli_query($conn, "SELECT * from jawaban join soal on jawaban.id_soal=soal.id_soal where (jawaban.id_paket='$idpaket' and jawaban.id_soal='$ids' and jawaban.pilihan='$jawaban') and soal.jenis_soal='TWK'")or die("query salah");
$djtwk=mysqli_fetch_array($q5);
$pointwk=$djtwk['poin'];
// echo $pointwk;
$ptwk+=$pointwk;
//menjumlahkan poin tkp
$q6=mysqli_query($conn, "SELECT * from jawaban join soal on jawaban.id_soal=soal.id_soal where (jawaban.id_paket='$idpaket' and jawaban.id_soal='$ids' and jawaban.pilihan='$jawaban') and soal.jenis_soal='TKP'")or die("query salah");
$djtkp=mysqli_fetch_array($q6);
$pointkp=$djtkp['poin'];
// echo $pointkp;
$ptkp+=$pointkp;

 }

?>

  </tr>

 <?php 
$hasiltiu=$ptiu;
$hasiltwk=$ptwk;
$hasiltkp=$ptkp;

if ($hasiltiu >=2 and $hasiltwk >=2 and $hasiltkp>=2) {
  $statuslulus ="Anda Dinyatakan Lulus";
}
else{
  $statuslulus ="Anda Belum Lulus";

}
echo "Nilai TKP : ".$hasiltiu."<br>";
echo "Nilai TIU : ".$hasiltwk."<br>";
echo "Nilai TKP : ".$hasiltkp."<br>";
echo $statuslulus;
 ?>
 </table>
