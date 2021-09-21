<?php 
$id=$_GET['id'];
$q = mysqli_query($conn, "SELECT * FROM guru join mapel on mapel.id_mapel=guru.id_mapel where id_guru='$id'")or die(mysqli_error());
$d=mysqli_fetch_array($q); 
$bulan = array('', 'Januari',' Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');?>

<form action="form/akses_guru/simpanedit_akses.php" method="post"  enctype="multipart/form-data">
<div class="box-header with-border">
  <h3 class="box-title">
    Akses Login Guru
  </h3>
  <div class="pull-right">
    <button type="submit" class="btn btn-info btn-sm" onclick="return confirm('Apakah data yang anda masukkan sudah benar.?')">Simpan</button>
    <a href="?a=akses_guru" class=" btn btn-info btn-sm" >Kembali</a>
  </div>
  
</div>
<br>
  <div class="col-md-6">
    <label>Username</label>
    <input value="<?php echo $d['username'] ?>" type="text" required name="username" class="form-control">
  </div>
  <div class="col-md-6">
    <label>Password</label>
    <input value="<?php echo $d['password'] ?>" type="text" required name="password" class="form-control">
  </div>
<div class="clearfix"></div>
<hr>
<div class="box-header with-border">
  <h3 class="box-title">
    Identitas Guru
  </h3>

</div>
  <div class="col-md-4">

    <div class="form-group">
      <label>Nama</label>
      <input value="<?php echo $d['nama_guru'] ?>" type="text" readonly name="nama" class="form-control">
      <input value="<?php echo $d['id_guru'] ?>" type="hidden" name="id" class="form-control">
    </div>
    

    <div class="form-group">
      <label>NIP</label>
      <input value="<?php echo $d['nip'] ?>" type="text" readonly name="nip" class="form-control">
    </div>
    

    <div class="form-group">
      <label>Tempat Lahir</label>
      <input value="<?php echo $d['tmpl_guru'] ?>" type="text" readonly name="tmpl" class="form-control">
    </div>
    

    <div class="form-group">
      <label>Tanggal Lahir</label>
      <input value="<?php echo $d['tgll_guru'] ?>" type="date" readonly name="tgll" class="form-control">
    </div>
    

    <div class="form-group">
      <label>Pangkat Golongan</label>
      <input value="<?php echo $d['pangkat_gol'] ?>" type="text" readonly name="p_gol" class="form-control">
    </div>
    

    <div class="form-group">
      <label>Pangkat TMT</label>
      <input value="<?php echo $d['pangkat_tmt'] ?>" type="date" readonly name="p_tmt" class="form-control">
    </div>
    

    
  </div>
  <div class="col-md-4">
    

    <div class="form-group">
      <label>Jabatan</label>
      <input value="<?php echo $d['jabatan'] ?>" type="text" readonly name="jab" class="form-control">
    </div>
    

    <div class="form-group">
      <label>TMT Jabatan</label>
      <input value="<?php echo $d['tmt_jabatan'] ?>" type="date" readonly name="tmt_jab" class="form-control">
    </div>

    <div class="form-group">
      <label>Masa Kerja</label>
      <input value="<?php echo $d['masa_kerja'] ?>" type="text" readonly name="masa" class="form-control">
    </div>
    <div class="form-group">
      <label>Nama Diklat</label>
      <input value="<?php echo $d['diklat_nama'] ?>" type="text" readonly name="diklat_nama" class="form-control">
    </div>
    <div class="form-group">
      <label>Bulan Diklat</label>
        <input value="<?php echo $d['diklat_bln'] ?>" type="text" readonly name="p_gol" class="form-control">
    </div>
    <div class="form-group">
      <label>Tahun Diklat</label>
     <input value="<?php echo $d['diklat_thn'] ?>" type="text" readonly name="p_gol" class="form-control">
    </div>


  </div>
  <div class="col-md-4">

    <div class="form-group">
      <label>Jumlah Jam Diklat</label>
      <input value="<?php echo $d['diklat_jml_jam'] ?>" type="text" readonly name="diklat_jam" class="form-control">
    </div>
    

    <div class="form-group">
      <label>Pendidikan</label>
      <input value="<?php echo $d['pendidikan'] ?>" type="text" readonly name="pendidikan" class="form-control">
    </div>

    <div class="form-group">
      <label>Jurusan</label>
      <input value="<?php echo $d['jurusan'] ?>" type="text" readonly name="jurusan" class="form-control">
    </div>

    <div class="form-group">
      <label>Asal Pendidikan</label>
      <input value="<?php echo $d['asal_pendidikan'] ?>" type="text" readonly name="asal" class="form-control">
    </div>

    <div class="form-group">
      <label>Tahun Lulus</label>
      <input value="<?php echo $d['tahun_lulus'] ?>" type="text" readonly name="p_gol" class="form-control">
    </div>

     <div class="form-group">
          <label>Mata Pelajaran Yang Diajarkan</label>
          <input value="<?php echo $d['nama_mapel'] ?>" type="text" readonly name="p_gol" class="form-control">
      </div>
    
  </div>
  <div class="clearfix"></div>
</form>
