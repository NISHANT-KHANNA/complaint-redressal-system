<?php 
include("common.php");
 ?>
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
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>complaint page</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<style type="text/css">
/*		 *
   {
      font-family: 'Poppins';
       box-sizing: border-box;
   }
		body
		{
			overflow: hidden;
		}
		
		
		.sidebar a
		{
			color:#004d4d;
			text-decoration: none;
			font-size:20px;
		}
		.box
		{
			width:80%;
			height: 100%;
			float: right;
		}*/
		/*.txt
		{
			border-radius: 5px;
			width: 50%;
			height: 35px;
			font-size: 100%;
			font-weight: 400;
			border: none;
			margin-top:10px;
			background-color: #cce6ff;
			color:#004d4d;
		}
		select
		{
			border-radius: 5px;
			color:#00264d;
			width:30%;
			height:5%;
			background-color: #cce6ff;
		}*/
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
		/*.submit
		{
			border-radius:5px;
			width:25%;
			height:25px;
			background-color: transparent;
			color:white;
			border-color:white;
			margin-left:20%;
		}*/
/*		.container1
		{
			background-color:#cce6ff;
			position: absolute;
			top: -5px;
			left: -1px;
			width: 100%;
			transform: translateX(0);
			transition: transform 0.5s linear;
		}
		.container1 h1
		{
			position: relative;
			left: 15%;
		}
		.button
		{
			position: absolute;
			top: 15%;
			left: 1%;
		}
		.sidebar
		{
			display:grid;
			text-align: center;
			padding-top:10%;
         z-index: 1000;
			width:20%;
			height:100%;
			overflow: auto;
			background-color:#99ccff;
			position: absolute;
			top: -2px;
			left: -1px;
			transform: translateX(-380px);
			transition: transform 0.5s linear;
		}*/
		/*.container2
		{
			
		
			position: absolute;
			top: 85px;
			left: -1px;
			width: 100%;
			height: 100%;
			transform: translateX(0);
			transition: transform 0.5s linear;
		}*/
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



/*.active .container1
   {
      transform: translateX(400px);
      transition: all 0.5s linear;
      opacity: 1;
      visibility: visible;
      pointer-events: auto;
      overflow-x: hidden;
   }*/
/*   .active #icon1
   {
      display: none;
   }
   .active #icon2
   {
      display: block;

   }
#icon2
{
	display: none;
}
*/



	</style>
</head>
<body>
<!-- 	<div class="container1">
	<div class="button">
        <i class="fa fa-bars" id="icon1" onclick="show1()"></i> 
        <i class="fa fa-close" id="icon2" onclick="show2()"></i> 
     </div>
	<h1>Student Dashboard</h1>
    </div>
    <div class="sidebar">
		<a href="#">Profile</a>
  		<a href="#">Lodge Complaint</a>
  		<a href="#">Complaint history</a>
  	</div>
  	</div> -->
	<div class="container2">
    <form method="post">
    	<label>Name:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    	<input class="txt" type="text" name="name" value="<?php echo $_SESSION['username']; ?>" placeholder="Enter your name" required><br>

		<label>URN:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    	<input class="txt" type="number" name="urn"  value="<?php echo $_SESSION['urn']; ?>" placeholder="Enter your U.R.N." required><br>

    	<label>Room No.:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    	<input class="txt" type="number" name="room" placeholder="Enter your room no." required><br><br>
     	<label>Category: </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    	<select value="category" name="category">
    		<option hidden>Select Option</option>
    		<option>Electrical Appliances</option>
    		<option>Water Supply</option>
    		<option>Carpentry</option>
    		<option>Sanitation</option>
    		<option>Other</option>
		</select><br><br>
    			
		<label>Complaint type:</label>
		<select value="complaint type" name="type">
    		<option hidden>Select Option</option>
    		<option>Complaint</option>
    		<option>General Enquiry</option>
		</select><br><br>
    			
		<label>Complaint:</label><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<textarea id="area" name="complaint" rows="6" cols="60" placeholder="write your complaint.max words(250)"></textarea><br><br>
		<input class="submit" type="submit" name="submit" value="Lodge">
    			
    </form>
</div>
<!-- <script type="text/javascript">
	 // var nav_button = document.querySelector(".button");
     // var nav_header= document.querySelector(".container1");
	    var nav1 = document.getElementById('icon1');
	    var nav2 = document.getElementById('icon2');
	    var box1=document.querySelector(".container1");
	    var box2=document.querySelector(".container2");
	    var box3=document.querySelector(".sidebar");
	    var box4=document.querySelector("form");
       function show1()
       {
          box1.classList.toggle("active");
          box3.style.transform="translateX(0)";
          box1.style.transform="translateX(20%)";
          box2.style.transform="translateX(20%)";
          box4.style.paddingLeft="20%";

          // box1.style.marginLeft="20%";
          // box2.style.marginLeft="20%";
          // bo3.style.Transition:" transform 0.5s linear";     
       }
       function show2()
       {
          box1.classList.toggle("active");
          box3.style.transform="translateX(-380px)";
          box1.style.transform="translateX(0%)";
          box2.style.transform="translateX(0%)";
          box4.style.paddingLeft="30%";
       }
       
</script> -->
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
	$name= $_POST['name'];
	$urn= $_POST['urn'];
	$room= $_POST['room'];
	$category= $_POST['category'];
	$type= $_POST['type'];
	$complaint= $_POST['complaint'];
   $indate = date("Y-m-d");

   $sql="SELECT * FROM admin";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result) == 0)
   {
   	$query = "INSERT INTO admin(name,urn,room,category,type,complaint,action,indate) VALUES('$name','$urn','$room','$category','$type','$complaint','PENDING','$indate')";
	mysqli_query($conn, $query );
    echo "
    <script>
         alert('Complaint Filed Successfully. Please be patient and co-operate with us.Your issue will be solved shortly.');
    </script>
    ";
   }
   else
   {
   	$sql2="select * from admin where name='".$name."' AND urn='".$urn."'";
	   $result2=mysqli_query($conn,$sql2);
	   if(mysqli_num_rows($result2) == 0)
          {
               $query = "INSERT INTO admin(name,urn,room,category,type,complaint,action,indate) VALUES('$name','$urn','$room','$category','$type','$complaint','PENDING','$indate')";
	            mysqli_query($conn, $query );
               echo "
               <script>
                    alert('Complaint Filed Successfully. Please be patient and co-operate with us.Your issue will be solved shortly.');
               </script>
               ";
          }
          else
          {
          	$query2 = "UPDATE admin SET category ='$category' , type = '$type' , complaint = '$complaint' , action = 'PENDING',indate ='$indate' WHERE urn='$urn'";
          	if(mysqli_query($conn, $query2 ))
          	{
          		echo "
               <script>
                    alert('Complaint Filed Successfully. Please be patient and co-operate with us.Your issue will be solved shortly.');
               </script>
               ";
          	}
          }
   }
	
}

?>