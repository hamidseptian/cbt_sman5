<?php 

include "../koneksi.php" ;
 $idguru= $_SESSION['id_user'];
 $idkelas = $_GET['id'];
 $qkelas = mysqli_query($conn, "SELECT * from kelas where id_kelas='$idkelas'")or die(mysqli_error());
 $dkelas = mysqli_fetch_array($qkelas);

  ?>
<div class="box-header">
    <h3 class="box-title">
        Data Siswa Kelas <?php echo $dkelas['nama_kelas'] ?>
    </h3>
</div>

<table class="table table-striped table-bordered" id="example1">
    <thead>
    <tr>
        <td  style="width:5%">No</td>
        <td>Nama Siswa</td>
        
        
        <td style="width:10%">Option</td>
    </tr>
</thead>
<tbody>
<?php 

$perintah= "SELECT  * from siswa where id_kelas='$idkelas'";
$sql = mysqli_query($conn, $perintah) or die("query salah");
$no=1;
while ($data=mysqli_fetch_array($sql)) {
    ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nama_siswa']; ?></td>
        
        <td >
         
            <a href="?a=lihat_kelas&id=<?php echo $data['id_kelas'] ?>" class="btn btn-info btn-xs">Lihat Data Siswa</a>
        </td>
       
       
    </tr>
   <?php } ?>
</tbody>
</table>


