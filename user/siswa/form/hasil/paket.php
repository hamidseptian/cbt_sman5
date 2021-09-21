<?php 
$idsiswa=$_SESSION['id_user'];
include "../koneksi.php" ;
$idsiswa=$_SESSION['id_user'];
$prt=mysqli_query($conn, "SELECT * from siswa join kelas on kelas.id_kelas=siswa.id_kelas where id_siswa='$idsiswa'")or die("salah");
$data=mysqli_fetch_array($prt);
$kelas = $data['id_kelas'];


$perintah = "SELECT * from pembagian_mapel as a join mapel as b on a.id_mapel=b.id_mapel where a.id_kelas='$kelas'";
$sql = mysqli_query($conn, $perintah) or die("query salah");
$jmapel = mysqli_num_rows($sql);


 ?>
<table class="table">
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $data['nama_siswa'] ?></td>
    </tr>
    <tr>
        <td>NIS</td>
        <td>:</td>
        <td><?php echo $data['nis'] ?></td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>:</td>
        
         <td><?php echo $data['nama_kelas'] ?></td>
    </tr>
</table>
<hr>
<?php if ($jmapel>0) { ?>
  

<table class="table table-striped table-bordered" id="example1">
    <thead>
    <tr>
        <td  style="width:5%">No</td>
        <td>Mata Pelajaran</td>
        <td>Status</td>
        <td>Nilai</td>
 
        <td style="width:10%">Option</td>
    </tr>
</thead>
<tbody>
<?php 
$qkelas = mysqli_query($conn, "SELECT * from kelas where id_kelas='$kelas'")or die(mysqli_error());
$dkelas = mysqli_fetch_array($qkelas);
$tingkat = $dkelas['tingkat'];

$qwaktu =  mysqli_query($conn, "SELECT * from waktu where id_waktu='1'");
$dwaktu = mysqli_fetch_array($qwaktu);
$jenisujian = $dwaktu['jenis_ujian'];


$no=1;
$nol=0;
while ($data=mysqli_fetch_array($sql)) {
 $idmapel= $data['id_mapel'];
 $qpaket = mysqli_query($conn, "SELECT * from paket where id_mapel='$idmapel' and jenis_ujian='$jenisujian'");
 $dpaket = mysqli_fetch_array($qpaket);   

 $idpaket = $dpaket['id_paket'];
    $p2= "SELECT  *  from ujian where id_paket='$idpaket' and id_siswa='$idsiswa' group by id_paket ";
$q4 = mysqli_query($conn, $p2) or die("query salah");
$d2=mysqli_fetch_array($q4);
$ujianselesai=$d2['id_paket'];


    ?>
      <tr>
        <td><?php echo $no++; ?>  </td>
        <td><?php echo $data['nama_mapel']; ?></td>
         
             <?php if ($ujianselesai==$idpaket && $dpaket['id_mapel']==$idmapel): ?>
                <td>Selesai</td>
                <td>
                    <?php 
                    $q3=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket'")or die("query salah");
                    $dd=mysqli_num_rows($q3);
                    $nomorakhir=$dd;
                    $jumlahsoal=$dd;
                    $skor = 100/ $jumlahsoal  ;
                    $hasilnilai=0;

































                    for ($i=1; $i <= $nomorakhir; $i++) { 

//mengambil data di tabel soal
  $q4=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket' and nomor_soal='$i'")or die("query salah");
  $d1=mysqli_fetch_array($q4);
  $nomor_soal=$d1['nomor_soal'];
  $idsoal=$d1['id_soal'];
  $kuncijawaban=$d1['kunci_jawaban'];

// // ambil data dari table try out
  $q6=mysqli_query($conn, "SELECT * from ujian where id_paket='$idpaket' and id_soal='$nomor_soal' and id_siswa='$idsiswa'")or die("query salah");
  $d3=mysqli_fetch_array($q6);

  $jawabananda=$d3['jawaban'];

  //mengambil poin

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
        
    }

$hasilnilai+=$poin; 
} 
echo $hasilnilai;
$total = $nol+=$hasilnilai;
?>




                </td>
                <td><a href="?m=detail_hasil&id=<?php echo $idpaket ?>" class="btn btn-info btn-xs"  data-toggle="tooltip">Lihat Hasil</a></td>
            <?php else: ?>    
                <td>Ujian Belum Dilaksanakan</td>
                <td></td>
                <td></td>
                   
            <?php endif ?>
         

             
    
       
       
    </tr>
   <?php } ?>
  
</tbody>
<tfoot>
   <tr>
     <td colspan="3">Total Nilai</td>
     <td colspan="2"><?php echo $total ?></td>
   </tr>
   <tr>
     <td colspan="3">Rata Rata</td>
     <td colspan="2"><?php echo $rata2 = $total/$jmapel ?></td>
   </tr>
</tfoot>
</table>
<?php }
else{
  echo '<div class="alert alert-danger">Tidak ada mata pelajaran untuk kelas '.$data['nama_kelas'].'</div>';
} ?>
<!-- <a href="" class="btn btn-info">Print</a> -->

