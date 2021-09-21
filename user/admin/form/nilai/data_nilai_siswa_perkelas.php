<?php 
include "../../koneksi.php";
$id=$_GET['id'];
$qkelas = mysqli_query($conn, "SELECT * from kelas left join ptk on ptk.id_ptk=kelas.id_ptk where kelas.id_kelas = '$id'");
$dkelas= mysqli_fetch_array($qkelas);
$idkelas = $dkelas['id_kelas'];
?>




<?php


  
  $perintah="SELECT * From siswa join kelas on kelas.id_kelas=siswa.id_kelas where kelas.id_kelas='$idkelas'";
  $jalan=mysqli_query($conn, $perintah)or die(mysqli_error());
  $idkelas = $dkelas['id_kelas'];

  $jsiswa = mysqli_num_rows($jalan);
  $no=1;
  $qmapel = mysqli_query($conn, "SELECT * from pembagian_mapel left join mapel on pembagian_mapel.id_mapel = mapel.id_mapel where id_kelas ='$idkelas'");

  $jmapel = mysqli_num_rows($qmapel);

  $qwaktu =  mysqli_query($conn, "SELECT * from waktu where id_waktu='1'");
$dwaktu = mysqli_fetch_array($qwaktu);
$jenisujian = $dwaktu['jenis_ujian'];

?>













          

<div class="box-header with-border">
  <h3 class="box-title">Data Nilai Siswa Kelas <?php echo $dkelas['tingkat'] ?> Lokal  <?php echo $dkelas['nama_kelas'] ?></h3>
  <div class="pull-right">
  	<a href="form/nilai/print_nilai_perkelas.php?id=<?php echo $id ?>" class="btn btn-default" target="_blank">Print</a>
  </div>
</div>
<!-- <div style="overflow-x: scroll"> -->
 <table class="table table-striped table-bordered" id="tabelscrol">
	<thead>
  <tr>
    <td rowspan="2">No</td>
    <td rowspan="2">Nama siswa</td>
    <td colspan="<?php echo $jmapel ?>">Mata Pelajaran</td>
    <td rowspan="2">Jumlah</td>
    <td rowspan="2">Rata Rata</td>
    <!-- <td rowspan="2">Option</td> -->
    
  </tr>
	<tr>
    <?php 
    while ($dmapel = mysqli_fetch_array($qmapel)) { ?>
      <td><?php echo $dmapel['nama_mapel'] ?></td>
    <?php } ?>
		
	</tr>
</thead>
	

<?php

while ($data=mysqli_fetch_array($jalan))
{ 
$idsiswa =$data['id_siswa'];
$kelas=$data['nama_kelas'];
$siswa=$data['nama_siswa'];


?>
	<tr>
		<td><?php echo $no++; ?></td>
	

		
	<td><?php echo $siswa; ?></td>



















  <?php 
$nol=0;

  $qmapel2 = mysqli_query($conn, "SELECT * from pembagian_mapel left join mapel on pembagian_mapel.id_mapel = mapel.id_mapel where id_kelas ='$idkelas'");

  while ($dmapel2 = mysqli_fetch_array($qmapel2)) { 

 $idmapel= $dmapel2['id_mapel'];

 $qpaket = mysqli_query($conn, "SELECT * from paket where id_mapel='$idmapel' and jenis_ujian='$jenisujian'");
 $dpaket = mysqli_fetch_array($qpaket);   

 $idpaket = $dpaket['id_paket'];

    $p2= "SELECT  *  from ujian where id_paket='$idpaket' and id_siswa='$idsiswa' group by id_paket ";
$q4 = mysqli_query($conn, $p2) or die("query salah");
$d2=mysqli_fetch_array($q4);
$ujianselesai=$d2['id_paket'];







 $q3=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket'")or die("query salah");
                    $dd=mysqli_num_rows($q3);
                    $nomorakhir=$dd;
                    $jumlahsoal=$dd;
                  @  $skor = 100 / $jumlahsoal  ;
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

$total = $nol+=$hasilnilai;





?>
      <td><?php echo $hasilnilai;?></td>
    <?php } ?>
    <td><?php echo $total ?></td>
    <td><?php echo $total / $jmapel ?></td>
    <!-- <td>
      <a href="" class="btn btn-default btn-xs">Print</a>
    </td> -->


 

		</tr>

		<?php } ?>
				
	</table>


          


