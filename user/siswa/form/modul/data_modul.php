

<?php


include "../../koneksi.php.php";
  
  $perintah="select * From modul";
  $jalan=mysqli_query($conn, $perintah);

  $total = mysqli_num_rows($jalan);
  $no=1;
?>


<?php

while ($data=mysqli_fetch_array($jalan))
{ 
$id=$data['id_modul'];
$ket=$data['nama_modul'];
$file=$data['namafile'];


?>
	


				
	
	 			 <div class="col-md-4">
          <div class="box box-default box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $ket ?></h3>

             
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <a href="?m=baca_modul&id=<?php echo $id ?>" class="btn btn-info ">Baca Modul</a> 
               <!-- <a href="../admin/form/modul/file/<?php// echo $file;?>" class="btn btn-info ">Download</a>  -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

    <?php } ?>
    <div class="clearfix"></div>
<hr>

<?php


include "../../koneksi.php.php";
  
  $perintah="select * From modul_gd";
  $jalan=mysqli_query($conn, $perintah);

  $total = mysqli_num_rows($jalan);
  $no=1;
?>


<?php

while ($data=mysqli_fetch_array($jalan))
{ 
$id=$data['id_modul'];
$ket=$data['nama_file'];
$link=$data['link_download'];


?>
  


        
  
         <div class="col-md-4">
          <div class="box box-default box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $ket ?></h3>

             
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               
               <a href="<?php echo $link;?>" class="btn btn-info ">Baca Modul</a> 
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

    <?php } ?>