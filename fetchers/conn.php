<?php
define('server','localhost');
define('user','root');
define('password','');
define('database','database_icp');
$con = mysqli_connect(server,user,password,database) or die("Connection Error");
?>
