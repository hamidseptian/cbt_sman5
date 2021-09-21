<?php 
include "../koneksi.php" ;
$idsiswa=$_SESSION['id_user'];
$prt=mysqli_query($conn, "SELECT * from siswa where id_siswa='$idsiswa'")or die("salah");
$data=mysqli_fetch_array($prt);
$kelas = $data['id_kelas'];
$qkelas = mysqli_query($conn, "SELECT * from kelas where id_kelas='$kelas'")or die(mysqli_error());
$dkelas = mysqli_fetch_array($qkelas);
$tingkat = $dkelas['tingkat'];

$qwaktu =  mysqli_query($conn, "SELECT * from waktu where id_waktu='1'");
$dwaktu = mysqli_fetch_array($qwaktu);
$jenisujian = $dwaktu['jenis_ujian'];
$qmapel = mysqli_query($conn, "SELECT * from pembagian_mapel join mapel on pembagian_mapel.id_mapel = mapel.id_mapel where pembagian_mapel.id_kelas='$kelas'")or die(mysqli_error());
$jmapel = mysqli_num_rows($qmapel);
if ($jmapel>0) { ?>
<table class="table" id="tabelscroll">
  <thead>
    <td>No</td>
    <td>Nama Mata Pelajaran</td>
    <td>Paket Soal</td>
    <td>Status</td>
    <td>Option</td>
  </thead>
  <tbody>
    <?php 
$no=1;
while ($data=mysqli_fetch_array($qmapel)) {
  $idmapel = $data['id_mapel'];
  $perintah= "SELECT *  from paket  where boleh_akses='Ya' and tingkat_kelas='$tingkat' and jenis_ujian='$jenisujian' and id_mapel='$idmapel' order by nama_paket asc";
$sql = mysqli_query($conn, $perintah) or die("query salah");
$dpaket=mysqli_fetch_array($sql);
$jpaket=mysqli_num_rows($sql);
  $idpaket= $dpaket['id_paket'];


 // echo $idpaket;
$p2= "SELECT  *  from ujian where id_paket='$idpaket' and id_siswa='$idsiswa' group by id_paket ";
$q4 = mysqli_query($conn, $p2) or die("query salah");
$d2=mysqli_fetch_array($q4);
$ujianselesai=$d2['id_paket'];




    ?>
<tr>
  <td><?php echo $no++ ?></td>
  <td><?php echo $data['nama_mapel'] ?></td>
  
    <?php if ($jpaket==0) { ?>
      <td>Belum ada paket soal</td>
      <td>Tidak bisa melaksanakan ujian</td>
      <td></td>
    <?php  } else{ ?>
    <td><?php echo $dpaket['nama_paket'] ?></td>
    
      <?php 
        if ($ujianselesai==$idpaket) { ?>
        <td>Selesai</td>
        <td>
         <a href="?m=detail_hasil&id=<?php echo $idpaket ?>" class="btn btn-success btn-xs"  data-toggle="tooltip">Lihat Hasil</a> 
      <!--  <a href="form/soal/reset_to.php?id=<?php echo $dpaket['id_paket']?>&idsoal=1" class="btn btn-warning btn-xs"  onclick="return confirm('Jika anda ulang ujian data ujian anda sebelumnya akan dihapus. Tetap dilanjutkan?')" >Ulang Ujian</a>  -->
       </td>
        <?php }else{ ?>
        <td>Belum Ujian</td>
        <td>
          <a href="?m=peraturan&id=<?php echo $idpaket?>&idsoal=1" class="btn btn-info btn-xs" >Mulai Ujian</a>
        </td>
        <?php }
       ?>
    
    <?php } ?>
  
















            

      
   <?php } ?>


</tbody></table>
<?php }else{
echo '<div class="alert alert-danger">Tidak ada mata pelajaran untuk kelas '.$dkelas['nama_kelas'].'</div>';
} ?>
