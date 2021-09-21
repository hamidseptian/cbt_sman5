<?php 
session_start();
    $id=$_SESSION['id_admin'];
include "../koneksi.php" ;
$perintah= "SELECT * from admin where id='$id'";
$sql = mysqli_query($conn, $perintah) or die("query salah");
$data=mysqli_fetch_array($sql);
//$email=$data['email'];


    ?>



						<form action="form/dashboard/simpanedit_akun.php" method="post"> 
							
							<p>User Name </p>
							<input type="hidden" name="id"  class="form-control"  value="<?php echo $id ?>">
							<input type="text" name="username"  class="form-control" value="<?php echo $data['username'] ?>"  required=""/>
							<p>Password</p>
							<input type="password" class="form-control" name="password"  required=""/>  
						   	<br>
						   
							<input type="submit"  value="Perbaharui" class="btn btn-info"> 
						</form> 	
					