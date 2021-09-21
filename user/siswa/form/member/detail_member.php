<?php 
include "../koneksi.php";
    $id=$_SESSION['id_user'];

//echo $id;
$perintah= "SELECT * from member  where id_member='$id'";
$sql = mysqli_query($conn, $perintah)or die(mysqli_error());
$jumlah=mysqli_num_rows($sql);

$data=mysqli_fetch_array($sql); 
?>
<table class="table table-striped">
  <tr>
    <td>Nama Lengkap</td>
    <td><?php echo $data['nama']; ?></td>
  </tr>
  <tr>
    <td>Penggilan</td>
    <td><?php echo $data['panggilan']; ?></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><?php echo $data['email']; ?></td>
  </tr>
  <tr>
    <td>No HP</td>
    <td><?php echo $data['hp']; ?></td>
  </tr>
  <tr>
    <td>WhatsApp</td>
    <td><?php echo $data['wa']; ?></td>
  </tr>
  <tr>
    <td>Tempat / Tgl Lahir</td>
    <td><?php echo $data['tmpl']; ?>  <?php echo $data['tgll']; ?></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td><?php echo $data['jk']; ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><?php echo $data['alamat']; ?></td>
  </tr>
  <tr>
    <td>Pendidikan</td>
    <td><?php echo $data['pendidikan']; ?></td>
  </tr>
  <tr>
    <td>Instansi</td>
    <td><?php echo $data['instansi']; ?></td>
  </tr>
  <tr>
    <td>IPK</td>
    <td><?php echo $data['ipk']; ?></td>
  </tr>
  <tr>
    <td>Pernah Mengikuti CPNS</td>
    <td><?php echo $data['pernah_cpns']; ?></td>
  </tr>
  <tr>
    <td>Nilai</td>
    <td><?php echo $data['nilai']; ?></td>
  </tr>
    <td>Program </td>
    <td><?php echo $data['program']; ?></td>
  </tr>
    <td>Pembayaran</td>
    <td><?php echo $data['pembayaran']; ?></td>

</table>
<br><a href="?m=perbaharui_biodata" class=" btn btn-info">Perbaharui Biodata</a>
