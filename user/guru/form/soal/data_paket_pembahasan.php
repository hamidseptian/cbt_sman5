
<table class="table table-striped table-bordered" id="example1">
    <thead>
    <tr>
        <td  style="width:5%">No</td>
        <td>Nama Paket</td>
        <td>Jumlah Soal</td>
       
 
        <td style="width:10%">Option</td>
    </tr>
</thead>
<tbody>
<?php 

include "../koneksi.php" ;
$perintah= "select * from paket";
$sql = mysqli_query($conn, $perintah) or die("query salah");
$no=1;
while ($data=mysqli_fetch_array($sql)) {
	$idpaket=$data['id_paket'];
	
$q4=mysqli_query($conn, "SELECT * from soal where id_paket='$idpaket'")or die("query salah");
$jmlsoal=mysqli_num_rows($q4);

    ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nama_paket']; ?> </td>
        <td><?php echo  $jmlsoal; ?> Soal</td>
       
       <td>
         
            <a href="?a=detail_paket_pembahasan&id=<?php echo $data['id_paket']?>" class="btn btn-info btn-sm fa fa-folder-open" title="Buka soal dan pembahasan <?php echo $data['nama_paket'] ?>" data-toggle="tooltip"></a>

             
        </td>
       
       
    </tr>
   <?php } ?>
</tbody>
</table>


