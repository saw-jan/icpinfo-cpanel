</<?php
if(isset($_POST["Token"])){
include("conn.php");
  $token = $_POST["Token"];
  global $con;
  $query ="INSERT INTO  app_users(Token) VALUES('$token') ON DUPLICATE KEY UPDATE Token='$token';";
  mysqli_query($con,$query);
  mysqli_close($con);
}
 ?>
