<?php 
  $idp=$_GET['id'];
include "../koneksi.php" ;
$perintah= "SELECT *  from paket  where id_paket='$idp'";
$sql = mysqli_query($conn, $perintah) or die("query salah");
$no=1;
$data=mysqli_fetch_array($sql);
$namapaket=$data['nama_paket'];

  $ids=$_GET['idsoal'];
 ?>
 

<div class="col-md-12">
          <div class="box box-default box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Petunjuk Umum</h3>

              
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
           <ol>
             <li>Tuliskan nama dan kelas anda pada lembar jawaban yang disediakan</li>
             <li>Periksa dan bacalah soal-soal dengan teliti sebelum anda menjawab </li>
             <li>Dahulukan menjawab soal-soal yang anda anggap mudah</li>
             <li>Periksa ulang lembar jawaban anda sebelum diserahkan kepada pengawas</li>
           </ol>




            </div>
            <!-- /.box-body -->
          </div>
          <div class="box box-default box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Petunjuk Khusus</h3>

              
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
           <ol>
             <li>Pilihlah jawaban yang paling tepat dan hitamkan dilembar jawaban.</li>
           </ol>




            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
<?php 


 ?>


<center>
 <a href="?m=paket&id=<?php echo $idp;?>&idsoal=1" class="btn btn-info btn"  data-toggle="tooltip" onclick="return confirm('Mulai Ujian.?')">Mulai Ujian</a>
 <a href="?m=ujian" class="btn btn-success btn"  data-toggle="tooltip" >Kembali Ke List Soal</a>
</center>