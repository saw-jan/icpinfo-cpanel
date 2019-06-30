<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include("conn.php");
  getStudent();
}
function getStudent(){
  global $con;
  $studentId = $_POST["Student_ID"];
  $password = $_POST["Password"];

  $query = "SELECT * FROM icp_students WHERE Student_ID='$studentId' AND Password='$password'";
  $run = mysqli_query($con,$query);
  $row_num = mysqli_num_rows($run);
  $t_array = array();
  if($row_num>0){
    while($row = mysqli_fetch_assoc($run)){
      $t_array[] = $row;
    }
    header('Content-Type: application/json');
    echo json_encode(array("student"=>$t_array));
  }
  else{
  echo "";
  }
  mysqli_close($con);
}
?>
