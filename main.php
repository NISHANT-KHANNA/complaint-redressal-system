<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Complaint Management System</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap">
<link rel="icon" href="https://cdn-icons-png.flaticon.com/128/7867/7867551.png" type="photos/png">
<style>
  body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background: url('') no-repeat center center fixed;
    background-size: cover;
    height: 100vh;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
 header {
    background: linear-gradient(to bottom, #00a8cc, #007bff);
    color: white;
    padding: 20px;
    text-align: center;
/*    position: relative;*/
    overflow: hidden;
  }

  header::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.1);
    clip-path: polygon(0 0, 100% 0, 100% 80%, 0 100%);
  }
  nav {
    background-color: black;
   z-index: 1000;
    padding: 10px 0px;
    text-align: center;
  }
  nav a{
    color:orange;
    padding:10px;
    text-decoration: none;
  }
  nav a:hover
  {
    color:ghostwhite;
  }

 /* h2 {
    color: white;
    margin-bottom: 20px;
    font-size: 24px;
  }*/

  p {
    color: white;
/*    margin-bottom: 20px;*/
    line-height: 1.6;
  }

  .buttons {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
  }

  .button {
    margin: 0 10px;
    padding: 12px 30px;
    background: linear-gradient(to bottom, #00a8cc, #007bff);
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: transform 0.3s ease, background-color 0.3s ease;
  }

  .button:hover {
    background-color: #0056b3;
    transform: scale(1.05);
  }

  footer {
    background: linear-gradient(to bottom, #00a8cc, #007bff);
    color: white;
    padding: 5px;
    text-align: center;
    font-size:90%;
  
  }
  .main_bg
    {
      background:url("https://images.collegedunia.com/public/college_data/images/appImage/13655_GNDEC_APP.jpg" );
      background-repeat: no-repeat;
      width: 100%;
      height: calc(100% - 100px);
     /* filter: blur(2px);
      -webkit-filter: blur(2px);*/
      background-position: center;
      background-size: 100% 100%;
    }
.main_content
    {
  color: white;
/*  font-weight: bold;*/
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 60%;
  padding: 20px;
  text-align: center;
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4);/*Black w/opacity/see-through */
      
    }
    img{
      width:40%;
      height:40%;
      float:right;
      display:flex;
    }
    h1
    {
      font-size: 30px;
    }
    h2
    {
      font-size: 25px;
/*      padding-bottom: 20px;*/
    }
   @media (max-width:785px)
   {
      h1
      {
        font-size: 20px;
      }
      h2
      {
        font-size: 15px;
      }
   }
   @media (max-width:515px)
   {
      h1
      {
        font-size: 15px;
      }
      h2
      {
        font-size: 10px;
      }
   }
    @media (max-width:378px)
   {
      .main_content
      {
         top: 52%;
         height: 50%;
         font-size: 15px;
      }
      .button
      {
         margin-top: -10px;  
         padding: 5px 15px;
         font-size: 12px;
      }
    }
</style>
  </head>
<body>
  <header>
    <h1>GURU NANAK DEV ENGINEERING COLLEGE ,LUDHIANA</h1>
    <h2>COMPLAINT REDRESSAL SYSTEM - HOSTELS</h1>
  </header>

  <nav>
    <a href="main.php">Home</a>
    <a href="about.php">About</a>
    <a href="login.php">User</a>
    <a href="loginadmin.php">Admin</a>
  </nav>
  
  <div class="main_bg"></div>
  <div class="main_content">
    
    <h1>Online Complaint Portal</h1>
    
    <p>Problems do happen everyday. But accepting complaints will provide the necessary solutions about the problems. And, you can easily prevent them from happening in the future. We assure you to provide better solutions for your problems.</p>
    
        
    <div class="cta-buttons">
      <a href="login.php"><button class="button"><b>Register Complaint</b></button></a>
      
      
    </div>
  </div>
  
  <footer>
    <p>&copy; 2023 Guru Nanak Dev Engineering College<br>Designed by:- Nishant Khanna, Milandeep Kaur</p>
  </footer>
</body>
</html>




