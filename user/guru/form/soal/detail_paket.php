
<?php 
session_start();
include "../koneksi.php";
    $id=$_GET['id'];

// echo $id;
$q=mysqli_query($conn, "SELECT max(nomor_soal) as max from soal  where id_paket='$id'")or die("query salah");
$dt=mysqli_fetch_array($q);
$nilaimax=$dt['max'];  


$perintah= "SELECT * from paket  where id_paket='$id'";
$sql = mysqli_query($conn, $perintah)or die(mysqli_error());
$jumlahsoal=mysqli_num_rows($sql);

$data=mysqli_fetch_array($sql); 
?>
<h2><?php echo $data['nama_paket']; ?></h2>
<a href="?a=add_soal&idp=<?php echo $id ?>" class=" btn btn-info">Tambah Soal</a>
<!-- <a href="#" class=" btn btn-info"  data-toggle="modal" data-target="#soal_error">Soal Error</a> -->
      <form action="?a=soal-error" method="post">
        <div class="modal fade" id="soal_error">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Soal Error</h4>
              </div>
              <div class="modal-body">
                Masukan nomor soal yang error
                <input type="hidden" name="idp" class="form-control" value="<?php echo $data['id_paket']; ?>">
                <input type="number" name="nomor" class="form-control" required>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Periksa Soal</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </form>
<?php
// echo $_SESSION['pesan'];

// unset($_SESSION['pesan']);
    ?>
<!-- 
 -->
 <hr>



<?php 
$no=1;
$q=mysqli_query($conn, "SELECT * from soal where id_paket='$id' order by nomor_soal ASC")or die("query salah");
  while ($dt=mysqli_fetch_array($q)) {?>















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
            <img src="../guru/form/soal/file/<?php echo $dt['gambar']; ?>" style='width:100%'> 
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
    Kunci Jawaban : 
    <?php 
  if ($dt['kunci_jawaban']=='Pilih Kunci Jawaban') {
   echo "Belum di tetapkan";
  }
  elseif ($dt['kunci_jawaban']!='') {
   echo $dt['kunci_jawaban'];
  }
  else{ ?>
    <br>
   <?php   
          $q2=mysqli_query($conn, "SELECT * from jawaban  where id_paket='$id'  and id_soal='$nomorsoal'")or die("query salah");
              while ($data=mysqli_fetch_array($q2)) { ?>  
               Skor  <?php echo $data['pilihan']; ?> : <?php echo $data['poin']; ?> <br>
          <?php   } ?>
 <?php }



?> 
<br>

<br>


<?php 

?>
 <a href="?a=ubahsoal&ids=<?php echo $dt['nomor_soal']?>&idp=<?php echo $id ?>" class="btn btn-info btn-sm ">Ubah Soal</a>
 <a href="?a=ubahkunci&ids=<?php echo $dt['nomor_soal']?>&idp=<?php echo $id ?>" class="btn btn-info btn-sm ">Ubah Kunci Jawaban</a>
  <?php


if ($dt['nomor_soal']==$nilaimax) { ?>
<a href="form/soal/delete_soal.php?idp=<?php echo $id ?>&nms=<?php echo $nilaimax; ?>" class="btn btn-danger btn-sm" style="float:right;" onclick="return confirm('Hapus Soal ??')">Hapus Soal</a>
<?php } ?>


<!--  <a href="form/soal/delete_soal.php?ids=<?php// echo $dt['nomor_soal']?>&idp=<?php// echo $id ?>" class="btn btn-danger btn-sm " title="Hapus Soal ini" data-toggle="tooltip" onclick="return confirm('Apakah anda akan menghapus soal ini??')" style="float: right;">Hapus Soal</a> -->





    </div>
    <!-- /.box-body -->

  </div>

  <!-- /.box -->
</div>
















  
  
 <?php }

 ?>

<br><a href="?a=soal" class=" btn btn-info">Kembali</a>
