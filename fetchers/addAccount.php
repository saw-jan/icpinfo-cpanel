<?php
include("conn.php");
include("../rte_admin/session.php");
if(isset($_POST['add'])){
  global $con;
  $username = $_POST["username"];
  $password = $_POST["password"];
  $confirm = $_POST["confirm"];
  if(strpos($username, " ") !== false){
    $message = "Spaces not allowed";
    $_SESSION["msg"] = $message;
      header("location:../rte_admin/accounts.php");
  }
else{
  if(strlen($password)<8){
    $message = "Password must be atleast 8 characters";
    $_SESSION["msg"] = $message;
      header("location:../rte_admin/accounts.php");
  }
  else{
  $qry = "SELECT * FROM rte_admins WHERE Username ='".$username."'";
  $r = mysqli_query($con,$qry) or die("Invalid input.");
  $count = mysqli_num_rows($r);
  if($count>0){
    $message = "Username already exists.";
    $_SESSION["msg"] = $message;
    header("location:../rte_admin/accounts.php");
  }
  else{
    if($password==$confirm){
      $query = "INSERT INTO rte_admins(Username,Password) VALUES('".$username."','".$password."')";
      $run = mysqli_query($con,$query) or die("Invalid input.");
      mysqli_close($con);
        header("location:../rte_admin/accounts.php");
    }
  else{
    $message = "Password didn't match.";
    $_SESSION["msg"] = $message;
    header("location:../rte_admin/accounts.php");
  }
  }
}
}
}
?>
