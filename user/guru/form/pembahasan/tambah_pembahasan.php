 <head>
     <script type="text/javascript" src="form/ckeditor/ckeditor.js"></script>
</head>
<?php 
   $id=$_GET['idp'];

   $idsoal=$_GET['ids'];
   //echo $idsoal;
include "../koneksi.php" ;
//tabel paket
$q7=mysqli_query($conn, "SELECT * from paket where id_paket='$id'")or die("query salah");
$dt7=mysqli_fetch_array($q7);
$paket=$dt7['nama_paket'];
//tabel soal
$q=mysqli_query($conn, "SELECT * from soal where id_paket='$id' and nomor_soal='$idsoal'")or die("query salah");
$dt=mysqli_fetch_array($q);
$nomor=$dt['nomor_soal'];
$jenis=$dt['jenis_soal'];
$soal=$dt['soal'];
$gambar=$dt['gambar'];
$kunci=$dt['kunci_jawaban'];
  


 ?>
 <form action="form/Pembahasan/simpan_pembahasan.php" method="post" enctype="multipart/form-data">
                                           
     

            <div class="box-header with-border">
              <h3 class="box-title">Pembahasan soal paket <?php echo $paket ?> nomor <?php echo $nomor ?></h3>

              <div class="box-tools pull-right">
            
              <h3 class="box-title">Jenis soal : <?php echo $jenis; ?></h3>


            </div>
            <hr>
            <!-- /.box-header -->
           
                <div class="col-md-12">
                  <p>
                    <?php 
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

       
                 
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                
                <!-- /.col -->
     
   <ol type="A">
    
          <?php   
          $q2=mysqli_query($conn, "SELECT * from jawaban  where id_paket='$id'  and id_soal='$nomor'")or die("query salah");
              while ($data=mysqli_fetch_array($q2)) { ?>  
               <li> <?php echo $data['jawaban']; ?></li>
          <?php   } ?>
</ol>
     
Jawaban Benar : <?php echo $kunci ?>
<br>
Pembahasan 
<input type="hidden" name="idp" value="<?php echo $id ?>" >
<input type="hidden" name="ids" value="<?php echo $nomor ?>">
<textarea rows="10" class="ckeditor" id="ckedtor" name="pembahasan"></textarea>



<br>






    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
        
        <span id="payment-button-amount">Simpan Pembahasan</span>
      </button>
                                           
                                        </form>