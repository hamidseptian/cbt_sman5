<a href="" class=" btn btn-info"  data-toggle="modal" data-target="#addfile">Upload Modul</a>
<form action="form/modul/save_file.php" method="post"  enctype="multipart/form-data">
<div class="modal fade" id="addfile">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Modul</h4>
              </div>
              <div class="modal-body">
              <div class="form-group">
                  <label>Nama Modul</label>
                  <input type="text" name="ket" class="form-control">
              </div>
              <div class="form-group">
                  <label>File Modul</label> <br>
                  <input type="file" name="file">
              </div>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Upload Modul</button>
               
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</form>

<div class="clearfix"></div>
<hr>


<?php


include "../../koneksi.php.php";
  
  $perintah="select * From modul";
  $jalan=mysqli_query($conn, $perintah);

  $total = mysqli_num_rows($jalan);
  $no=1;
?>
<table class="table table-striped table-bordered" id="example1">
	<thead>
	<tr>
		<td>No</td>
		<td>Nama Modul</td>
		
		<td>Option</td>
	</tr>
</thead>
	

<?php

while ($data=mysqli_fetch_array($jalan))
{ 
$id=$data['id_modul'];
$ket=$data['nama_modul'];
$file=$data['namafile'];
;

?>
	<tr>
		<td><?php echo $no++; ?></td>
	

		
	<td><?php echo $ket; ?></td>
	
	<td>
		
		 <form method="post" action="form/modul/delete_file.php" ">
    <input type="hidden" name="id" value="<?php echo $id?>"> 
    <input type="hidden" name="file" value="<?php echo $file?>"> 
    <!-- <a href="form/modul/file/<?php echo $file;?>" class="btn btn-info btn-xs">Download</a>  -->
    <a href="?a=baca_modul&id=<?php echo $id ?>" class="btn btn-info btn-xs">Baca Modul</a> 
   <input type="submit" value="Hapus" class="btn btn-danger btn-xs"  onclick="return confirm('Hapus File <?php echo $ket; ?> ..??')">
     </form>
		</td>
		</tr>

		<?php } ?>
				
	</table>
