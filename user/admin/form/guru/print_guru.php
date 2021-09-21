<?php

include "../../../../koneksi.php";
require_once("../../../../library/dompdf/src/Autoloader.php");
Dompdf\Autoloader::register();
use Dompdf\Dompdf;

  $perintah="SELECT * From guru join mapel on mapel.id_mapel=guru.id_mapel
  join ptk on guru.id_ptk = ptk.id_ptk";
  $q=mysqli_query($conn, $perintah)or die(mysqli_error());
$no=1;

$html = '
<br>
<h4>Data Guru Mata Pelajaran <br>
SMAN 5 Pariaman <br>
Kecamatan Kec. Pariaman Timur, Kabupaten Kota Pariaman, Provinsi Prov. Sumatera Barat</h4>


<table class="table table-striped table-bordered" id="tabelscrol" border="1" style="border-collapse: collapse; font-size:11px; width: 100%">
  <thead>
  <tr>
    <td align="center">No</td>
    <td align="center">Nama</td>
    <td align="center">NUPTK</td>
    <td align="center">NIP</td>
    <td align="center">Mata Pelajaran</td>
  </tr>
</thead>
               
';
while ($data=mysqli_fetch_array($q))
{ 




  $html .='
  <tr>
    <td valign="top">'.$no++.'</td>
    <td valign="top">'.$data['nama_ptk'].'</td>
    <td valign="top">'.$data['nuptk'].'</td>

    <td valign="top">'.$data['nip'].'</td>
    <td valign="top">'.$data['nama_mapel'].'</td>
    </tr>
  ';
}


$html .= '
</table>
';

$dompdf = new Dompdf();

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream('Data Guru.pdf', ['Attachment'=>0]);

?>
<p style="font-size: "></p>

