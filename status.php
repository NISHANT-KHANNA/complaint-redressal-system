<?php 
// include("commonadmin.php");
$host="localhost";
$user="root";
$password="";
$db="complaint";
$conn=mysqli_connect($host,$user,$password,$db);
if ($conn==false)
{
    echo "connection error";
}
$id=$_GET['id'];
$q="UPDATE admin SET action ='SOLVED' WHERE id=$id";
mysqli_query($conn,$q);
header('location:admincomplaint.php');
 ?>