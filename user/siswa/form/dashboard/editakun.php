<?php 
    $id=$_GET['id'];
include "../koneksi.php" ;
$perintah= "SELECT * from user where id='$id'";
$sql = mysqli_query($conn, $perintah) or die("query salah");
$data=mysqli_fetch_array($sql);
//$email=$data['email'];


    ?>



						<form action="form/dashboard/simpanedit_akun.php" method="post"> 
							<div class="form-group">
							<p>User Name </p>
							<b><?php echo $data['username'] ?></b>
							<input type="hidden" name="id"  class="form-control"  value="<?php echo $id ?>">
							<input type="hidden" name="username"  class="form-control" value="<?php echo $data['username'] ?>"  required=""/>
							</div>
							<div class="form-group">
							<p>Password</p>
							<input type="password" class="form-control" name="password"  required=""/>
							</div>
							<div class="form-group">
							<p>Konfirmasi Password</p>
							<input type="password" class="form-control" name="password2"  required="" placeholder="Ulangi password baru anda" />
							</div> 
						   	<br>
						   
							<input type="submit"  value="Perbaharui" class="btn btn-info"> 
						</form> 	
					