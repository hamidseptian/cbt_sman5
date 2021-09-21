
<?php 


$idpaket=$_GET['id'];


$idsiswa=$_SESSION['id_user'];

$jmlpoin=0;
// mengambil data di table paket
$q1=mysqli_query($conn, "SELECT * from paket join mapel on mapel.id_mapel=paket.id_mapel where paket.id_paket='$idpaket'")or die("query salah");
$d0=mysqli_fetch_array($q1);
$kkm= $d0['kkm'];



$q3=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket'")or die("query salah");
$dd=mysqli_num_rows($q3);
$nomorakhir=$dd;
$jumlahsoal=$dd;
$skor = 100/ $jumlahsoal  ;

//mengambil data nilai dari database
// $pr= "select * from ketentuan_nilai where id_ketentuan='0'";
// $sql2 = mysqli_query($conn, $pr) or die("query salah");
// $dkn=mysqli_fetch_array($sql2);
// $nilaitiu=$dkn['tiu'];
// $nilaitwk=$dkn['twk'];
// $nilaitkp=$dkn['tkp'];


$hasilnilai=0;

//echo $idpaket."<br>".$idsiswa."<br>".$nomorakhir;
?>


<table class="table table-striped table-bordered" id="tabelscrol">
  <thead>
  <tr>
    <td style="width: 5%">No Soal</td>
   
    <td>Soal / Pertanyaan</td>
    <td>Jawaban Anda</td>
    <td>Jawaban Benar</td>
    <td>Poin</td>
  
  </tr>
</thead>




<?php
for ($i=1; $i <= $nomorakhir; $i++) { 

//mengambil data di tabel soal
  $q4=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket' and nomor_soal='$i'")or die("query salah");
  $d1=mysqli_fetch_array($q4);
  $nomor_soal=$d1['nomor_soal'];
  $idsoal=$d1['id_soal'];
  $kuncijawaban=$d1['kunci_jawaban'];

//mengambil data di tabel jawaban

  $q5=mysqli_query($conn, "SELECT * from jawaban where id_paket='$idpaket' and id_soal='$nomor_soal'")or die("query salah");

// // ambil data dari table try out
  $q6=mysqli_query($conn, "SELECT * from ujian where id_paket='$idpaket' and id_soal='$nomor_soal' and id_siswa='$idsiswa'")or die("query salah");
  $d3=mysqli_fetch_array($q6);
  //echo $d3['jawaban'];
  $jawabananda=$d3['jawaban'];

  //mengambil poin



  ?>
<tr>
  <td><?php echo $d1['nomor_soal'] ?></td>

  <td><?php
    if($d1['gambar']!==''){
      echo $d1['soal'];?>
      <br>
      <img src="../admin/form/soal/file/<?php echo $d1['gambar']; ?>" style="width:300px;"> 
      <?php

    }
      else{
        echo $d1['soal'];
      }

   ?>
    
    <ol type="A">
      <?php 
         while($d2=mysqli_fetch_array($q5)){?>
      <li><?php echo $d2['jawaban'] ?></li>
        
  <?php } ?>
    </ol>
  </td>
  
  <td>
    <?php
    if($jawabananda==''){
      $terjawab="Tidak Terjawab";
      $poin=0;
    } 
    else{
      $terjawab=$jawabananda;
      if ($terjawab ==$kuncijawaban ) {
          $poin = $skor;
      }else{
        $poin = 0;
      }
        // $q7=mysqli_query($conn, "SELECT * from jawaban where id_paket='$idpaket' and id_soal='$nomor_soal' and pilihan='$jawabananda'")or die("query salah");
        // $d4=mysqli_fetch_array($q7);
        // $poin=$skor;
    }

    echo $terjawab;
    ?>
      
    </td>
  <td><?php echo $d1['kunci_jawaban'] ?></td>
  <td><?php echo $poin ?></td>
</tr>


<?php 



// //menjumlahkan poin TIU
// $q4=mysqli_query($conn, "SELECT * from jawaban join soal on jawaban.id_soal=soal.nomor_soal where (jawaban.id_paket='$idpaket' and soal.id_paket='$idpaket' and jawaban.id_soal='$nomor_soal' and jawaban.pilihan='$jawabananda')")or die("query salah");
// $dnilai=mysqli_fetch_array($q4);
// $poin=$dnilai['poin'];
// // echo $poin;
$hasilnilai+=$poin;


 

?>

  <?php } ?>

 <?php 
