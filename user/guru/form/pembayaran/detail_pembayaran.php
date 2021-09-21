<?php 
$id=$_GET['id'];
//echo $noorder;
include "../koneksi.php" ;
$perintahorder= "SELECT * from member where id_member=$id";
$queryorder=mysqli_query($conn, $perintahorder) or die(mysqli_error());
$data=mysqli_fetch_array($queryorder);

//dari tabel pelanggan
$namaplg=$data['nama'];
$idplg=$data['id_plg'];
$alamat=$data['alamat'];
$foto=$data['foto_struk'];
$no_hp=$data['hp'];

//dari tabel penjualan


 ?>
<div class="col-md-8">
<table class="table">
    <tr>
        <td>Pembayaran Atas Nama</td>
        <td><?php echo $namaplg; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
        <td>No HP</td>
        <td><?php echo $no_hp; ?></td>
    </tr>
    <tr>
        <td>Whats App</td>
        <td><?php echo  $data['wa']; ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $data['email']; ?></td>
    </tr>
    <tr>
        <td>tempat / Tanggal Lahir</td>
        <td><?php echo $data['tmpl']; ?> / 
            <?php $pisah=explode("-", $data['tgll']); 
            echo $pisah[2].'-'.$pisah[1].'-'.$pisah[0]?>
        </td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo $data['jk']; ?></td>
    </tr>
    <tr>
        <td>Pernah mengikuti CPNS</td>
        <td><?php echo $data['pernah_cpns']; ?></td>
    </tr>
    <tr>
        <td>Program CPNS</td>
        <td><?php echo $data['program']; ?></td>
    </tr>
    
    <tr>
        <td>Status Pembayaran</td>
        <td><?php echo $data['status_pembayaran']; ?></td>
    </tr>
    <tr>
        <td>Pembayaran Via</td>
        <td><?php echo $data['pembayaran'];  ?></td>
    </tr>




    <tr>
        <?php if ($data['status_pembayaran']=='pengecekan'): ?>
            
        <td colspan="2"><hr>
            Option 
            <form action="form/pembayaran/konfirmasi_pembayaran.php" method="post">
                <div class="col-md-6">
                <input type="hidden" name="id" value="<?php echo $data['id_member']; ?>">
                <select class="form-control" name="option">
                    <option value="tolak">Tolak</option>
                    <option value="setuju">Setuju</option>
                </select>
            </div>
            <div class="col-md-6">
            <button  class="btn btn-info btn-sm">Konfirmasi Pembayaran Dan Proses Barang</button>
        </div>
            </form>
        </td>
        <?php endif ?>
        
    </tr>
</table>
<a href="?a=pembayaran" class="btn btn-info btn-sm">Kembali</a>
</div>
<div class="col-md-4">
    <?php if ($data['status_pembayaran']=='lunas' or $data['status_pembayaran']=='pengecekan'): ?>
       Pembayaran Lunas
<?php else : ?>
    Member belum melakukan pembayaran <br>
    <a href="form/pembayaran/bayar_manual.php?id=<?php echo $id ?>" class="btn btn-info"  onclick="return confirm('Aktifkan Akun <?php echo $namaplg; ?>?')" >Aktifkan Akun</a>

        <?php endif ?>

</div>
<div class="clearfix"></div>
