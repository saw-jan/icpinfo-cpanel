<?php
  include("conn.php");
  getStudent();
function getStudent(){
  global $con;
  global $num;
  $query = "SELECT * FROM icp_notices" or die("Error in fetching data");
  $run = mysqli_query($con,$query);
  $row_num = mysqli_num_rows($run);
  if($row_num>0){
    while($row = mysqli_fetch_assoc($run)){
      $id = $row["ID"];
      $title = $row["Title"];
      $body = $row["Body"];
      echo "<tr>
      <td style='font-size:12px;padding:8px;border-right:1px solid #444; border-top:1px solid #444;'>$id</td>
      <td style='font-size:12px;padding:8px;border-right:1px solid #444; border-top:1px solid #444;'>$title</td>
      <td style='font-size:12px;padding:8px;border-right:1px solid #444; border-top:1px solid #444;'>$body</td>
      <td style='font-size:12px;padding:8px;border-right:1px solid #444; border-top:1px solid #444;'>
      <a href='../fetchers/delNotice.php?id=".$id."'><img style='width:20px;' src='../assets/delete.png'/></a></td>
      </tr>";
    }
    $num = $row_num;
  }
  else{
  echo "Please add notice.";
  }
  mysqli_close($con);
}
?>
