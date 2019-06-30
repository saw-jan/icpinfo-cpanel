<?php
  include("conn.php");
  getStudent();
function getStudent(){
  global $con;
  global $num;
  $query = "SELECT * FROM icp_staffs";
  $run = mysqli_query($con,$query);
  $row_num = mysqli_num_rows($run)  or die("Error data fetching.");
  if($row_num>0){
    while($row = mysqli_fetch_assoc($run)){
      $id = $row["ID"];
      $name = $row["Name"];
      $mail = $row["Email"];
      $contact = $row["Contact"];
      echo "<tr>
      <td style='font-size:12px;padding:8px;border-right:1px solid #444; border-top:1px solid #444;'>$id</td>
      <td style='font-size:12px;padding:8px;border-right:1px solid #444; border-top:1px solid #444;'>$name</td>
      <td style='font-size:12px;padding:8px;border-right:1px solid #444; border-top:1px solid #444;'>$mail</td>
      <td style='font-size:12px;padding:8px;border-right:1px solid #444; border-top:1px solid #444;'>$contact</td>
      <td style='font-size:12px;padding:8px;border-right:1px solid #444; border-top:1px solid #444;'>
      <a href='../fetchers/delImp.php?id=$id'><img style='width:20px;' src='../assets/delete.png'/></a></td>
      </tr>";
    }
    $num = $row_num;
  }
  else{
  echo "Please add students.";
  }
  mysqli_close($con);
}
?>
