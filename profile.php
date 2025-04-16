<?php 
$host="localhost";
$user="root";
$password="";
$db="complaint";
$conn=mysqli_connect($host,$user,$password,$db);
if ($conn==false)
{
	echo "connection error";
}

include("common.php");
error_reporting(0);
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>profile</title>
	<style type="text/css">
		
		form input
		{
			width: 50%;
			height: 35px;
			font-size: 100%;
			font-weight: 400;
			border: none;
			margin-top:10px;
			background-color: #cce6ff;
			color:#004d4d;
			border-radius: 5px;
		}
		.sub
		{
			width:20%;
			margin-left:10%;
			margin-top:3%;
			border-radius:5px;

		}

	</style>

</head>
<body>

	<div class="container2">
   <form method="post">
   	<label>Name:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   	<input type="text"name="name" placeholder="Enter your name" value="<?php echo $_SESSION['username']; ?>" required><br>
   	<label>University Roll Number:</label>&nbsp&nbsp&nbsp&nbsp
   	<input type="number" name="urn" placeholder="Enter your university roll number" value="<?php echo $_SESSION['urn']; ?>" required><br>
   	<label>Mess Account Number:</label>&nbsp&nbsp&nbsp
   	<input type="number" name="mess" placeholder="Enter your mess account number" value="<?php echo $_SESSION['mess']; ?>" required><br>
   	<label>Email:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   	<input type="email" name="email" placeholder="Enter your email ID" value="<?php echo $_SESSION['email']; ?>" required><br>
   	<label>Contact:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   	<input type="phone" name="contact" placeholder="Enter your contact number" value="<?php echo $_SESSION['contact']; ?>" required><br>
   	<label>Gender:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   	<input type="text" name="gender" placeholder="Enter your gender" value="<?php echo $_SESSION['gender']; ?>" required><br>
   	<input class="sub" type="reset" name="reset" value="Reset">
   	<input class="sub" type="submit" name="submit" value="Submit">
   </form>
   </div>
</body>
</html>
<?php 
$urn=$_SESSION['urn'];
if(isset($_POST['submit']))
{
   $email= $_POST['email'];
   $contact= $_POST['contact'];
   $gender= $_POST['gender'];
   $query = "UPDATE user SET email ='$email' , contact = '$contact' , gender = '$gender' WHERE urn='$urn'";
          	if(mysqli_query($conn, $query ))
          	{
          		echo "
               <script>
                    alert('data updated successfully');
               </script>
               ";
          	}
}
	$sql="select * from user where urn='".$urn."'";
	$result=mysqli_query($conn,$sql);
	$row =mysqli_fetch_array($result);
	$_SESSION['email']=$row['email'];
	$_SESSION['contact']=$row['contact'];
	$_SESSION['gender']=$row['gender'];
?>