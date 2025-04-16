<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <style >
        html
        {
            overflow-y: hidden;
        }
        body
        {
            margin:0;
            padding: 0;
        }

        .main_container
        {
/*            background:linear-gradient(90deg,#b366ff 10%,#db4dff 40%,#ffccff 100%);*/
            background-color: purple;
            height: 100vh;
            display: flex;
            justify-content:space-between;

        }
        .box1
        {
            margin-top: 5%;
            margin-bottom: 5%;
            margin-left: 20%;
            background-color: whitesmoke;
            width: 60%;
            text-align: center;
            padding-top: 10%;
            
        }
        .box2
        {
            margin-top: 5%;
            margin-bottom: 5%;
            margin-right: 20%;
            background-image:url("login.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-size: 100% 100%;
            background-color: black;
            width: 45%;
            display:flex;
            flex-wrap: wrap;
            align-content: center;    
            justify-content: center;
            padding-left:2% ;
            padding-right: 2%;
             
        }
        .box2 p
        {

            text-align: center;
            font-size: 20px;
            
        }
        .login
        {
            width: 100px;
            height: 30px;
            border-radius: 20px;
/*            background-color: #ffccff;*/
            background:linear-gradient(90deg,#b366ff 10%,#db4dff 40%,#ffccff 100%);
            color: whitesmoke;
        }
        .box2 input
        {
            border-radius: 20px;
            border-color: #d699ff;
            background-color:transparent;
            width: 100px;
            height: 30px;

        }
        .input
        {
            border-radius: 5px;
            width: 60%;
            height: 35px;
            font-size: 100%;
            font-weight: 400;
            border: none;

        }
        .input:hover
        {
            border:2px solid  #ffccff;
        }

    </style>
</head>
<body>
    <div class="main_container">
        <div class="box1">
            <h1>Sign In</h1>
            <h4>
                <?php
                error_reporting(0);
                session_start();
                session_destroy();
                echo $_SESSION['loginMessage'];
                ?></h4>


            <form method="post" action="connect.php">
                <input type="text" name="username" placeholder="Account number" required class="input"><br><br>
                <input type="password" name="password" placeholder="Password" required class="input"><br><br>
                <input type="submit" name="login" value="LOGIN" class="login">
            </form>
        </div>
        <div class="box2">
            <h1>Dear, Student!</h1>
            <p>Enter your personal details and start journey with us</p>
            <a href="registeration.php"><input type="submit" name="signup" value="SIGN UP"></a>
        </div>
    </div>
</body>
</html>





