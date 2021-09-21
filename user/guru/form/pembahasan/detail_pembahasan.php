
<?php 
session_start();
include "../koneksi.php";
    $id=$_GET['id'];

// echo $id;

$perintah= "SELECT * from paket  where id_paket='$id'";
$sql = mysqli_query($conn, $perintah)or die(mysqli_error());
$jumlahsoal=mysqli_num_rows($sql);

$data=mysqli_fetch_array($sql); 
?>
<h2><?php echo $data['nama_paket']; ?></h2>
<?php
// echo $_SESSION['pesan'];

// unset($_SESSION['pesan']);
    ?>
<!-- 
 -->
 <hr>
<!-- modal pilihan jenis soal -->

<!-- modal pilihan jenis soal -->


<?php 
$no=1;
$q=mysqli_query($conn, "SELECT * from soal where id_paket='$id' order by nomor_soal ASC")or die("query salah");
  while ($dt=mysqli_fetch_array($q)) {
    $pembahasan=$dt['pembahasan'];?>
<div class="col-md-12">
  <div class="box box-default box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Soal Nomor : <?php echo $dt['nomor_soal']; ?></h3>
      

    </div>
    <!-- /.box-header -->
    <div class="box-body">









   <?php 
      $nomorsoal=$dt['nomor_soal'];
        $idsoal=$dt['id_soal'];
        if ($dt['gambar']=='') {
          echo $dt['soal'];?>
        <ol type="A">
    
          <?php   
          $q2=mysqli_query($conn, "SELECT * from jawaban  where id_paket='$id'  and id_soal='$nomorsoal'")or die("query salah");
              while ($data=mysqli_fetch_array($q2)) { ?>  
               <li> <?php echo $data['jawaban']; ?></li>
          <?php   } ?>
      </ol>
          <?php 
        }
        else { ?>

          <div class="col-md-4">
            <img src="../admin/form/soal/file/<?php echo $dt['gambar']; ?>" style='width:100%'> 
          </div>
          <div class="col-md-8">
              <br>
          <?php echo $dt['soal'] ?>
         
             <ol type="A">
        
              <?php   
              $q2=mysqli_query($conn, "SELECT * from jawaban  where id_paket='$id'  and id_soal='$nomorsoal'")or die("query salah");
                  while ($data=mysqli_fetch_array($q2)) { ?>  
                   <li> <?php echo $data['jawaban']; ?></li>
              <?php   } ?>
              </ol>
            </div>
       <?php } ?>
 

     <!-- ?jawaban yang benar --> 
    Jawaban yang benar : 
    <?php 
  if ($dt['kunci_jawaban']!='') {
   echo $dt['kunci_jawaban'];
  }
  else{ ?>
   <?php   
          $q2=mysqli_query($conn, "SELECT * from jawaban  where id_paket='$id'  and id_soal='$nomorsoal'")or die("query salah");
              while ($data=mysqli_fetch_array($q2)) { ?>  
               Skor  <?php echo $data['pilihan']; ?> : <?php echo $data['poin']; ?> <br>
          <?php   } ?>
 <?php }
?> 
<br>
<b>Pembahasan : </b>

<br>

<?php 


if ($pembahasan=='') {
  echo "Belum ada pembahasan ";?>
  <br>
    <a href="?a=tambah_pembahasan&idp=<?php echo $id; ?>&ids=<?php echo $nomorsoal ?>" class="btn btn-info btn-xs">Tambahkan Pembahasan</a>
  <?php
}
else{
 echo  $pembahasan;?>
 <a href="?a=perbaharui_pembahasan&idp=<?php echo $id; ?>&ids=<?php echo $nomorsoal ?>" class="btn btn-primary btn-xs">Perbaharui Pembahasan</a>
 <?php
}


 ?>








    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
  


   

 <?php }

 ?>

<br><a href="?a=soal" class=" btn btn-info">Kembali</a>
