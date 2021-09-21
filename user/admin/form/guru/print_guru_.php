
<?php 
include "../../../../koneksi.php";

  $perintah="SELECT * From guru join mapel on mapel.id_mapel=guru.id_mapel
  join ptk on guru.id_ptk = ptk.id_ptk";
  $q=mysqli_query($conn, $perintah)or die(mysqli_error());
$no=1;
 ?>
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
  

<?php

while ($data=mysqli_fetch_array($q))
{ 

?>
  <tr>
    <td valign="top"><?php echo $no++; ?></td>
    <td valign="top"><?php echo $data['nama_ptk'] ?></td>
    <td valign="top"><?php echo $data['nuptk'] ?></td>

    <td valign="top"><?php echo $data['nip'] ?></td>
    <td valign="top"><?php echo $data['nama_mapel'] ?></td>
    </tr>



    <?php } ?>
        
  </table>

    <script type="text/javascript">
      // window.print();
    </script>