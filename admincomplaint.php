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
$query="select * from admin ";
$result=mysqli_query($conn,$query);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style type="text/css">
         *
   {
      font-family: 'Poppins';
       box-sizing: border-box;
       color:#003366;
   }
        body
        {
            margin:0;
            padding:0;
            overflow: hidden;
        }
        
        
        .sidebar a
        {
/*            color:#003366;*/
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
/*          background-color: lightgreen;*/
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
            color:#00264d;
            text-align:center;
            justify-items: center;
            z-index: 1000;
            width:20%;
            height:100%;
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
            height: 50vh;
            color:#00264d;
            border-radius:5px;
            border:none;
        
        }
        .sidebar a:hover
        {
/*            color:#e60099;*/
          color:#bc986a;
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
        padding-top:50px;
        font-size: 17px;
        width: 100%;
        height: 100%;
        color:white;
        
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
            color:#004d4d;}
        select
        {
            border-radius: 5px;
           color:#00264d;
            width:30%;
            height:5%;
            background-color: #cce6ff;
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
            box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
        }
        .container1 input:hover
        {
            border: 3px solid #00264d;
            color:darkred;
            border-radius: 10px;
        }
        img
        {
            width: 60%;
            height:60%;
            margin-top:15%;
        }
        .sidebar h1
        {
/*          background-color: red;*/
            margin-top: -20%;
            font-size: 200%;
/*            background:linear-gradient(90deg,#003366 10%,#e600e6 100%);*/
/*background:linear-gradient(90deg,#bc986a 10%,#fbcce1 100%);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;*/
        }




   table,td,th
        {
/*            border: 3px solid #003366;*/
border: 3px solid #274759;
            border-collapse: collapse;
            text-align: center;
            margin-left:50px;
            margin-right:50px;
            padding:5px;

        }
        th
        {
/*            background-color:#a366ff ;*/
background-color:#bc986a;
        }
        td:hover
        {
/*            background-color:#a366ff;*/
background-color:#bc986a;
        }
        td
        {
/*             background-color:#cc99ff;*/
 background-color:#fbeec1;
        }
        .w1{
            width:4%;
        }
        .w2{
            width:4%;
        }
        .scroll
        {
            height: 70%;
            width: 95%;
            position: absolute;
            left: 50px;
            overflow-y: auto;
            transition: overflow-y 0.5s linear;
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
        <a href="main.php"><input type="submit" name="submit" value="Logout" class="submit"></a>
   </div>

    <div class="sidebar">
        <img src="admin.png">
        <h1>Hello Admin!</h1>
        <a href="adminprofile.php">User List</a>
        <a href="admincomplaint.php">Complaints</a>
        <a href="stats.php">Complaint Stats</a>
    </div>

 	<div class="container2">
      
 		<form method="post">
            <div class="scroll">
 		<table>
 			<tr>
 				<!-- <th  class="w1">ID</th> -->
                <th  class="w1">Name</th>
 				<th  class="w1">URN</th>
                <th  class="w1">Details</th>
                <th class="w2">Action</th>
 			</tr>
 			<tr>
                <?php
                while($row=mysqli_fetch_assoc($result))
                {
                ?>
                <!-- <td><?php echo $row['id'];?></td> -->
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['urn'];?></td>
                <td><a href="display.php?id=<?php echo $row['id'];?>"><i class="fa fa-edit"></i></a></td>
                <td><a href="status.php?id=<?php echo $row['id'];?>"><i class="fa fa-check-square-o" style="color:red" id="icon" onclick="change()" ></i></a></td>

               <!--  <td><?php echo $row['room'];?></td>
                <td><?php echo $row['category'];?></td>
                <td><?php echo $row['type'];?></td>
                <td><?php echo $row['complaint'];?></td> -->  
                <!-- <td><input type="checkbox" name=""></td> -->

                
            </tr>
            <?php
                }
            ?>
 			
 		</table>
    </div>
 	</form>
   
 	</div>
    <script type="text/javascript">
     // var nav_button = document.querySelector(".button");
     // var nav_header= document.querySelector(".container1");
        var nav1=document.getElementById('icon1');
        var nav2=document.getElementById('icon2');
        var box1=document.querySelector(".container1");
        var box2=document.querySelector(".container2");
        var box3=document.querySelector(".sidebar");
        var box4=document.querySelector("form");
        var box5=document.querySelector("table");
        var box6=document.querySelector(".submit");
        var box7=document.querySelector(".scroll");
        // var box6=document.querySelector("th");
       function show1()
       {
          box1.classList.toggle("active");
          box3.style.transform="translateX(0)";
          box1.style.transform="translateX(20%)";
          box2.style.transform="translateX(20%)";
          // box4.style.paddingLeft="350px";
          box7.style.width="75%";
          box6.style.right="25%";   
       }
       function show2()
       {
          box1.classList.toggle("active");
          box3.style.transform="translateX(-380px)";
          box1.style.transform="translateX(0%)";
          box2.style.transform="translateX(0%)";
          box4.style.paddingLeft="450px";
          box4.style.paddingRight="0px";
          box6.style.right="5%";
          box7.style.width="95%";
       }
       
</script>
 </body>
 </html>



















<!-- </head>
<body>
  <form>
    <label>Room No. :</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="number" name=""><br><br>
    <label>Category :</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" name=""><br><br>
    <label>Complaint Type :</label>
    <input type="text" name=""><br><br>
    <label>Complaint :</label><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <textarea name="complaint" rows="6" cols="60"></textarea><br>
    <button class="submit" name="submit">Seen</button>
  </form> 
</body>
</html> -->