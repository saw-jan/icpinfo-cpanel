<?php
include("conn.php");
include("../rte_admin/session.php");
if(isset($_POST['add'])){
  global $con;
  $name = $_POST["name"];
  $mail = $_POST["mail"];
  $contact = $_POST["contact"];
  $m1 = $_POST["m1"];
  $m2 = $_POST["m2"];
  $module = $m1;
  if($m2!=""){
    $module ="$m1, $m2";
  }
  $moveto="../images/";
  $fname=$_FILES['file']['name'];
  $temp_name  = $_FILES['file']['tmp_name'];
  if(strpos($mail, '@') === false){
    $message = "Invalid e-mail address";
    $_SESSION["msg"] = $message;
    header("location:../rte_admin/lecturers.php");
  }
  else{
    if(!ctype_digit($contact)){
      $message = "Contact must be numbers";
      $_SESSION["msg"] = $message;
      header("location:../rte_admin/lecturers.php");
    }
    else{
  if(strlen($contact)!==10){
    $message = "Invalid contact number";
    $_SESSION["msg"] = $message;
    header("location:../rte_admin/lecturers.php");
  }
  else{
  if(isset($fname) && !empty($fname)){
  if(move_uploaded_file($temp_name,$moveto.$fname)){
    $query = "INSERT INTO icp_lecturers(Name,Email,Contact,Module,Profile) VALUES('".$name."','".$mail."','".$contact."','".$module."','".$fname."')";
    $run = mysqli_query($con,$query) or die("Invalid input.");
    mysqli_close($con);
    header("location:../rte_admin/lecturers.php");
  }
  else{
    echo "Error uploading file.";
  }
}
else{
  $query = "INSERT INTO icp_lecturers(Name,Email,Contact,Module,Profile) VALUES('".$name."','".$mail."','".$contact."','".$module."','')";
  $run = mysqli_query($con,$query) or die("Invalid input.");
  mysqli_close($con);
  header("location:../rte_admin/lecturers.php");
}
}
}}
}
?>
