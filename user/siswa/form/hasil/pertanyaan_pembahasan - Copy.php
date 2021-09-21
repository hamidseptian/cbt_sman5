<?php session_start();
$idmember=$_SESSION['id_user'];
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
              
   <?php echo $dt['soal']; ?> <br> <br>
    <ul>
    
          <?php   
          $q2=mysqli_query($conn, "SELECT * from jawaban where id_paket='$idpaket' and id_soal='$nmr'  ")or die("query salah");

          $q3=mysqli_query($conn, "SELECT * from try_out where id_paket='$idpaket' and id_soal='$nmr' and id_member='$idmember'")or die("query salah");
          $dat=mysqli_fetch_array($q3);
          $jawabanterpilih=$dat['jawaban'];
          
          ?>
          <form action="form/soal/simpan_jawaban.php" method="post">
            <input type="hidden" name="idp" value="<?php echo $idpaket; ?>">
            <input type="hidden" name="ids" value="<?php echo $idsoal; ?>">
          <?php
              while ($data=mysqli_fetch_array($q2)) { ?>  
               <li style="list-style-type: none"> <?php echo $data['pilihan']; ?>. <?php echo $data['jawaban']; ?></li>


           
          <?php   } ?>
          <br>
   

          </form>
</ul>


<?php 
  $q4=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket' and nomor_soal='$idsoal'")or die("query salah");
  $d1=mysqli_fetch_array($q4);
  $nomor_soal=$d1['nomor_soal'];
   

//mengambil data di tabel jawaban



// // ambil data dari table try out
  $q6=mysqli_query($conn, "SELECT * from try_out where id_paket='$idpaket' and id_soal='$nmr' and id_member='$idmember'")or die("query salah");
  $d3=mysqli_fetch_array($q6);
  $jawabanterpilih=$d3['jawaban'];
  if ($jawabanterpilih=='') {
  echo 'Tidak Terjawab <br> Kunci Jawaban : '.$dt['kunci_jawaban'];
     }
     else{
  echo 'Jawaban Anda : '.$jawabanterpilih.'<br> Kunci Jawaban : '.$dt['kunci_jawaban'];

     }

 ?>
          
<?php 

  $p2= "SELECT  *  from pembahasan where id_paket='$id' and id_soal='$nmr' ";
$q4 = mysqli_query($conn, $p2) or die("query salah");
$d2=mysqli_fetch_array($q4);
$pembahasan=$d2['pembahasan'];
echo "<hr><b>Pembahasan</b><br>";

if ($pembahasan=='') {
  echo "Belum ada pembahasan ";?>
  <br>
   
  <?php
}
else{
 echo  $pembahasan;
}


 ?>


            </div>
            <!-- /.box-body -->
          </div>



