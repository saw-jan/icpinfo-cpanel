<?php
  include("conn.php");
  session_start();
  include("../rte_admin/session.php");
  if(isset($_GET['id'])){
  $user = $_SESSION["username"];
  global $con;
  $message;
  $id = $_GET['id'];
  $query = "SELECT * FROM rte_admins WHERE admin_ID='".$id."'";
  $run = mysqli_query($con,$query);
  $row_num = mysqli_num_rows($run);
  if($row_num>0){
    while($row = mysqli_fetch_assoc($run)){
      $username = $row["Username"];
      if($username === $user){
        $message = "Cannot delete own account.";
        $_SESSION["tbMsg"] = $message;
      }else{
        $qry = "DELETE FROM rte_admins WHERE admin_ID='".$id."'";
        $r = mysqli_query($con,$qry);
          mysqli_close($con);
      }
      break;
    }
  }
  else{
  echo "Not deleted.";
  }
  header("location:../rte_admin/accounts.php");
}
?>
