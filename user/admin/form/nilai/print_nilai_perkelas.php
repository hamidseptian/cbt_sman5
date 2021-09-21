<?php

include "../../../../koneksi.php";
require_once("../../../../library/dompdf/src/Autoloader.php");
Dompdf\Autoloader::register();
use Dompdf\Dompdf;


$id=$_GET['id'];
$qkelas = mysqli_query($conn, "SELECT * from kelas left join ptk on ptk.id_ptk=kelas.id_ptk where kelas.id_kelas = '$id'");
$dkelas= mysqli_fetch_array($qkelas);
$idkelas = $dkelas['id_kelas'];
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




$q = mysqli_query($conn, "SELECT * from ptk");
$no=1;

$html = '
<br>
<h4>Data Nilai Siswa Kelas '.$dkelas['tingkat'] .' Lokal  '. $dkelas['nama_kelas'].'</h4>


 <table class="table table-striped table-bordered" border="1" style="border-collapse:collapse; width:100%">
    <thead>
  <tr>
    <td rowspan="2">No</td>
    <td rowspan="2">Nama siswa</td>
    <td colspan="'.$jmapel.'" align="center">Mata Pelajaran</td>
    <td rowspan="2">Jumlah</td>
    <td rowspan="2">Rata Rata</td>
    
    
  </tr>
    <tr>';


    while ($dmapel = mysqli_fetch_array($qmapel)) { 
      $html .='<td>'.$dmapel['nama_mapel'].'</td>';
    }
    $html.='
    </tr>
</thead> 
';



while ($data=mysqli_fetch_array($jalan))
{ 
$idsiswa =$data['id_siswa'];
$kelas=$data['nama_kelas'];
$siswa=$data['nama_siswa'];
$nol=0;

  $qmapel2 = mysqli_query($conn, "SELECT * from pembagian_mapel left join mapel on pembagian_mapel.id_mapel = mapel.id_mapel where id_kelas ='$idkelas'");
$html .='
    <tr>
        <td>'.$no++.'</td>
    <td>'.$siswa.'</td>';


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

$html .='
  <td>'.$hasilnilai.'</td>';
    }

$ratarata = $total / $jmapel;
    $html.='<td>'.$total.'</td>
    <td>'.$ratarata.'</td>
    </tr>';






}
$html .= '
</table>
';

$dompdf = new Dompdf();

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream('Data Nilai Siswa Kelas '.$dkelas['tingkat'] .' Lokal  '. $dkelas['nama_kelas'].'.pdf', ['Attachment'=>0]);

?>
<p style="font-size: "></p>

