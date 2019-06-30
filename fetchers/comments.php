<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include("conn.php");
  getPosts();
}
function getPosts(){
  global $con;
  $id = $_POST["Post_ID"];
  $query = "SELECT * FROM post_comment WHERE Post=$id";
  $run = mysqli_query($con,$query) or die("Database Error.");
  $row_num = mysqli_num_rows($run)  or die("Error data fetching.");
  $t_array = array();
  if($row_num>0){
    while($row = mysqli_fetch_assoc($run)){
      $t_array[] = $row;
    }
  header('Content-Type: application/json');
  echo json_encode(array("comments"=>$t_array));
  }
  else{
  echo "";
  }
    mysqli_close($con);
}
?>
