<?php
include("conn.php");
global $con;
function send_notification($token, $message){
  $url ="https://fcm.googleapis.com/fcm/send";
  $fields = array(
    'registration_ids'=>$token,
    'data'=>$message
  );
  $header = array(
    'Authorization:key = AAAAOkEdcpw:APA91bEVh7OJYN65SI0Oh8jWuDsu4w0OWvgVztMEO6fmyD7P44HMeSxxSyq7pH18onO3C-Lvq4Y7EbOG-BsCgrUpcqp-Qh9PootJWSqhfLe5adQVa6GRjBDSX5toardbhQ-UC4Ce-AxR',
    'Content-Type: application/json'
  );
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_POST,true);
  curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
  curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($fields));
  $result = curl_exec($ch);
  if($result===FALSE){
    die('Curl failed: '.curl_error($ch));
  }
  curl_close($ch);
  return $result;
}
$sql = "SELECT Token FROM app_users";
$result = mysqli_query($con,$sql);
$tokens = array();
if(mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_assoc($result)){
    $tokens[]=$row["Token"];
  }
}
$query = "SELECT Title FROM icp_notices ORDER BY ID DESC LIMIT 1";
$run = mysqli_query($con,$query) or die("Database Error.");
  while($rw = mysqli_fetch_assoc($run)){
    $title = $rw["Title"];
  }
mysqli_close($con);
$message = array('message' =>$title);
$message_status = send_notification($tokens,$message);
echo $message_status;
header("location:../rte_admin/panel.php");
 ?>