$nilaididapat=$hasilnilai;
$target=$kkm;

if ($nilaididapat >=$target) {
  $statuslulus ="Lulus";
  $class="callout callout-success";
}

else{
  $statuslulus ="Tidak Lulus";
  $class="callout callout-danger";

}



if ($nilaididapat >=$target) {
  $pencapaian ="Anda memenuhi syarat";
  $warna = 'green';

}
else{
  $pencapaian = "Tidak memenuhi syarat";
  $warna = 'red';
}




 ?>


<?php 

$idsiswa=$_SESSION['id_user'];

$q=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket'")or die("query salah");
$totsoal=mysqli_num_rows($q);
$q2=mysqli_query($conn, "SELECT * from ujian where id_paket='$idpaket' and id_siswa='$idsiswa'")or die("query salah");
$totterjawab=mysqli_num_rows($q2);
$belumdijawab=$totsoal-$totterjawab;
 ?>

  <div class="col-lg-4 col-xs-12">
    <div class="small-box bg-aqua">
      <a href="#" class="small-box-footer">
       <p>Total Soal</p>
      </a>
      <div class="inner">
        <h3><center><?php echo $totsoal ?></center></h3>
      </div>
    </div>
  </div>
  
  <div class="col-lg-4 col-xs-12">
    <div class="small-box bg-aqua">
      <a href="#" class="small-box-footer">
       <p>Soal Terjawab</p>
      </a>
      <div class="inner">
        <h3><center><?php echo $totterjawab ?></center></h3>
      </div>
    </div>
  </div>
  
  <div class="col-lg-4 col-xs-12">
    <div class="small-box bg-aqua">
      <a href="#" class="small-box-footer">
       <p>Tidak Terjawab</p>
      </a>
      <div class="inner">
        <h3><center><?php echo $belumdijawab ?></center></h3>
      </div>
    </div>
  </div>
  
<div class="col-lg-4 col-xs-12">
  <!-- small box -->
  <div class="small-box bg-aqua">
    <a href="#" class="small-box-footer">
     <p>KKM</p>
    </a>
    <div class="inner">
      <h3><center><?php echo $kkm ?></center></h3>
    </div>
    <p class="small-box-footer">
      Syarat Kelulusan
    </p>
    
    
  </div>
</div>
  
<div class="col-lg-4 col-xs-12">
  <!-- small box -->
  <div class="small-box bg-aqua">
    <a href="#" class="small-box-footer">
     <p>Nilai</p>
    </a>
    <div class="inner">
      <h3><center><?php echo $nilaididapat ?></center></h3>
    </div>
    <p class="small-box-footer">
      <?php echo $pencapaian ?>
    </p>
    
    
  </div>
</div>
 




<div class="col-lg-4 col-xs-12">
  <!-- small box -->
  <div class="small-box bg-aqua">
    <a href="#" class="small-box-footer">
     <p>Anda Dinyatakan</p>
    </a>
    <div class="inner">
      <h3 style="color: <?php echo  $warna ?>"><center><?php echo $statuslulus ?></center></h3>
    </div>
    <p class="small-box-footer">
      <a href="#" style="color:white">Lihat Jawaban Benar Di Bawah</a>
    </p>
     
    
  </div>
</div>


 
 <div class="clearfix"></div>



<div class="clearfix"></div>
<hr>
 </table>
