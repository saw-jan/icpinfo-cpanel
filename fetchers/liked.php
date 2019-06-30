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

}else{
  $qry = "INSERT INTO post_like VALUES($pid,'$sid')";
  $r = mysqli_query($con,$qry) or die("Network Error");
//select likes
    $query = "SELECT Student FROM post_like WHERE Post=$pid";
    $run = mysqli_query($con,$query) or die("Database Error");
    $count = mysqli_num_rows($run);
    mysqli_close($con);
    echo $count;
  }
}
?>
