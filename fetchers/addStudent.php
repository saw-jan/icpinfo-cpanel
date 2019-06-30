<?php
include("conn.php");
include("../rte_admin/session.php");
if(isset($_POST['add'])){
  global $con;
  $id = $_POST["studentid"];
  $name = $_POST["studentname"];
  $pass = $_POST["studentpass"];
  $mail = $_POST["studentmail"];
  $gender = ucfirst($_POST["gender"]);
  $fac = strtoupper($_POST["faculty"]);

  if(!ctype_digit($id)){
    $message = "Student id must be numbers";
    $_SESSION["msg"] = $message;
    header("location:../rte_admin/students.php");
  }
  else{
  if(strlen($pass)<8){
    $message = "Password must be atleast 8 characters";
    $_SESSION["msg"] = $message;
    header("location:../rte_admin/students.php");
  }
  else{
    if(strpos($mail, '@') === false){
      $message = "Invalid e-mail address";
      $_SESSION["msg"] = $message;
      header("location:../rte_admin/students.php");
    }
    else{
  $qry = "SELECT * FROM icp_students WHERE Student_ID ='".$id."'";
  $r = mysqli_query($con,$qry) or die("Invalid input.");
  $count = mysqli_num_rows($r);
  if($count>0){
    $message = "Student Id already exists.";
    $_SESSION["msg"] = $message;
    header("location:../rte_admin/students.php");
  }
  else{
  $query = "INSERT INTO icp_students VALUES('.$id','$name','$pass','$mail','$gender','$fac')";
  $run = mysqli_query($con,$query); //or die(" input.");
  mysqli_close($con);
  header("location:../rte_admin/students.php");
}
}}
}
}
?>
