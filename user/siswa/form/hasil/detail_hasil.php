<?php 
session_start();
include "../koneksi.php" ;
$idpaket=$_GET['id'];
$idmember=$_SESSION['id_user'];
$perintah= "SELECT * from history join paket on history.id_paket=paket.id_paket where history.id_paket='$idpaket' and history.id_member='$idmember'";
$sql = mysqli_query($conn, $perintah) or die("query salah");
$no=1;
 ?>
<table class="table table-striped table-bordered" id="example1">
    <thead>
    <tr>
        <td  style="width:5%">No</td>
        <td>Nama Paket</td>
        <td>Jadwal Ujian</td>
        <td>Poin</td>
        <td>Status</td>
 
        <td style="width:15%">Option</td>
    </tr>
</thead>
<tbody>
<?php 



while ($d0=mysqli_fetch_array($sql)) {
  $pakett=mysqli_query($conn, "SELECT * FROM soal where id_paket='$idpaket'")or die("Salah");
  $jumlahsoal = mysqli_num_rows($pakett);

  $idpaket=$d0['id_paket'];
  $jadwal=$d0['jadwal_ujian'];
  $pisah=explode("-", $jadwal);
  $th=$pisah[0];
  $bl=$pisah[1];
  $tg=$pisah[2];
  $jam=$pisah[3];
  $mnt=$pisah[4];
    ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d0['nama_paket']; ?> </td>
        <td>
          Tanggal <?php echo  $tg."-".$bl."-".$th; ?>  <br>
          Jam <?php echo $jam.":".$mnt; ?>
        </td>
        <td><?php echo $jumlahsoal;?> </td>   
        <td>



          <?php
for ($i=1; $i <= $jumlahsoal; $i++) { 

//mengambil data di tabel soal
  $q4=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket' and nomor_soal='$i'")or die("query salah");
  $d1=mysqli_fetch_array($q4);
  $nomor_soal=$d1['nomor_soal'];
  $idsoal=$d1['id_soal'];

//mengambil data di tabel jawaban

//  $q5=mysqli_query($conn, "SELECT * from jawaban where id_paket='$idpaket' and id_soal='$nomor_soal' and pilihan!='Z'")or die("query salah");

// // ambil data dari table try out
  $q6=mysqli_query($conn, "SELECT * from try_out where id_paket='$idpaket' and id_soal='$nomor_soal' and id_member='$idmember' and jadwal_ujian='$jadwal'")or die("query salah");
  $d3=mysqli_fetch_array($q6);
  //echo $d3['jawaban'];
  $jawabananda=$d3['jawaban'];


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
        $poin=$d4['poin'];
       // echo $poin;
    }
    echo $terjawab."-".$poin."<br>";
    
    ?>
      



<?php 



//menjumlahkan poin TIU
$q4=mysqli_query($conn, "SELECT * from jawaban join soal on jawaban.id_soal=soal.id_soal where (jawaban.id_paket='$idpaket' and jawaban.id_soal='$nomor_soal' and jawaban.pilihan='$jawabananda') ")or die("query salah");
$djtiu=mysqli_fetch_array($q4);
$pointiu=$djtiu['poin'];
echo $pointiu;
$ptiu+=$pointiu;
//menjumlahkan poin Twk
$q5=mysqli_query($conn, "SELECT * from jawaban join soal on jawaban.id_soal=soal.id_soal where (jawaban.id_paket='$idpaket' and jawaban.id_soal='$nomor_soal' and jawaban.pilihan='$jawabananda') and soal.jenis_soal='TWK'")or die("query salah");
$djtwk=mysqli_fetch_array($q5);
$pointwk=$djtwk['poin'];
// echo $pointwk;
$ptwk+=$pointwk;
//menjumlahkan poin tkp
$q6=mysqli_query($conn, "SELECT * from jawaban join soal on jawaban.id_soal=soal.id_soal where (jawaban.id_paket='$idpaket' and jawaban.id_soal='$nomor_soal' and jawaban.pilihan='$jawabananda') and soal.jenis_soal='TKP'")or die("query salah");
$djtkp=mysqli_fetch_array($q6);
$pointkp=$djtkp['poin'];
// echo $pointkp;
$ptkp+=$pointkp;

 

?>

  <?php }

  $hasiltiu=$ptiu;
$hasiltwk=$ptwk;
$hasiltkp=$ptkp;

// echo  $hasiltiu."<br>";
// echo  $hasiltkp."<br>";
// echo  $hasiltwk."<br>";
 ?>




        </td>
       



























































       <td>
         
           <a href="?m=detail_hasil&id=<?php echo $idpaket ?>&jadwal=<?php echo $jadwal ?>" class="btn btn-info btn-xs">Lihat Detail</a>

        </td>
       
       
    </tr>
   <?php } ?>
</tbody>
</table>


