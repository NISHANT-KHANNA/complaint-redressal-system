<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us - Complaint Management System</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap">
<style>
  body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background: #111;
    color: #fff;
    height: 100vh;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  header {
   background: linear-gradient(to bottom, #00a8cc, #007bff);
    color: #fff;
    padding: 20px;
    text-align: center;
    position: relative;
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

  .container {
    margin: 30px;
    background-color: rgba(0, 0, 0, 0.7);
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
/*    flex-grow: 1;*/
    overflow-y: auto;
    color: #fff;
    position: relative;
  }

  .shapes-container {
    position: absolute;
    top: -20px;
    left: -20px;
    right: -20px;
    bottom: -20px;
    z-index: -1;
    overflow: hidden;
  }

  h2 {
    color: #fff;
    margin-bottom: 20px;
    font-size: 24px;
  }

  p {
    color: #ccc;
    padding-left:5px;
    padding-right:5px;
    margin-bottom: 20px;
    line-height: 1.6;
  }

  /*.cta-buttons {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
  }

  .cta-button {
    margin: 0 10px;
    padding: 12px 30px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: transform 0.3s ease, background-color 0.3s ease;
  }

  .cta-button:hover {
    background-color: #0056b3;
    transform: scale(1.05);
  }*/

  footer {
   background: linear-gradient(to bottom, #00a8cc, #007bff);
    padding: 5px 0;
    text-align: center;
     font-size:90%;
     color: white;
  }

  .footer-content {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }

  /*.social-icons {
    margin-top: 20px;
  }

  .social-icon {
    font-size: 24px;
    color: #ccc;
    margin: 0 10px;
    transition: color 0.3s ease;
  }

  .social-icon:hover {
    color: #007bff;
  }*/
  
  .about-section {
    background-color: #292b2c;
    padding: 50px 0;
    text-align: center;
  }
  
  .about-heading {
    font-size: 32px;
    color: #fff;
    margin-bottom: 20px;
  }
  
  .about-content {
    color: #ccc;
    line-height: 1.6;
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
</style>
</head>
<body>
  <header>
     <h1>GURU NANAK DEV ENGINEERING COLLEGE ,LUDHIANA</h1>
    <h2>COMPLAINT REDRESSAL SYSTEM - HOSTELS</h1>
  </header>

  <nav>
    <a href="main.php">HOME</a>
    <a href="about.php">ABOUT</a>
    <a href="login.php">USER</a>
    <a href="loginadmin.php">ADMIN</a>

  </nav>
  
  <div class="container">
    <!-- <div class="shapes-container">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1a2533" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,154.7C384,128,480,96,576,90.7C672,85,768,107,864,122.7C960,139,1056,149,1152,160C1248,171,1344,181,1392,186.7L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    </div> -->
    <div class="about-section">
      <h2 class="about-heading">About Us</h2>
      <p class="about-content">A complaint management system is essential as it serves as a structured and efficient mechanism for addressing and resolving one's grievances and concerns. </p>
      <p class="about-content">It helps improve one's satisfaction by providing a centralized platform to report issues and receive timely responses.</p>
      <p class="about-content">This Complaint Redressal System is designed to facilitate the students by providing an online platform to register their complaints regarding any hostel problem that is being faced by them  which can be related to infrastructure, electrical appliances, water supply, sanitation or any other. The authorities assure you to resolve your issue as soon as possible. We only need patience and co-operation from the students .</p>
    </div>
    
    
  </div>
  
  <footer>
    <div class="footer-content">
      <p>&copy; 2023 Guru Nanak Dev Engineering College<br>Designed by:- Nishant Khanna, Milandeep Kaur</p>
      
    </div>
  </footer>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>