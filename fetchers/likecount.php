<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include("conn.php");
  likeCount();
}
function likeCount(){
  global $con;
  $pid = $_POST["Post_ID"];
    $query = "SELECT Student FROM post_like WHERE Post=$pid";
    $run = mysqli_query($con,$query) or die("Database Error");
    $count = mysqli_num_rows($run);
    if($count>0){
      echo $count;
    }
    else{
    echo "0";
    }
    mysqli_close($con);
}
?>
