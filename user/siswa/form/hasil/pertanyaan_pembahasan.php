<?php session_start();
$idsiswa=$_SESSION['id_user'];
?>



<?php 
$no=1;
$idpaket=$_GET['idp'];
$idsoal=$_GET['idsoal'];


$q3=mysqli_query($conn, "SELECT max(nomor_soal) as nomormax from soal where id_paket='$id'")or die("query salah");
$dd=mysqli_fetch_array($q3);
$nomorakhir=$dd['nomormax'];



$q=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket' and nomor_soal='$idsoal'")or die("query salah");
$dt=mysqli_fetch_array($q);?>
  


      <?php $next=$dt['nomor_soal'] +1;
     ?>
    </td>
    <td>
      <?php 
        $idsoal=$dt['id_soal'];
          $nmr=$dt['nomor_soal'];

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
              
 <?php if ($dt['gambar']=='') {
                                echo $dt['soal'];?>
                              <ol type="A">
                          
                                <?php   
                                $q2=mysqli_query($conn, "SELECT * from jawaban  where id_paket='$idpaket'  and id_soal='$nmr'")or die("query salah");
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
                                    $q2=mysqli_query($conn, "SELECT * from jawaban  where id_paket='$idpaket'  and id_soal='$nmr'")or die("query salah");
                                        while ($data=mysqli_fetch_array($q2)) { ?>  
                                         <li> <?php echo $data['jawaban']; ?></li>
                                    <?php   } ?>
                                    </ol>
                                  </div>
                                  <div class="clearfix"></div>
                                 
                             <?php } ?>
<hr>

<?php 
  $q4=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket' and nomor_soal='$idsoal'")or die("query salah");
  $d1=mysqli_fetch_array($q4);
  $nomor_soal=$d1['nomor_soal'];
   

//mengambil data di tabel jawaban



// // ambil data dari table try out
  $q6=mysqli_query($conn, "SELECT * from ujian where id_paket='$idpaket' and id_soal='$nmr' and id_siswa='$idsiswa'")or die("query salah");
  $d3=mysqli_fetch_array($q6);
  $jawabanterpilih=$d3['jawaban'];
  if ($jawabanterpilih=='') {
    echo 'Tidak Terjawab <br>';
     }
  else{
  echo 'Jawaban Anda : '.$jawabanterpilih.'<br> ';
   

  }
  
    echo 'Kunci Jawaban : '.$dt['kunci_jawaban'];
       if ($jawabanterpilih==$dt['kunci_jawaban']) {
          echo "<br>Jawaban Anda Benar";

      }
      else  if ($jawabanterpilih=='') {
        echo '<br>';
         }
      else
      {
        echo "<br>Jawaban Anda Salah";
      }
  


 ?>
          
<?php 


echo "<hr><b>Pembahasan</b><br>";
$pembahasan=$dt['pembahasan'];
if ($pembahasan=='') {
  echo "Belum ada pembahasan ";?>
  <br>
   
  <?php
}
else{
 echo  $pembahasan;
}


$next=$dt['nomor_soal']+1;
$prev=$dt['nomor_soal']-1;
if ($dt['nomor_soal']==1) { ?>
  <a href="?m=pembahasan&idp=<?php echo $idpaket ?>&idsoal=<?php echo $next ?>" class="btn btn-info btn-xs">Pembahasan Selanjutnya</a>
<?php }
elseif($dt['nomor_soal']==$nomorakhir){ ?>
  <a href="?m=pembahasan&idp=<?php echo $idpaket ?>&idsoal=<?php echo $prev ?>" class="btn btn-info btn-xs">Pembahasan Sebelumnya</a>

<?php }
else{ ?>
  <a href="?m=pembahasan&idp=<?php echo $idpaket ?>&idsoal=<?php echo $prev ?>" class="btn btn-info btn-xs">Pembahasan Sebelumnya</a>
  <a href="?m=pembahasan&idp=<?php echo $idpaket ?>&idsoal=<?php echo $next ?>" class="btn btn-info btn-xs">Pembahasan Selanjutnya</a>
<?php } ?>


            </div>
            <!-- /.box-body -->
          </div>




