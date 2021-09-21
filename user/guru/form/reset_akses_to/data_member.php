<table class="table table-striped table-bordered" id="example1">
    <thead>
    <tr>
        <td  style="width:5%">No</td>
        <td>Nama</td>
        
        <td>Email</td>
    <!--     <td>Gambar</td> -->
    
        <td>WhatsApp</td>
        <td style="width:10%">Option</td>
    </tr>
</thead>
<tbody>
<?php 

include "../koneksi.php" ;
$perintah= "SELECT * from member where status_pembayaran='lunas'";
$sql = mysqli_query($conn, $perintah) or die("query salah");
$no=1;
while ($data=mysqli_fetch_array($sql)) {
    ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nama']; ?></td>
       
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['tgll']; ?></td>
        <!-- <td><img src="form/penyakit/gambar/<?php// echo $data['gambar']; ?>"></td> -->
        <td >
      
            <a href="form/reset_akses_to/reset_akses.php?id=<?php echo $data['id_member']?>" class="btn btn-warning btn-xs " onclick="return confirm('Apakah anda akan menghapus  semua data ujian <?php echo $data['nama']; ?>.??')">Reset Akses</a>
        </td>
       
       
    </tr>
   <?php } ?>
</tbody>
</table>


