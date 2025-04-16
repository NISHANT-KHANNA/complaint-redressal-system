<?php 
$host="localhost";
$user="root";
$password="";
$db="complaint";
$data=mysqli_connect($host,$user,$password,$db);
$id=$_GET['id'];
    $query="select * from admin where id=$id ";
    $result1=mysqli_query($data,$query);
    $row1=mysqli_fetch_assoc($result1);
    // header('location:admincomplaint.php');
    // session_start();
 ?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sample</title>
<style type="text/css">
     body
    {
         background:linear-gradient(55deg, #00264d 0%,#99ccff 100% );
         background-repeat: no-repeat;
         height:95vh;
         overflow-y: hidden;
    }
     .form1 input
    {
        font-size: 18px;
        width:70%;
        border-radius:5px;
        color:#00264d;
        background-color:ghostwhite;
    }
    
    .form1 input:hover
    {
        color:#00264d;
        background-color:#99ccff;
    }
    .form1{
        margin-top:10%;
        margin-bottom:10%;
        margin-right:15%;
        margin-left:15%;
        padding: 5% 10%;
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0, 0.4);/*Black w/opacity/see-through */
      color:;

        font-size: 18px;
        
            }
    
    textarea
    {
        width: 50%;
        color:#00004d;
    }
     .submit
    {
        margin-left: 150px;
        margin-right:150px;
        padding: 5px;
        width: 60%;
        border-radius: 5px;

    }
    .submit:hover
    {
        background-color:#99ccff;
        border:none;
    }
    label
    {
        font-size:20px;
        color:ghostwhite;
    }
    label:hover
    {
        color:#99ccff;
    }

</style>
</head>
<body>
 <form class="form1" method="post">
            
    <label>Room No. :</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="number" name="" value="<?php echo $row1['room'];?>"><br><br>
    <label>Category :</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" name="" value="<?php echo $row1['category'];?>"><br><br>
    <label>Complaint Type :</label>
    <input type="text" name="" value="<?php echo $row1['type'];?>"><br><br>
    <label>Complaint :</label><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <!-- <textarea name="complaint" rows="6" cols="60" value="<?php echo $row1['complaint'];?>"></textarea><br> -->
        <input type="text" name="" value="<?php echo $row1['complaint'];?>"><br><br>

    <button class="submit" name="submit">Seen</button>
    <button class="submit" name="download">Download</button>
 
        </form>
</body>
</html>
<?php 
   if (isset($_POST['submit'])) 
   {
     $outdate = date("Y-m-d");
      $q="UPDATE admin SET action ='SEEN', outdate ='$outdate' WHERE id=$id";
      mysqli_query($data,$q);
      header('location:admincomplaint.php');
   }
    if (isset($_POST['download'])) 
   {
      header('location:generate.php');
   }
 ?>