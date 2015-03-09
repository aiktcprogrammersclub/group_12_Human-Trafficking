<?php
include('conn.php');
session_start();

$us = $_POST['username'];
$use = mysql_real_escape_string($us);
$username = $use;
$pas1 = mysql_real_escape_string($_POST['password']);
$password=md5($pas1);
echo $password;
$queryu="select * from admin where username='".$username."'";
	$res=mysql_query($queryu);
	$row=mysql_fetch_row($res);
	
	if($row)
	{
		$queryp="select * from admin where username='".$username."' AND password='".$password."'";
		$res1=mysql_query($queryp);
		$row1=mysql_fetch_row($res1);
		if($row1)
		{
		$_SESSION['admin']=$row1[1];
		header("Location:index.php");
		}
		else
		{
			$_SESSION['notpass']=1;
			header("Location:login.php");
		}
	}
	
	else
	{
		$_SESSION['notuser']=$us;
		header("Location:login.php");
	}

?>
