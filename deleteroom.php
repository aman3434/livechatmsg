<?php 
include("connection.php");
error_reporting(0);
session_start();

$user=$_SESSION['usnm'];

$host_name=$_GET['host'];
$r_name=$_GET['room_name'];
$p_name=$_GET['person_name'];

$ta=$host_name.$r_name;

if ($user==$host_name or $user==$p_name)
{
   // echo "Logged as".$user."<br>";
   // echo "Host Name".$host_name."<br>";
   // echo "person name".$p_name."<br>";
    $query= "DROP TABLE msg".$ta;
  //echo "$query";

   $data=mysqli_query($conn,$query);

     if ($data) 
     {
      $rm="DELETE FROM room WHERE user_id='$user' and room_name='$r_name'";
      $res=mysqli_query($conn,$rm);
      if($res)
      {
        $msg="Room Deletetion successfully."; 
        echo "<script>alert('$msg')</script>";
        ?>   
        <META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost:8080/chatsystem/dashboard_room.php">
        <?php
      }      
     }
     else
     {
       echo "<font color='red'>Record not delete from database";
     }
}
else
{
  header('location:index.php');
}
 ?>