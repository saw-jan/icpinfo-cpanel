<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
  include("conn.php");
  getNotices();
}
function getNotices(){
  global $con;
  $query = "SELECT * FROM icp_staffs";
  $run = mysqli_query($con,$query) or die("Database Error.");
  $row_num = mysqli_num_rows($run)  or die("Error data fetching.");
  $t_array = array();
  if($row_num>0){
    while($row = mysqli_fetch_assoc($run)){
      $t_array[] = $row;
    }

  header('Content-Type: application/json');
  echo json_encode(array("staffs"=>$t_array));
  }
  else{
  echo "Not available.";
  }
    mysqli_close($con);
}
?>
