<?php
session_start();
include('conn.php');
if(isset($_SESSION['admin']))
{
	$pass=$_POST['oldpassword'];
	$pass1=$_POST['newpassword'];
	$pass2=$_POST['newpassword1'];
	$pass1=md5($pass1);
	$pass=md5($pass);
	
	$query=mysql_query('select * from admin where password="'.$pass.'"');
	if($row=mysql_fetch_array($query))
	{
		$query1=mysql_query('update admin SET password="'.$pass1.'" where password="'.$pass.'"');
		header("Location:index.php?add=passchang");
	}
	else
	{
		header("Location:index.php?action=changepassword&error=1");	
	}
}
else
header("Location:index.php");
?>