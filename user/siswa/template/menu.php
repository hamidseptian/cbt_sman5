<?php 
error_reporting(0);
$menu=$_GET['m'];
if ($menu=='') {
	echo "Dashboard";
}
else{
echo $menu;
}
 ?>