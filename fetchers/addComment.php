<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include("conn.php");
  liked();
}
function liked(){
  global $con;
  $pid = $_POST["Post_ID"];
  $sid = $_POST["Student"];
  $cmt = $_POST["comment"];
  $qry = "INSERT INTO post_comment(Post,Student,PDate,Comment) VALUES($pid,'$sid',NOW(),'$cmt')";
  $r = mysqli_query($con,$qry) or die("Network Error");
    mysqli_close($con);
}
?>
