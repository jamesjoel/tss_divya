<?php
include('../db.php');
$u=$_POST['username'];
$p=$_POST['pass'];

$que="SELECT * FROM admin WHERE username='$u'";
$obj=mysql_query($que);
if(mysql_num_rows($obj)==1)
{
	$data=mysql_fetch_assoc($obj);
	if($data['password']==$p)
	{
		$_SESSION['username']=$data['username'];
		$_SESSION['id']=$data['id'];
		$_SESSION['backdoor_admin']=true;
		header("location:dashboard.php");		
		

	}
	else
	{
		$_SESSION['msg']="This Password is incorrect ";
		header("location:index.php");		
	}
}
else
{
	$_SESSION['msg']="This Username and Password is incorrect ";
	header("location:index.php");
}
?>