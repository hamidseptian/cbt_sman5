
<table class="table table-striped table-bordered" id="bootstrap-data-table-export">
    <thead>
    <tr>
        <td>No</td>
        <td>Nomor Order</td>
        <td>Nama Pelangan</td>
        <td>Tanggal Transaksi</td>
        <td>Status</td>
        <td style="width: 5%;">Option</td>
    </tr>
</thead>
<tbody>
<?php 

include "../koneksi.php" ;

$perintah= "SELECT * from pembayaran 
            join pelanggan on pembayaran.id_plg=pelanggan.id_plg
            join penjualan on penjualan.id_plg=pelanggan.id_plg 
            where pembayaran.status='pengecekan'
            group by no_order
            ";



$sql = mysqli_query($conn, $perintah);
$no=1;
while ($data=mysqli_fetch_array($sql)) {
    ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?= $data['no_order'];?></td>
        <td><?= $data['nama_plg'];?></td>
        <td><?= $data['tanggal_transaksi'];?></td>
        <td><?= $data['status'];?></td>
        <td>
             <a href="?m=cek_pembayaran&id=<?php echo $data['no_order'] ?>" class="btn btn-primary btn-sm fa fa-folder-open" title='Lihat detail pembayaran dan data barang yang dipesan'></a>
        </td>
        
       
       
    </tr>
   <?php } ?>
</tbody>
</table>

