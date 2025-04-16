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
$name=$_SESSION['username'];
$sql="select * from admin where name='".$name."'";
	$result=mysqli_query($conn,$sql);
	$row =mysqli_fetch_array($result);
	$_SESSION['name']=$row['name'];
	$_SESSION['category']=$row['category'];
	$_SESSION['type']=$row['type'];
	$_SESSION['complaint']=$row['complaint'];
	$_SESSION['action']=$row['action'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>status</title>
 	<style>
 		#area
		{
			border-radius: 5px;
			font-size:100%;
/*			margin-top:2%;*/
			color:#004d4d;
			background-color: #cce6ff;
			margin-left:10%;
			width: 50%;
			height: 40%x;
			font-weight:400;
		}
		form
		{
			background-color: #00264d;
			padding-left:30%;
			padding-top:5%;
			padding-right:7%;
			padding-bottom: 5%;
			color:white;
			font-size: 17px;
			width: 100%;
			height: 100%;

		}
		form h1
		{
			position: absolute;
			left: 0px;
            right: 0px;
			text-align: center;
		}
        
 	</style>
 </head>
 <body>
    <div class="container2">
    	
    <form method="post">
    	<?php 
           if (mysqli_num_rows($result) == 0) {
               echo "<h1> No Complaints Yet </h1>";
           } else {
               ?>
        <label>Room No.:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input class="txt" type="text" name="room" value="<?php echo $_SESSION['name']; ?>"><br><br>

        <label>Category: </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input class="txt" type="text" name="category" value="<?php echo $_SESSION['category']; ?>"><br><br>

        <label>Complaint type:</label>&nbsp
        <input class="txt" type="text" name="type" value="<?php echo $_SESSION['type']; ?>"><br><br>

        <label>Complaint:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" class="txt" name="complaint" value="<?php echo $_SESSION['complaint']; ?>"><br><br>

        <label>Status:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input class="txt" type="text" name="status" value="<?php echo $_SESSION['action']; ?>"><br><br>
    </form>
    <?php
}
?>

</div>

 </body>
 </html>