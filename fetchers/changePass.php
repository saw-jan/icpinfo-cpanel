<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include("conn.php");
  getStudent();
}
function getStudent(){
  global $con;
  $sid = $_POST["Student_ID"];
  $opass = $_POST["Old_Password"];
  $npass = $_POST["New_Password"];
  $qry = "SELECT * FROM icp_students WHERE Student_ID='$sid' and Password='$opass'";
  $r = mysqli_query($con,$qry) or die("Invalid Password");
  $row_num = mysqli_num_rows($r);
  if($row_num==1){
    $query = "UPDATE icp_students SET Password='$npass' WHERE Student_ID='$sid' and Password='$opass'";
    $run = mysqli_query($con,$query) or die("Database Error");
    mysqli_close($con);
    echo "Updated";
  }
  else{
  echo "Incorrect Password!";
}
}
?>
