<?php
include("conn.php");
include("../rte_admin/session.php");
$name = $_SESSION["username"];
if(isset($_POST['add'])){
  global $con;
  $username =$name;
  $oldpass = $_POST["oldpass"];
  $password = $_POST["password"];
  $confirm = $_POST["confirm"];

  $query = "SELECT * FROM rte_admins WHERE Username='".$username."' and Password='".$oldpass."'";
  $run = mysqli_query($con,$query) or die("Invalid input.");
  $count = mysqli_num_rows($run);
  if(strlen($password)<8){
    $message = "Password must be atleast 8 characters";
    $_SESSION["msg"] = $message;
      header("location:../rte_admin/profile.php");
  }
  else{
  if($count>0){
    if($password==$confirm){
      $qry = "UPDATE rte_admins SET Password='".$password."' WHERE Username ='".$username."'";
      $r = mysqli_query($con,$qry) or die("Invalid input.");
      mysqli_close($con);
        header("location:../rte_admin/accounts.php");
    }
  else{
      $message = "Password didn't match.";
      $_SESSION["msg"] = $message;
      header("location:../rte_admin/profile.php");
  }
  }
  else{
    $message = "Incorrect password.";
    $_SESSION["msg"] = $message;
    header("location:../rte_admin/profile.php");
  }
}

}
?>
