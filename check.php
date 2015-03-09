<?php
include('admin/conn.php');
session_start();

$us = $_POST['username'];
$use = mysql_real_escape_string($us);
$username = $use;
$pas1 = mysql_real_escape_string($_POST['password']);
$password=md5($pas1);

$queryu="select * from user_login where email='".$username."'";
	$res=mysql_query($queryu);
	$row=mysql_fetch_row($res);
	
	if($row)
	{
		$queryp="select * from user_login where email='".$username."' AND password='".$password."'";
		$res1=mysql_query($queryp);
		$row1=mysql_fetch_row($res1);
		if($row1)
		{
		$_SESSION['id']=$row1[1];
		}
		else
		{
			$_SESSION['notpass']=1;
		}
	}
	
	else
	{
		$_SESSION['notuser']=$us;
	}

?>
