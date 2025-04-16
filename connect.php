<?php

error_reporting(0);
session_start();
$host="localhost";
$user="root";
$password="";
$db="complaint";
$data=mysqli_connect($host,$user,$password,$db);
if ($data==false)
{
	echo "connection error";
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_POST['username'];
	$pass=$_POST['password'];
	$urnstu=$_POST['urn'];
	$messstu=$_POST['mess'];
	$sql="select * from user where username='".$name."' AND password='".$pass."'";
	$result=mysqli_query($data,$sql);
	$row =mysqli_fetch_array($result);
	$_SESSION['username']=$row['username'];
	$_SESSION['urn']=$row['urn'];
	$_SESSION['mess']=$row['mess'];
	if($row["usertype"]=="student")
	{
        
		header("location:profile.php");
	}
	else if($row["usertype"]=="admin")
	{
		header("location:adminprofile.php");
	}
	else
	{
		session_start();
		$message= "username or password does not match";
		$_SESSION['loginMessage']=$message;
		header("location:login.php");
	}
}
?>