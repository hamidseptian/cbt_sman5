

<?php


include "../../koneksi.php";
  $id=$_GET['id'];
  $idpaket=$_GET['id'];
  $perintah="SELECT * From paket join mapel on mapel.id_mapel=paket.id_mapel
    join kelas on kelas.tingkat=paket.tingkat_kelas
   where paket.id_paket='$id'";
  $jalan=mysqli_query($conn, $perintah)or die(mysqli_error());
  $d1=mysqli_fetch_array($jalan);
  $idkelas = $d1['id_kelas'];

  $total = mysqli_num_rows($jalan);
  $no=1;








  //untuk mencari nilai
  $q1=mysqli_query($conn, "SELECT * from paket where id_paket='$idpaket'")or die("query salah");
$d0=mysqli_fetch_array($q1);


$q3=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket'")or die("query salah");
$dd=mysqli_num_rows($q3);
$jumlahsoal=$dd;
$nomorakhir=$dd;
$skor = 100 / $jumlahsoal;

$hasilnilai=0;


?>











  <div class="box box-default box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Data Hasil Ujian</h3>
    </div>
  
    <div class="box-body">
      


















        <div class="col-md-3">

          <div class="box-header with-border">
            <h3 class="box-title">Identitas Ujian</h3>
          </div>
            
            <div class="box-body">
              <strong><i class="fa fa-book"></i> Nama Paket</strong>
              <p class="text-muted"><?php echo $d1['nama_paket'] ?></p>
              <hr>

              <strong><i class="fa fa-book"></i> Mata Pelajaran</strong>
              <p class="text-muted"><?php echo $d1['nama_mapel'] ?></p>
              <hr>
              <strong><i class="fa fa-book"></i> Jenis Ujian</strong>
              <p class="text-muted"><?php echo $d1['jenis_ujian'] ?></p>
              <hr>

              <strong><i class="fa fa-book"></i> Kelas</strong>
              <p class="text-muted"><?php echo $d1['nama_kelas'] ?></p>
              <hr>

            </div>
           
          </div>










        <div class="col-md-9">

          <div class="box-header with-border">
            <h3 class="box-title">Data Penilaian</h3>
           
          </div>

            <form action="form/pembagian_kelas/simpan_pembagian_kelas.php" method="post">
              <input type="hidden" name="id" value="<?php echo $d1['id_guru'] ?>">
            <div class="box-body">
              <table class="table table-striped table-bordered" id="example1">
                <thead>
                <tr>
                  <td>No</td>
                  <td>Nama</td>
                  <td>Nilai</td>
                  <td>Status</td>
                </tr>
              </thead>
                <?php 
                $qsiswa = mysqli_query($conn, "SELECT * from siswa where id_kelas='$idkelas'")or die(mysqli_error());
                $no=1;
                while ($dsiswa = mysqli_fetch_array($qsiswa)) { 
                  $idsiswa=$dsiswa['id_siswa'];





























for ($i=1; $i <= $nomorakhir; $i++) { 
//mengambil data di tabel soal
  $q4=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket' and nomor_soal='$i'")or die("query salah");
  $d1=mysqli_fetch_array($q4);
  $nomor_soal=$d1['nomor_soal'];
  $idsoal=$d1['id_soal'];

//mengambil data di tabel jawaban

  $q5=mysqli_query($conn, "SELECT * from jawaban where id_paket='$idpaket' and id_soal='$nomor_soal'")or die("query salah");

// // ambil data dari table try out
  $q6=mysqli_query($conn, "SELECT * from ujian where id_paket='$idpaket' and id_soal='$nomor_soal' and id_siswa='$idsiswa'")or die("query salah");
  $d3=mysqli_fetch_array($q6);
  //echo $d3['jawaban'];
  $jawabananda=$d3['jawaban'];

  //mengambil poin



  ?>

    <?php
    if($jawabananda==''){
      $terjawab="Tidak Terjawab";
      $poin=0;
    } 
    else{
      $terjawab=$jawabananda;
        $q7=mysqli_query($conn, "SELECT * from jawaban where id_paket='$idpaket' and id_soal='$nomor_soal' and pilihan='$jawabananda'")or die("query salah");
        $d4=mysqli_fetch_array($q7);
        $poin=$skor;
    }

  
    ?>
      
   


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
$target=5;

if ($nilaididapat >=$target) {
  $statuslulus ="Lulus";
  $class="callout callout-success";
}

else{
  $statuslulus ="Tidak Lulus";
  $class="callout callout-danger";

}























                  ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $dsiswa['nama_siswa'] ?></td>
                    <td><?php echo  $nilaididapat  ?> </td>
                    <td><?php echo  $statuslulus    ?> </td>
                  </tr>
                <?php }
                 ?>
              </table>          
            </div>
         
            </form>
           
          </div>





      



    </div>
  
  </div>

