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
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registeration page</title>
	<style type="text/css">
		  html
        {
            overflow-y: hidden;
        }
        body
        {
            margin:0;
            padding: 0;
            background-color: purple;
        }

		.main_container
		{
			display: flex;
			justify-content: space-between;
			height: 500px;
			margin-top:120px;
			margin-bottom: 100px;
			margin-left: 20%;
			margin-right: 20%;
/*			background-color: purple;*/
		}
		.box1
		{
			width:50%;
			flex-wrap: wrap;
			padding-top: 140px;
			padding-left: 4px;
			padding-right:4px;
			text-align: center;
			opacity:70%;
			background-repeat: no-repeat;
			background-size: cover;
			background-image:url("https://cdn.pixabay.com/photo/2022/12/01/17/56/bubbles-7629525__340.png")
		}
		.box1 p
		{
			text-align: center;
			font-size:20px;
		}
		.box2
		{
			width: 70%;
			background-color: whitesmoke;
			padding: 45px;
			text-align: center;
		}
		.btn
		{
			border-radius: 20px;
			margin-top:15px;
			width: 100px;
			height:30px;
			color: whitesmoke;
			color:black;

		}
		.box1 button
		{
			border-radius: 20px;
			border-color: #d699ff;
			border-color: black;
			font-weight: 40;
			background-color:transparent;
			width: 100px;
			height: 30px;
		}
		.txtbox
		{
			width:70%;
			height:35px;
			font-size:100%;
			font-weight:400;
			border-radius: 5px;
			border:none;
			margin:7px;
		}
		.txtbox:hover
		{
			border:2px solid  #ffccff;
		}
	</style>
</head>
<body>
<div class="main_container">
	<div class="box1">
		<h1>Welcome Back!</h1>
		<p>To keep connected with us please login with your personal info</p>
		<a href="login.php"><button type="button">SIGN IN</button></a>
	</div>
	<div class="box2">
		<h1 >Create Account</h1>
		<h4>
    		<?php

    		error_reporting(0);
    		session_start();
    		session_destroy();
    		echo $_SESSION['loginMessage'];
    		?>
    	</h4>
		<form method="post">
			<input class="txtbox" type="text" name="username" placeholder="Name" required><br>
			<input class="txtbox" type="text" name="urn" placeholder="University Roll No." required><br>
			<input class="txtbox" type="text" name="mess" placeholder="Mess Account No." required><br>
			<input class="txtbox" type="password" name="password" placeholder="Password" required><br>
			<input class="txtbox" type="text" name="confirmpass" placeholder="Confirm Password" required><br>
			<input class="btn" type="submit"value="Register" name="submit"> &nbsp&nbsp&nbsp&nbsp&nbsp
			<input class="btn" type="reset" name="Reset">
		</form>
	</div>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
	$name= $_POST['username'];
	$urn= $_POST['urn'];
	$mess= $_POST['mess'];
	$password= $_POST['password'];
	$cnfpassword= $_POST['confirmpass'];

	$query = "INSERT INTO user(username,urn,mess,password,confirmpass,usertype) VALUES('$name','$urn','$mess','$password','$cnfpassword','student')";
	mysqli_query($conn, $query );
    echo "
    <script>
         alert('successfully registered.');
    </script>
    ";
    // if($data)
    // {
    // 	echo "data inserted into the database";
    // }
    // else
    // {
    // 	echo "data not inserted";
    // }
}
?>
