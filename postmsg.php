<?php

include("connection.php");
error_reporting(0);
session_start();

$user=$_SESSION['usnm'];

$msg = $_POST['text'];
$r_name = $_POST['room'];
$u_ip = $_POST['ip'];


if ($user)
{ 

$sql="INSERT INTO ".$r_name." (msg,sender,ip,mtime) VALUES ('$msg','$user','$u_ip',CURRENT_TIMESTAMP)";

//echo $sql;

mysqli_query($conn,$sql);
mysqli_close($conn);

}
else
{
  header('location:index.php');
}



?>