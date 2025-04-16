<?php 
// include("common.php");
$host="localhost";
$user="root";
$password="";
$db="complaint";
$conn=mysqli_connect($host,$user,$password,$db);
if ($conn==false)
{
    echo "connection error";
}

$queryuser="SELECT COUNT(username) as total_users FROM `user` WHERE usertype = 'student'";
$resultuser=mysqli_query($conn,$queryuser);
$rowuser = mysqli_fetch_assoc($resultuser);
$solvedcountuser = $rowuser['total_users'];

$querysolved="SELECT COUNT(action) as solved_cases FROM `admin` WHERE action = 'SOLVED'";
$resultsolved=mysqli_query($conn,$querysolved);
$rowsolved = mysqli_fetch_assoc($resultsolved);
$solvedCount = $rowsolved['solved_cases'];

$querypending="SELECT COUNT(action) as pending_cases FROM `admin` WHERE action = 'PENDING'";
$resultpending=mysqli_query($conn,$querypending);
$rowpending = mysqli_fetch_assoc($resultpending);
$pendingCount = $rowpending['pending_cases'];

?>
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

  <style type="text/css">
     *
   {
      font-family: 'Poppins';
       box-sizing: border-box;
/*       color:#003366;*/
   }
    body
    {
      margin:0;
      padding: 0;
      overflow: hidden;
    }
    
    
    .sidebar a
    {
/*      color:#003366;*/
/*      color:#fbcce1;*/
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
/*      background-color: #bb99ff;*/
      display: block;
      position: absolute;
      top: -5px;
      left: -1px;
      width: 100%;
      transform: translateX(0);
      transition: transform 0.5s linear;
    }
    .container1 input
    {
      right:5%;
      top:35%;
      width:8%;
      height:40%;
      font-size:120%;
      background-color: transparent;
/*      color:#003366;*/
      color:#00264d;
      border:none;
      position:absolute;
      box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
    }
    .container1 h1
    {
      position: relative;
      left: 15%;
      color:#00264d;
/*      color:#003366;*/
/*  color:#daad86;*/
    }
    .container1 input:hover
    {
      /*border: 3px solid #003366;
      color:#003366;
      border-radius: 10px;
      background-color:#ffccff ;*/
      border: 3px solid #fbeec1;
      color:#fbeec1;
      border-radius: 10px;
      background-color:#bc986a;
    }

    .container2
    {   
/*      background-color: lightgreen;*/
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
      overflow: auto;
/*      background-color:#bb99ff;*/
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
      color: #00264d;
/*      font-weight: 600;*/
/*      color:#00264d;*/
    
    }
    .sidebar a:hover
    {
/*      color:#e60099;*/
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
/*  background: linear-gradient(90deg,#9966ff 0%,#cc99ff 80%,#ffccff 100%);*/
/*    background:linear-gradient(50deg,#274759 30%,#659dbd 90%,#274759 100%); */
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
      width: 60%;
      height:60%;
      margin-top:15%;
    }
    .sidebar h1
    {
/*      background-color: red;*/
      margin-top: -20%;
      font-size: 200%;
/*      background:linear-gradient(90deg,#003366 10%,#e600e6 100%);*/
/*background:linear-gradient(90deg,#bc986a 10%,#fbcce1 100%);
      -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;*/
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
            <form >
              <div class="scroll">
              <canvas id="myChart1" style="position:absolute;left:5%;width:100%;max-width:600px;"></canvas>
              <canvas id="myChart2" style="position:absolute;right:5%;width:100%;max-width:600px;"></canvas><br>
              <!-- <canvas id="myChart3" style="position:absolute;top:400px;left:500px;width:100%;max-width:600px;"></canvas><br> -->
              </div>
                 </form>
        </div>
    <script type="text/javascript">
      <?php 
echo"var yValues = ['".$solvedCount."', '".$pendingCount."'];";
 ?>


var xValues = ["Solved","Pending"];
var barColors = [
  "#bc986a",
  "#fbeec1"
  
];

new Chart("myChart1", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
       
      data: yValues,
      }]
         
  },
  options: {
    title: {
      display: true,
      fontSize:20,
fontColor: 'white',
      
      text: "Total no. of solved and pending cases"
      
    },
   
  }
});

<?php 
echo"var yValues = ['".$solvedcountuser."'];";
 ?>
 var xValues = ["Total"];
var barColors = [
  "#1ca1ed"
  
];

new Chart("myChart2", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  
  options: {
    title: {
      display: true,
      fontSize:20,
      fontColor: 'white',
      text: "Total no. of users"
    }
  }
});





   // var nav_button = document.querySelector(".button");
     // var nav_header= document.querySelector(".container1");
      var nav1 = document.getElementById('icon1');
      var nav2 = document.getElementById('icon2');
      var box1=document.querySelector(".container1");
      var box2=document.querySelector(".container2");
      var box3=document.querySelector(".sidebar");
      var box4=document.querySelector("form");
      var box6=document.querySelector(".submit");
       function show1()
       {
          box1.classList.toggle("active");
          box3.style.transform="translateX(0)";
          box1.style.transform="translateX(20%)";
          box2.style.transform="translateX(20%)";
          box4.style.paddingLeft="20%";
          box6.style.right="25%";
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
          box6.style.right="5%";
       }
       
</script>
</body>
</html>