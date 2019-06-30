<?php
include("conn.php");
if(isset($_POST['add'])){
  global $con;
  $moveto="../files/";
  $name=$_FILES['file']['name'];
  $temp_name  = $_FILES['file']['tmp_name'];
  $title = $_POST["title"];
  $body = $_POST["content"];
  if(isset($name) && !empty($name)){
  if(move_uploaded_file($temp_name,$moveto.$name)){
    $query = "INSERT INTO icp_notices(Title,Body,File,PDate) VALUES('".$title."','".$body."','".$name."',NOW())";
    $run = mysqli_query($con,$query) or die("Invalid input.");
    mysqli_close($con);
  }
  else{
    echo "Error uploading file.";
  }
}
else{
  $q = "INSERT INTO icp_notices(Title,Body,File,PDate) VALUES('".$title."','".$body."','',NOW())";
  $run = mysqli_query($con,$q) or die("Invalid input.");
  mysqli_close($con);
}
header("location:push_notification.php");
}
?>
