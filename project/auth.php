<?php
include('db.php');

$u=$_POST['username'];
$p=$_POST['password'];

$p=md5($p);

$que="SELECT * FROM user WHERE username='$u'";
$info = mysql_query($que);
if(mysql_num_rows($info)==1)
{
	$data = mysql_fetch_assoc($info);
	if($data['password']==$p)
	{
		$_SESSION['name']=$data['full_name'];
		$_SESSION['id']=$data['id'];
		$_SESSION['backdoor']=true;
		header("location:dashboard.php");
	}
	else
	{
		$_SESSION['msg']="This Password is Incorrect !";
		header("location:login.php");

	}
}
else
{
	$_SESSION['msg']="This Username And Password is Incorrect !";
	header("location:login.php");
}
?>