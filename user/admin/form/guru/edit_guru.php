<?php 
$id=$_GET['id'];
$q = mysqli_query($conn, "SELECT * FROM guru join mapel on mapel.id_mapel=guru.id_mapel where id_guru='$id'")or die(mysqli_error());
$d=mysqli_fetch_array($q); 
$bulan = array('', 'Januari',' Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');?>

<form action="form/guru/simpanedit_guru.php" method="post"  enctype="multipart/form-data">
<div class="box-header with-border">
  <h3 class="box-title">
    Edit Data Guru
  </h3>
  <div class="pull-right">
    <button type="submit" class="btn btn-info btn-sm" onclick="return confirm('Apakah data yang anda masukkan sudah benar.?')">Simpan</button>
    <a href="?a=guru" class=" btn btn-info btn-sm" >Kembali</a>
  </div>
  
</div>

  <div class="col-md-4">

    <div class="form-group">
      <label>Nama</label>
      <input value="<?php echo $d['nama_guru'] ?>" type="text" name="nama" class="form-control">
      <input value="<?php echo $d['id_guru'] ?>" type="hidden" name="id" class="form-control">
    </div>
    

    <div class="form-group">
      <label>NIP</label>
      <input value="<?php echo $d['nip'] ?>" type="text" name="nip" class="form-control">
    </div>
    

    <div class="form-group">
      <label>Tempat Lahir</label>
      <input value="<?php echo $d['tmpl_guru'] ?>" type="text" name="tmpl" class="form-control">
    </div>
    

    <div class="form-group">
      <label>Tanggal Lahir</label>
      <input value="<?php echo $d['tgll_guru'] ?>" type="date" name="tgll" class="form-control">
    </div>
    

    <div class="form-group">
      <label>Pangkat Golongan</label>
      <input value="<?php echo $d['pangkat_gol'] ?>" type="text" name="p_gol" class="form-control">
    </div>
    

    <div class="form-group">
      <label>Pangkat TMT</label>
      <input value="<?php echo $d['pangkat_tmt'] ?>" type="date" name="p_tmt" class="form-control">
    </div>
    

    
  </div>
  <div class="col-md-4">
    

    <div class="form-group">
      <label>Jabatan</label>
      <input value="<?php echo $d['jabatan'] ?>" type="text" name="jab" class="form-control">
    </div>
    

    <div class="form-group">
      <label>TMT Jabatan</label>
      <input value="<?php echo $d['tmt_jabatan'] ?>" type="date" name="tmt_jab" class="form-control">
    </div>

    <div class="form-group">
      <label>Masa Kerja</label>
      <input value="<?php echo $d['masa_kerja'] ?>" type="text" name="masa" class="form-control">
    </div>
    <div class="form-group">
      <label>Nama Diklat</label>
      <input value="<?php echo $d['diklat_nama'] ?>" type="text" name="diklat_nama" class="form-control">
    </div>
    <div class="form-group">
      <label>Bulan Diklat</label>
        <select name="diklat_bln" class="form-control">
        <?php for ($i=1; $i <= 12; $i++) { ?>
          <option value="<?php echo $bulan[$i] ?>" <?php if($d['diklat_bln']==$bulan[$i]){echo "selected";} ?>><?php echo $bulan[$i] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label>Tahun Diklat</label>
      <select name="diklat_thn" class="form-control">
        <?php for ($i=2010; $i <= date('Y'); $i++) { ?>
          <option value="<?php echo $i ?>" <?php if($d['diklat_thn']==$i){echo "selected";} ?>><?php echo $i ?></option>
        <?php } ?>
      </select>
    </div>


  </div>
  <div class="col-md-4">

    <div class="form-group">
      <label>Jumlah Jam Diklat</label>
      <input value="<?php echo $d['diklat_jml_jam'] ?>" type="text" name="diklat_jam" class="form-control">
    </div>
    

    <div class="form-group">
      <label>Pendidikan</label>
      <input value="<?php echo $d['pendidikan'] ?>" type="text" name="pendidikan" class="form-control">
    </div>

    <div class="form-group">
      <label>Jurusan</label>
      <input value="<?php echo $d['jurusan'] ?>" type="text" name="jurusan" class="form-control">
    </div>

    <div class="form-group">
      <label>Asal Pendidikan</label>
      <input value="<?php echo $d['asal_pendidikan'] ?>" type="text" name="asal" class="form-control">
    </div>

    <div class="form-group">
      <label>Tahun Lulus</label>
      <select name="lulus" class="form-control">
        <?php for ($i=2010; $i <= date('Y'); $i++) { ?>
          <option value="<?php echo $i ?>" <?php if($d['tahun_lulus']==$i){echo "selected";} ?>><?php echo $i ?></option>
        <?php } ?>
      </select>
    </div>

     <div class="form-group">
          <label>Mata Pelajaran Yang Diajarkan</label>
          <select name="mapel" class="form-control">
            <?php 
            $qmapel = mysqli_query($conn, "SELECT * from mapel");
            while($dmapel = mysqli_fetch_array($qmapel)){ ?>
              <option value="<?php echo $dmapel['id_mapel'] ?>" <?php if($d['id_mapel']==$dmapel['id_mapel']){echo "selected";} ?>><?php echo $dmapel['nama_mapel'] ?></option>
            <?php } ?>
          </select>
      </div>
    
  </div>
  <div class="clearfix"></div>
</form>
