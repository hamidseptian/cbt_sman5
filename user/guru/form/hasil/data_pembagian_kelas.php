<table class="table table-striped table-bordered" id="example1">
    <thead>
    <tr>
        <td  style="width:5%">No</td>
        <td>Kelas</td>
        <td>Lokal</td>
        <td>Jumlah Siswa</td>
        <td>Jumlah Paket Ujian</td>
    </tr>
</thead>
<tbody>
<?php 

include "../koneksi.php" ;
 $idguru= $_SESSION['id_user'];
 $idmapel= $_SESSION['id_mapel'];
 
$perintah= "SELECT  * from pembagian_kelas join kelas on pembagian_kelas.id_kelas=kelas.id_kelas where pembagian_kelas.id_guru='$idguru'";
$sql = mysqli_query($conn, $perintah) or die("query salah");
$no=1;
while ($data=mysqli_fetch_array($sql)) {
    $idkelas = $data['id_kelas'];
    $tingkat = $data['tingkat'];
    $qsiswa = mysqli_query($conn, "SELECT * from siswa where id_kelas='$idkelas'");
    $jsiswa = mysqli_num_rows($qsiswa);

    $qpaket = mysqli_query($conn, "SELECT * from paket where tingkat_kelas='$tingkat' and id_mapel='$idmapel'");
    $jpaket = mysqli_num_rows($qpaket);
    ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['tingkat']; ?></td>
        <td><?php echo $data['nama_kelas']; ?></td>
        <td><?php echo $jsiswa ?></td>
        <td>
            <ol>
            <?php
            while ($dpaket = mysqli_fetch_array($qpaket)) { ?>
                <li><a href="?a=listnilai&id=<?php echo $dpaket['id_paket'] ?>&idkelas=<?php echo $idkelas ?>" data-toggle='tooltip' title="Lihat nilai ujian untuk paket <?php echo $dpaket['nama_paket'] ?>"><?php echo $dpaket['nama_paket'] ?></a></li>
            <?php }  ?>
        </ol>
             
         </td>
       
       
       
    </tr>
   <?php } ?>
</tbody>
</table>


