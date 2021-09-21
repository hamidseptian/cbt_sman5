<?php
 session_start(); 


?>

<!-- <h3>Lunas</h3> -->
<table class="table table-striped table-bordered" id="tabel2">
    <thead>
    <tr>
        <td  style="width:5%">No</td>
        <td>Nama</td>
        <td>Email</td>
    <!--     <td>Gambar</td> -->
    
        <td>WhatsApp</td>
        <td>Pembayaran Via</td>
        <td style="width:10%">Option</td>
    </tr>
</thead>
<tbody>
<?php 

include "../koneksi.php" ;
$p4= "SELECT * from member where status_pembayaran='lunas'";
$q4 = mysqli_query($conn, $p4) or die("query salah");
$no=1;
while ($data=mysqli_fetch_array($q4)) {
    ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['wa']; ?></td>
        <td><?php echo $data['pembayaran']; ?></td>
        <!-- <td><img src="form/penyakit/gambar/<?php// echo $data['gambar']; ?>"></td> -->
        <td >
         
                <a href="?a=cek_pembayaran&id=<?php echo $data['id_member']?>" class="btn btn-info btn-sm fa fa-folder-open" title="Cek Data Pembayaran" data-toggle="tooltip" ></a>
        </td>
       
       
    </tr>
   <?php } ?>
</tbody>
</table>



