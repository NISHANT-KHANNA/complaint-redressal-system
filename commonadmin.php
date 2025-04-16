<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <title>common page</title> -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<style type="text/css">
		 *
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
		}


		.container1
		{
			background-color:#cce6ff;
			display: block;
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
			color:#00264d;
		}
		.container2
		{		
/*			background-color: lightgreen;*/
			position: absolute;
			top: 85px;
			left: -1px;
			width: 100%;
			height: 100%;
			transform: translateX(0);
			transition: transform 0.5s linear;
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
			text-align:center;
			justify-items: center;
         z-index: 1000;
			width:20%;
			height:100%;
			color:#00264d;
			overflow: auto;
			background-color:#99ccff;
			position: absolute;
			top: -1px;
			left: -1px;
			transform: translateX(-380px);
			transition: transform 0.5s linear;
			
		}
		.sidebar input
		{
			width: 50%;
			background-color: transparent;
			height: 50%;
			border-radius:5px;
			border:none;
			color:#00264d;
		
		}
		.active #icon1
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
	.txt
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
		}
.submit
		{
			border-radius:5px;
			width:25%;
			height:25px;
			background-color: transparent;
			color:white;
			border-color:white;
			margin-left:20%;
		}
		img
		{
			width: 80%;
			height:80%;
		}
		.sidebar h1
		{
/*			background-color: red;*/
			margin-top: -30%;
		}
		.container1 input
		{
			right:5%;
			top:35%;
			width:8%;
			height:40%;
			font-size:120%;
			background-color: transparent;
			color:#00264d;
			border:none;
			position:absolute;
		}
		.container1 input:hover
		{
			border: 3px solid #00264d;
			color:darkred;
			border-radius: 10px;
		}

</style>
</head>
<body>
	<div class="container1">
	<div class="button">
        <i class="fa fa-bars" id="icon1" onclick="show1()"></i> 
        <i class="fa fa-close" id="icon2" onclick="show2()"></i> 
     </div>
    	
    	<h1>Admin Dashboard</h1>
    	<a href="logout.php"><input type="submit" name="submit" value="Logout"></a>
   </div>

    <div class="sidebar">
    	<img src="user1.png">
    	<h1>Hello! Name</h1>
		<a href="adminprofile.php">User List</a>
  		<a href="admincomplaint.php">Complaints</a>
  		<a href="stats.php">Complaint Stats</a>
  		<a href="logout.php"><input class="logout" type="submit" name="submit" value="Logout"></a>
  	</div>
  	
<div class="container2">
	<form>
		
	</form>
</div>
  	<script type="text/javascript">
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
       
</script>
</body>
</html>