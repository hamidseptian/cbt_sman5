<?php
    //untuk memulai session

     $id_paket=$_GET['id'];
   
    //set session dulu dengan nama $_SESSION["mulai"]
    if (isset($_SESSION["mulai"])) { 
        //jika session sudah ada
        $telah_berlalu = time() - $_SESSION["mulai"];
    } else { 
        //jika session belum ada
        $_SESSION["mulai"]  = time();
        $telah_berlalu      = 0;
        $_SESSION["paket"]=$id_paket;
    } 
?>



<?php
include "../koneksi.php" ;
 $id=$_GET['id'];
//waktu
$perintah= "select * from waktu where id_waktu='1'";
$sql = mysqli_query($conn, $perintah) or die("query salah");
$dw=mysqli_fetch_array($sql);
$waktu=$dw['waktu'];

 
    $temp_waktu = ($waktu*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
    $temp_menit = (int)($temp_waktu/60);                //dijadikan menit lagi
    $temp_detik = $temp_waktu%60;                       //sisa bagi untuk detik
     
    if ($temp_menit < 60) { 
        /* Apabila $temp_menit yang kurang dari 60 meni */
        $jam    = 0; 
        $menit  = $temp_menit; 
        $detik  = $temp_detik; 
    } else { 
        /* Apabila $temp_menit lebih dari 60 menit */           
        $jam    = (int)($temp_menit/60);    //$temp_menit dijadikan jam dengan dibagi 60 dan dibulatkan menjadi integer 
        $menit  = $temp_menit%60;           //$temp_menit diambil sisa bagi ($temp_menit%60) untuk menjadi menit
        $detik  = $temp_detik;
    }   
?>




<head>
    <!-- Kita membutuhkan jquery, disini saya menggunakan langsung dari jquery.com, jquery ini bisa didownload dan ditaruh dilocal -->
    <script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
  
    <!-- Script Timer -->
    <script type="text/javascript">
        $(document).ready(function() {
            /** Membuat Waktu Mulai Hitung Mundur Dengan 
                * var detik;
                * var menit;
                * var jam;
            */
            var detik   = <?= $detik; ?>;
            var menit   = <?= $menit; ?>;
            var jam     = <?= $jam; ?>;
                  
            /**
               * Membuat function hitung() sebagai Penghitungan Waktu
            */
            function hitung() {
                /** setTimout(hitung, 1000) digunakan untuk 
                     * mengulang atau merefresh halaman selama 1000 (1 detik) 
                */
                setTimeout(hitung,1000);
  
                /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
                if(menit < 10 && jam == 0){
                    var peringatan = 'style="color:red"';
                };
  
                /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
                $('#timer').html(
                    '<h3 '+peringatan+'>Sisa waktu anda <br />' + jam + ' jam : ' + menit + ' menit : ' + detik + ' detik</h3>'
                );
  
                /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
                detik --;
  
                /** Jika var detik < 0
                    * var detik akan dikembalikan ke 59
                    * Menit akan Berkurang 1
                */
                if(detik < 0) {
                    detik = 59;
                    menit --;
  
                   /** Jika menit < 0
                        * Maka menit akan dikembali ke 59
                        * Jam akan Berkurang 1
                    */
                    if(menit < 0) {
                        menit = 59;
                        jam --;
  
                        /** Jika var jam < 0
                            * clearInterval() siswahentikan Interval dan submit secara otomatis
                        */
                             
                        if(jam < 0) { 
                            clearInterval(hitung); 
                            /** Variable yang digunakan untuk submit secara otomatis di Form */
                            var frmSoal = document.getElementById("frmSoal"); 
                            
                            alert('Waktu Anda telah habis');
                            //frmSoal.submit(); 
                            window.location.href = "form/soal/destroy_sesion_to.php?idp=<?php echo $id ?>";
                        } 
                    } 
                } 
            }

            // function hentikan(){
            //     setTimeout(hitung,0);
            //                clearInterval(hitung); 
            //                 /** Variable yang digunakan untuk submit secara otomatis di Form */
            //                 var frmSoal = document.getElementById("frmSoal"); 
            //                 alert('Waktu Anda telah habis, Jika ingin mencoba lagi silahkan dihapus dulu SESSION browser anda');
            //                 frmSoal.submit(); 
            // }           
            /** Menjalankan Function Hitung Waktu Mundur */
            hitung();
        });
    </script>
</head>
     

   



<?php 
include "../koneksi.php";
    $id=$_GET['id'];
  //  echo $id;
$idsiswa=$_SESSION['id_user'];


$perintah= "SELECT * from paket  where id_paket='$id'";
$sql = mysqli_query($conn, $perintah)or die(mysqli_error());
$jumlahsoal=mysqli_num_rows($sql);

$data=mysqli_fetch_array($sql); 
?>


 
<?php 
$nom=1;
$nq=mysqli_query($conn, "SELECT * from soal where id_paket='$id' order by nomor_soal asc")or die("query salah");







  while ($qdt=mysqli_fetch_array($nq)) {?>
<?php 
 $idsoal=$qdt['nomor_soal'];
 $idto=$qdt['id_soal'];
    $q3=mysqli_query($conn, "SELECT * from soal join ujian on ujian.id_soal=soal.nomor_soal where ujian.id_paket='$id' and ujian.id_siswa='$idsiswa' and soal.nomor_soal='$idsoal' and ujian.jadwal_ujian=''")or die("query salah");
    $d4=mysqli_fetch_array($q3);
    $idsoallterjawab=$d4['nomor_soal'];



 ?>
<!--   <?php //elseif($idsoal==$_GET['idsoal']): ?>
             class="btn btn-info" -->
     <a href="?m=paket&id=<?php echo $data['id_paket']?>&idsoal=<?php echo $qdt['nomor_soal'] ?>"
        <?php if ($idsoal==$idsoallterjawab): ?>
            class="btn btn-info" style="width :50px; height: 35px; margin-bottom: 2px;"
      
      
        <?php else: ?>
             class="btn btn-default"
             style="width :50px; height: 35px;margin-bottom: 2px;" 
        <?php endif ?>
      >
    <?php echo $qdt['nomor_soal'] ?>
 
        
    </a>

  <?php }
 ?>

    <form action="form/soal/time_over.php" id="frmSoal" method='POST'> 
            <input type="hidden" name="idp" value="<?php echo $data['id_paket'] ?>">
    </form>
<br>
<br><a href="" class=" btn btn-info"   data-toggle="modal" data-target="#selesai">Selesai Ujian</a>


<div class="modal fade" id="selesai">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Selesaikan Ujian  <?php echo $data['nama_paket']; ?></h4>
              </div>
              <div class="modal-body">
              Apakah anda yakin untuk selesai ujian? <br>    
              jika anda sudah selesai silahkan klik selesai ujian <br>  
              jika masih ingin melanjutkan ujian silahkan klik tombol close
              
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
                <a href="form/soal/destroy_sesion_to.php?idp=<?php echo $data['id_paket'] ?>" class=" btn btn-info">Selesai Ujian</a>
               
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

