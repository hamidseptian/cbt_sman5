<?php 
session_start();

include "../koneksi.php";

    $id=$_SESSION['id_user'];


$perintah= "SELECT * from member  where id_member='$id'";
$sql = mysqli_query($conn, $perintah)or die(mysqli_error());
$jumlah=mysqli_num_rows($sql);

$data=mysqli_fetch_array($sql); 
 ?>


 <form action="form/member/simpanedit_member.php" method="post" enctype="multipart/form-data">
   <input type="hidden" name="id" class="form-control" required value="<?php echo $id; ?>">     
    <div class="form-group">
        <label>Nama Lengkap</label>
       <input type="text" name="nm" class="form-control" required value="<?php echo $data['nama']; ?>">
    </div>                                    
    <div class="form-group">
        <label>Panggilan</label>
       <input type="text" name="pgl" class="form-control" value="<?php echo $data['panggilan']; ?>">
    </div>                                  
    <div class="form-group">
        <label>Alamat Email</label>
       <input type="email" name="em" class="form-control" value="<?php echo $data['email']; ?>">
    </div>                                  
    <div class="form-group">
        <label>No HP</label>
       <input type="text" name="hp" class="form-control" value="<?php echo $data['hp']; ?>">
    </div>                                  
    <div class="form-group">
        <label>No WhatsApp</label>
       <input type="text" name="wa" class="form-control" value="<?php echo $data['wa']; ?>">
    </div>                                  
    <div class="form-group">
        <label>Tempat Lahir</label>
       <input type="text" name="tmpl" class="form-control" value="<?php echo $data['tmpl']; ?>">
    </div>                                  
    <div class="form-group">
        <label>Tanggal Lahir</label>
       <input type="date" name="tgll" class="form-control" value="<?php echo $data['tgll']; ?>">
    </div>                                  
    <div class="form-group">
        <label>Jenis Kelamin</label>
       <select name="jk" class="form-control" >
        <?php 
          $jk=['Laki-laki', 'Perempuan'];
          foreach ($jk as $j) {?>
            <option value="<?php echo $j ?>" <?php if ($j==$data['jk']) echo "selected" ?>><?php echo $j ?></option>
         <?php }
         ?>
       </select>
    </div>                                  
    <div class="form-group">
        <label>Alamat</label>
       <textarea class="form-control" name="alm">  <?php echo $data['alamat']; ?> </textarea>
    </div>                                  
    <div class="form-group">
        <label>Pendidikan Terakhir</label>
       <select name="pt" class="form-control" >
        <?php 
          $pemd=['SMA Sederajat', 'D3', 'S1', 'S2', 'S3'];
          foreach ($pemd as $p) {?>
            <option value="<?php echo $p ?>" <?php if ($p==$data['pendidikan']) echo "selected" ?>><?php echo $p ?></option>
         <?php }
         ?>
       </select>
    </div>                             
    <div class="form-group">
        <label>Universitas / Sekolah</label>
       <input type="text" name="ins" class="form-control" value="<?php echo $data['instansi']; ?>">
    </div>                       
    <div class="form-group">
        <label>Jurusan / Program Study</label>
       <input type="text" name="jurusan" class="form-control" value="<?php echo $data['jurusan']; ?>">
    </div>                       
    <div class="form-group">
        <label>IPK</label>
       <input type="text" name="ipk" class="form-control" value="<?php echo $data['ipk']; ?>">
    </div>                       
    <div class="form-group">
        <label>Pernah Ikut CPNS</label>
         <select name="ikut" class="form-control" >
        <?php 
          $ikut=['Ya', 'Tidak'];
          foreach ($ikut as $p) {?>
            <option value="<?php echo $p ?>" <?php if ($p==$data['pernah_cpns']) echo "selected" ?>><?php echo $p ?></option>
         <?php }
         ?>
       </select>
    </div>                       
    <div class="form-group">
        <label>Jika Pernah Berapa Nilai</label>

      <?php $nilai =  $data['nilai'];
        $pisah=explode(",", $nilai); ?>
        <div class="col-md-12">
          <div class="col-md-4">
            <input type="text" name="tiu" class="form-control" placeholder="TIU" value="<?php echo $pisah[0]; ?>" >
          </div>
          <div class="col-md-4">
            <input type="text" name="twk" class="form-control" placeholder="TWK" value="<?php echo $pisah[1]; ?>" >
          </div>
          <div class="col-md-4">
            <input type="text" name="tkp" class="form-control" placeholder="TKP" value="<?php echo $pisah[2]; ?>" >
          </div>
        </div>
    </div>                       
    <div class="form-group">
        <label>Mengikuti Program</label>
      <select name="mp" class="form-control" >
        <?php 
          $prg=['CPNS Reguler', 'CPNS Khusus', 'CPNS Intensive'];
          foreach ($prg as $p) {?>
            <option value="<?php echo $p ?>" <?php if ($p==$data['program']) echo "selected" ?>><?php echo $p ?></option>
         <?php }
         ?>
       </select>
    </div>                   
    <div class="form-group">
        <label>Merode Pembayaran</label>
       <select name="pemb" class="form-control" >
        <?php 
          $pemb=['Transfer Rekening', 'Tunai'];
          foreach ($pemb as $p) {?>
            <option value="<?php echo $p ?>" <?php if ($p==$data['pembayaran']) echo "selected" ?>><?php echo $p ?></option>
         <?php }
         ?>
       </select>
    </div>                   
   

    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
        
        <span id="payment-button-amount">Perbaharui Data</span>
      </button>
                                           
                                        </form>