
<?php 
session_start();
include "../koneksi.php";
    $idp=$_POST['idp'];
    $nomor=$_POST['nomor'];

$no=1;
$q=mysqli_query($conn, "SELECT * from soal join paket on paket.id_paket=soal.id_paket where soal.id_paket='$idp' and  soal.nomor_soal='$nomor'")or die("query salah");
$dt=mysqli_fetch_array($q)?>






<h3><?php echo $dt['nama_paket'] ?></h3>
<hr>







<div class="col-md-12">
  <div class="box box-default box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Soal Nomor : <?php echo $dt['nomor_soal']; ?></h3>
      <h3 class="box-title" style="float: right;">Soal : <?php echo $dt['jenis_soal']; ?> </h3>

    </div>
    <!-- /.box-header -->
    <div class="box-body">









   <?php 
      $nomorsoal=$dt['nomor_soal'];
        $idsoal=$dt['id_soal'];
        if ($dt['gambar']=='') {
          echo $dt['soal'];?>
        <table class="table table-striped table-bordered">
          <tr style="background: grey">
            <th>Option</th>
            <th>Pilihan Jawaban</th>
            <th>Jawaban</th>
            <th>Skor</th>
          </tr>
    
          <?php   
          $q2=mysqli_query($conn, "SELECT * from jawaban  where id_paket='$idp'  and id_soal='$nomor'")or die("query salah");
              while ($data=mysqli_fetch_array($q2)) { ?>  
                 <tr>
                     <td><a href="form/soal/hapus_jawaban.php?id=<?php echo $data['idj'] ?>&idp=<?php echo $idp ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin akan menghapus jawaban dari soal nomor <?php echo $nomor ?> pilihan <?php echo $data['pilihan'] ?> dengan skor <?php echo $data['poin'] ?> ')">Hapus</a></td>
                     
                     <td><?php echo $data['pilihan'] ?></td>
                     <td><?php echo $data['jawaban'] ?></td>
                     <td><?php echo $data['poin'] ?></td>
                   </tr>
          <?php   } ?>
      </table>
          <?php 
        }
        else { ?>

          <div class="col-md-4">
            <img src="../admin/form/soal/file/<?php echo $dt['gambar']; ?>" style='width:100%'> 
          </div>
          <div class="col-md-8">
              <br>
          <?php echo $dt['soal'] ?>
         
             <table class="table table-striped  table-bordered">
        
              <?php   
              $q2=mysqli_query($conn, "SELECT * from jawaban  where id_paket='$idp'  and id_soal='$nomor'")or die("query salah");
                  while ($data=mysqli_fetch_array($q2)) { ?>  
                 <tr>
                     <td><a href="form/soal/hapus_jawaban.php?id=<?php echo $data['idj'] ?>&idp=<?php echo $idp ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin akan menghapus jawaban dari soal nomor <?php echo $nomor ?> pilihan <?php echo $data['pilihan'] ?>  dengan skor <?php echo $data['poin'] ?>')">Hapus</a></td>
                     
                     <td><?php echo $data['pilihan'] ?></td>
                     <td><?php echo $data['jawaban'] ?></td>
                     <td><?php echo $data['poin'] ?></td>
                   </tr>
              <?php   } ?>
              </table>
            </div>
       <?php } ?>
 
<hr>
      <h4>Warning</h4>
      <b>
       harap teliti dalam menghapusnya karena apabila jawaban sudah di hapus tidak bisa dikembalikan lagi <br>
       lakukan penghapusan hanya jika jawaban lebih dari 5 option dan periksa  kembali option dan skoryang akan dihapus sebelum anda akan menghapus jawaban
    </b>
    <br>
    <a href="?a=detail_paket&id=<?php echo $idp ?>" class="btn btn-info">Kembali</a>
    </div>
    <!-- /.box-body -->
  </div>

  <!-- /.box -->
</div>










