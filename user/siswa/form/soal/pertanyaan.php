<?php 
$idsiswa=$_SESSION['id_user'];
?>



<?php 
$no=1;
$idpaket=$_GET['id'];
$idsoal=$_GET['idsoal'];


$q3=mysqli_query($conn, "SELECT max(nomor_soal) as nomormax from soal where id_paket='$id'")or die("query salah");
$dd=mysqli_fetch_array($q3);
$nomorakhir=$dd['nomormax'];



$q=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket' and nomor_soal='$idsoal'")or die("query salah");
$dt=mysqli_fetch_array($q);?>
  


      <?php $next=$dt['nomor_soal'] +1;
      $prev=$dt['nomor_soal'] -1;
     ?>
    </td>
    <td>
      <?php 
        $idsoal=$dt['id_soal'];
        $nomorsoal=$dt['nomor_soal'];

       ?>
   

      
  

 <?php 

 ?>


 

          <div class="box box-default box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Soal Nomor <?php echo $dt['nomor_soal']; ?></h3>
              

              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
   <?php 

        if ($dt['gambar']=='') {
          echo $dt['soal'];?>
           
    <ul>
    
          <?php   
          $q2=mysqli_query($conn, "SELECT * from jawaban where id_paket='$idpaket' and id_soal='$nomorsoal' and  pilihan!='Z'  ")or die("query salah");

          $q3=mysqli_query($conn, "SELECT * from ujian where id_paket='$idpaket' and id_soal='$nomorsoal' and id_siswa='$idsiswa' and jadwal_ujian=''")or die("query salah");
          $dat=mysqli_fetch_array($q3);
          $jawabanterpilih=$dat['jawaban'];
          
          ?>
          <form action="form/soal/simpan_jawaban.php" method="post">
            <input type="hidden" name="idp" value="<?php echo $idpaket; ?>">
            <input type="hidden" name="ids" value="<?php echo $nomorsoal; ?>">
          <?php
              while ($data=mysqli_fetch_array($q2)) { ?>  
               <li style="list-style-type: none"><input type="radio" name="jawaban" value="<?php echo $data['pilihan']; ?>" required <?php if($data['pilihan']==$jawabanterpilih) echo 'checked' ?>> <?php echo $data['pilihan']; ?>. <?php echo $data['jawaban']; ?></li>


           
          <?php   } ?>
          <br>
          <?php if ($jawabanterpilih !=''): ?>
          
          
              <?php if ($nomorakhir!==$dt['nomor_soal']): ?>
              <?php if ($nomorsoal==1): ?>
              <?php else: ?>  
                <a href="?m=paket&id=<?php echo $idpaket?>&idsoal=<?php echo $prev ?>" class="btn btn-info btn-sm">Soal Sebelumnya</a>
              <?php endif ?>


                  
                  <input type="submit"   class="btn btn-success btn-sm" value="Ubah Jawaban Anda ">
                  <a href="form/soal/hapus_jawaban.php?id=<?php echo $idpaket?>&idsoal=<?php echo $dt['nomor_soal'] ?>" class="btn btn-danger btn-sm">Kosongkan Jawaban</a>
                  <a href="?m=paket&id=<?php echo $idpaket?>&idsoal=<?php echo $next ?>" class="btn btn-info btn-sm">Soal Selanjutnya</a>
              <?php else: ?>
                  <a href="?m=paket&id=<?php echo $idpaket?>&idsoal=<?php echo $prev ?>" class="btn btn-info btn-sm">Soal Sebelumnya</a>
                  <input type="submit"   class="btn btn-success btn-sm" value="Ubah Jawaban Anda ">
                  <a href="form/soal/hapus_jawaban.php?id=<?php echo $idpaket?>&idsoal=<?php echo $dt['nomor_soal'] ?>" class="btn btn-danger btn-sm">Kosongkan Jawaban</a>
                <a href="" class=" btn btn-primary btn-sm"   data-toggle="modal" data-target="#selesai">Selesai Ujian</a> 
              <?php endif ?>
          <?php else: ?>

          
            <?php if ($nomorakhir!==$dt['nomor_soal']): ?>
              <?php if ($nomorsoal==1): ?>
              <?php else: ?>  
                <a href="?m=paket&id=<?php echo $idpaket?>&idsoal=<?php echo $prev ?>" class="btn btn-info btn-sm">Soal Sebelumnya</a>
              <?php endif ?>
                  
                  <input type="submit"  class="btn btn-success btn-sm" value="Simpan Jawaban">
                  <a href="?m=paket&id=<?php echo $idpaket?>&idsoal=<?php echo $next ?>" class="btn btn-info btn-sm">Soal Selanjutnya</a>
            <?php else: ?>
                  <a href="?m=paket&id=<?php echo $idpaket?>&idsoal=<?php echo $prev ?>" class="btn btn-info btn-sm">Soal Sebelumnya</a>
               <input type="submit"  class="btn btn-success btn-sm" value="Simpan Jawaban">
                <a href="" class="btn btn-primary btn-sm"   data-toggle="modal" data-target="#selesai">Selesai Ujian</a>
              <?php endif ?>
          
          <?php endif ?>

          </form>
</ul><?php
        }
        else { ?>
          <div class="col-md-4">
            <img src="../guru/form/soal/file/<?php echo $dt['gambar']; ?>" style='width:100%'> 
          </div>
          <div class="col-md-8">
             
          <?php echo $dt['soal'] ?>
          
    <ul>
    
          <?php   
          $q2=mysqli_query($conn, "SELECT * from jawaban where id_paket='$idpaket' and id_soal='$nomorsoal' and  pilihan!='Z'  ")or die("query salah");

          $q3=mysqli_query($conn, "SELECT * from ujian where id_paket='$idpaket' and id_soal='$nomorsoal' and id_siswa='$idsiswa'")or die("query salah");
          $dat=mysqli_fetch_array($q3);
          $jawabanterpilih=$dat['jawaban'];
          
          ?>
          <form action="form/soal/simpan_jawaban.php" method="post">
            <input type="hidden" name="idp" value="<?php echo $idpaket; ?>">
            <input type="hidden" name="ids" value="<?php echo $nomorsoal; ?>">
          <?php
              while ($data=mysqli_fetch_array($q2)) { ?>  
               <li style="list-style-type: none"><input type="radio" name="jawaban" value="<?php echo $data['pilihan']; ?>" required <?php if($data['pilihan']==$jawabanterpilih) echo 'checked' ?>> <?php echo $data['pilihan']; ?>. <?php echo $data['jawaban']; ?></li>


           
          <?php   } ?>
          <br>
          <?php if ($jawabanterpilih !=''): ?>
          
          
              <?php if ($nomorakhir!==$dt['nomor_soal']): ?>
              <?php if ($nomorsoal==1): ?>
              <?php else: ?>  
                <a href="?m=paket&id=<?php echo $idpaket?>&idsoal=<?php echo $prev ?>" class="btn btn-info btn-sm">Soal Sebelumnya</a>
              <?php endif ?>


                  
                  <input type="submit"   class="btn btn-success btn-sm" value="Ubah Jawaban Anda ">
                  <a href="form/soal/hapus_jawaban.php?id=<?php echo $idpaket?>&idsoal=<?php echo $dt['nomor_soal'] ?>" class="btn btn-danger btn-sm">Kosongkan Jawaban</a>
                  <a href="?m=paket&id=<?php echo $idpaket?>&idsoal=<?php echo $next ?>" class="btn btn-info btn-sm">Soal Selanjutnya</a>
              <?php else: ?>
                  <a href="?m=paket&id=<?php echo $idpaket?>&idsoal=<?php echo $prev ?>" class="btn btn-info btn-sm">Soal Sebelumnya</a>
                  <input type="submit"   class="btn btn-success btn-sm" value="Ubah Jawaban Anda ">
                  <a href="form/soal/hapus_jawaban.php?id=<?php echo $idpaket?>&idsoal=<?php echo $dt['nomor_soal'] ?>" class="btn btn-danger btn-sm">Kosongkan Jawaban</a>
                <a href="" class=" btn btn-primary btn-sm"   data-toggle="modal" data-target="#selesai">Selesai Ujian</a> 
              <?php endif ?>
          <?php else: ?>

          
            <?php if ($nomorakhir!==$dt['nomor_soal']): ?>
              <?php if ($nomorsoal==1): ?>
              <?php else: ?>  
                <a href="?m=paket&id=<?php echo $idpaket?>&idsoal=<?php echo $prev ?>" class="btn btn-info btn-sm">Soal Sebelumnya</a>
              <?php endif ?>
                  
                  <input type="submit"  class="btn btn-success btn-sm" value="Simpan Jawaban">
                  <a href="?m=paket&id=<?php echo $idpaket?>&idsoal=<?php echo $next ?>" class="btn btn-info btn-sm">Soal Selanjutnya</a>
            <?php else: ?>
                  <a href="?m=paket&id=<?php echo $idpaket?>&idsoal=<?php echo $prev ?>" class="btn btn-info btn-sm">Soal Sebelumnya</a>
               <input type="submit"  class="btn btn-success btn-sm" value="Simpan Jawaban">
                <a href="" class="btn btn-primary btn-sm"   data-toggle="modal" data-target="#selesai">Selesai Ujian</a>
              <?php endif ?>
          
          <?php endif ?>


          </form>
</ul>
          </div>
         
       <?php } ?>
       
            </div>
            <!-- /.box-body -->
          </div>




    <form action="form/soal/destroy_sesion_to.php" id="frmSoal" method='POST' > 
            
    </form>