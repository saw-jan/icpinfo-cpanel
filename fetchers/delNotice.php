<?php
  include("conn.php");
  if(isset($_GET['id'])){
  global $con;
  $id = $_GET['id'];
  $query = "SELECT * FROM icp_notices WHERE ID='".$id."'";
  $run = mysqli_query($con,$query);
  $row_num = mysqli_num_rows($run);
  if($row_num>0){
    $qry = "DELETE FROM icp_notices WHERE ID='".$id."'";
    $r = mysqli_query($con,$qry);
    header("location:../rte_admin/panel.php");
  }
  else{
  echo "Not deleted.";
  }
  mysqli_close($con);
}
?>
