<?php
  include("conn.php");
  global $con;
  $query = "SELECT Title FROM icp_notices ORDER BY ID DESC LIMIT 1";
  $run = mysqli_query($con,$query) or die("Database Error.");
    while($row = mysqli_fetch_assoc($run)){
      $title = $row["Title"];
    echo $title;
}
?>
