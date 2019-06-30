<?php
session_start();
include_once("conn.php");

if(isset($_COOKIE['login_user']) && isset($_COOKIE['login_password'])){
    $user = $_COOKIE['login_user'];
    $pass = $_COOKIE['login_password'];
    $_SESSION['username'] = $user;
    header("location:rte_admin/dashboard.php");
}
else{
if(isset($_POST['login'])){
  $username = $_POST['user'];
  $password = $_POST["password"];

  $query = "SELECT * FROM rte_admins WHERE Username='".$username."' AND Password='".$password."'";
  $run = mysqli_query($con,$query);
  $result = mysqli_fetch_array($run);

  if($result){
    $_SESSION['username'] = $username;
    $remember = $_POST['remember'];
    if(isset($_POST[$remember])){
      //coookies
      setcookie('login_user',$username,time()+(30*24*60*60));
      setcookie('login_password',$password,time()+(30*24*60*60));
    }
    header("location:rte_admin/panel.php");
  }
  else{
    $error = "Invalid Username or Password.";
  }
}
}
?>
