<form action="form/guru/simpan_guru.php" method="post"  enctype="multipart/form-data">
<div class="box-header with-border">
  <h3 class="box-title">
    Tambah Data Guru
  </h3>
  <div class="pull-right">
    <button type="submit" class="btn btn-info btn-sm" onclick="return confirm('Apakah data yang anda masukkan sudah benar.?')">Simpan</button>
    <a href="?a=guru" class=" btn btn-info btn-sm" >Kembali</a>
  </div>
  
</div>

  <div class="col-md-4">

    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control">
    </div>
    

    <div class="form-group">
      <label>NIP</label>
      <input type="text" name="nip" class="form-control">
    </div>
    

    <div class="form-group">
      <label>Tempat Lahir</label>
      <input type="text" name="tmpl" class="form-control">
    </div>
    

    <div class="form-group">
      <label>Tanggal Lahir</label>
      <input type="date" name="tgll" class="form-control">
    </div>
    

    <div class="form-group">
      <label>Pangkat Golongan</label>
      <input type="text" name="p_gol" class="form-control">
    </div>
    

    <div class="form-group">
      <label>Pangkat TMT</label>
      <input type="date" name="p_tmt" class="form-control">
    </div>
    

    
  </div>
  <div class="col-md-4">
    

    <div class="form-group">
      <label>Jabatan</label>
      <input type="text" name="jab" class="form-control">
    </div>
    

    <div class="form-group">
      <label>TMT Jabatan</label>
      <input type="date" name="tmt_jab" class="form-control">
    </div>

    <div class="form-group">
      <label>Masa Kerja</label>
      <input type="text" name="masa" class="form-control">
    </div>
    <div class="form-group">
      <label>Nama Diklat</label>
      <input type="text" name="diklat_nama" class="form-control">
    </div>
    <div class="form-group">
      <label>Bulan Diklat</label>
      <input type="text" name="diklat_bln" class="form-control">
    </div>
    <div class="form-group">
      <label>Tahun Diklat</label>
      <select name="diklat_thn" class="form-control">
        <?php for ($i=2010; $i <= date('Y'); $i++) { ?>
          <option value="<?php echo $i ?>"><?php echo $i ?></option>
        <?php } ?>
      </select>
    </div>


  </div>
  <div class="col-md-4">

    <div class="form-group">
      <label>Jumlah Jam Diklat</label>
      <input type="text" name="diklat_jam" class="form-control">
    </div>
    

    <div class="form-group">
      <label>Pendidikan</label>
      <input type="text" name="pendidikan" class="form-control">
    </div>

    <div class="form-group">
      <label>Jurusan</label>
      <input type="text" name="jurusan" class="form-control">
    </div>

    <div class="form-group">
      <label>Asal Pendidikan</label>
      <input type="text" name="asal" class="form-control">
    </div>

    <div class="form-group">
      <label>Tahun Lulus</label>
      <input type="text" name="lulus" class="form-control">
    </div>

     <div class="form-group">
          <label>Mata Pelajaran Yang Diajarkan</label>
          <select name="mapel" class="form-control">
            <?php 
            $qmapel = mysqli_query($conn, "SELECT * from mapel");
            while($dmapel = mysqli_fetch_array($qmapel)){ ?>
              <option value="<?php echo $dmapel['id_mapel'] ?>"><?php echo $dmapel['nama_mapel'] ?></option>
            <?php } ?>
          </select>
      </div>
    
  </div>
  <div class="clearfix"></div>
</form>
