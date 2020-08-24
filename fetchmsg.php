<?php

include("connection.php");
error_reporting(0);
session_start();

$user=$_SESSION['usnm'];

if ($user)
{ }
else
{
  header('location:index.php');
}

$r_name = $_POST['room'];
$h_name = $_POST['host'];
$p_name = $_POST['person'];

if ($user==$h_name) 
{
	$out=$h_name;
}
elseif ($user==$p_name) 
{
	$out=$p_name;
}

$cr_ip=$_SERVER['REMOTE_ADDR'];

$sql = "SELECT msg,sender,ip,mtime FROM ".$r_name;

$res = "";

$result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		if ($cr_ip==$row['ip'])
		{
			$res = $res . '<div class="container-chat">';
			$res = $res . $row['sender'];
			$res = $res . ' Says <p>'. $row["msg"];
			$res = $res . '</p> <span class="time-right-chat">'. $row['mtime']; 
			$res = $res . '</span></div>';
		}
		else
		{
			$res = $res . '<div class="container-chat darker-chat">';
			$res = $res . $row['sender'];
			$res = $res . ' Says <p>'. $row["msg"];
			$res = $res . '</p> <span class="time-right-chat">'. $row['mtime']; 
			$res = $res . '</span></div>';
		}		
	}
}
echo $res;
?>