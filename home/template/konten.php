<?php 
@$menu = $_GET['m'];
if ($menu=='') {
     include "form/home/home.php";
 } 
elseif ($menu=='login') {
     include "form/home/login.php";
 } 
 ?>