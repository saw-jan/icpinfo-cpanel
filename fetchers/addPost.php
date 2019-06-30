<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include("conn.php");
  liked();
}
function liked(){
  global $con;
  $ttl = $_POST["Title"];
  $cont = $_POST["Content"];
  $by = $_POST["Post_by"];
  $qry = "INSERT INTO icp_posts(Title,Content,PostBy,PDate) VALUES('$ttl','$cont','$by',NOW())";
  $r = mysqli_query($con,$qry) or die("Network Error");
    mysqli_close($con);
    echo "success";
}
?>
