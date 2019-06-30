<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include("conn.php");
  liked();
}
function liked(){
  global $con;
  $pid = $_POST["Post_ID"];
  $sid = $_POST["Student"];
    $query = "SELECT * FROM post_like WHERE Post=$pid and Student='$sid'";
    $run = mysqli_query($con,$query) or die("Database Error");
    $count = mysqli_num_rows($run);
    if($count>0){
      echo "1";
    }else{
      echo "0";
    }
    mysqli_close($con);
}
?>
