<?php
  include("conn.php");
  global $con;
  global $num;
  $query = "SELECT * FROM rte_admins";
  $run = mysqli_query($con,$query);
  $row_num = mysqli_num_rows($run) or die("Error data fetching.");
  if($row_num>0){
    while($row = mysqli_fetch_assoc($run)){
      $id = $row["admin_ID"];
      $username = $row["Username"];
      $password = $row["Password"];
      $role = $row["Role"];
      echo "<tr>
      <td style='font-size:12px;padding:8px;border-right:1px solid #444; border-top:1px solid #444;'>$id</td>
      <td style='font-size:12px;padding:8px;border-right:1px solid #444; border-top:1px solid #444;'>$username</td>
      <td style='font-size:12px;padding:8px;border-right:1px solid #444; border-top:1px solid #444;'>$password</td>
      <td style='font-size:12px;padding:8px;border-right:1px solid #444; border-top:1px solid #444;'>$role</td>
      <td style='font-size:12px;padding:8px;border-right:1px solid #444; border-top:1px solid #444;'>
      <a href='../fetchers/delAccount.php?id=".$id."'><img style='width:20px;' src='../assets/delete.png'/></a></td>
      </tr>";
    }
  //$num = $row_num;
  }
  else{
  echo "Please add students.";
  }
  mysqli_close($con);
?>
