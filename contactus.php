<?php
require 'connection.php';
$user_id=$_COOKIE['User_Id'];

if (isset($_POST['button1'])) {
    unset($_COOKIE['User_Id']);
    setcookie("User_Id", null, -1, '/');
    header("Location:registration.php");
}

?>

<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        #one{
            width:50%;
            height:95%;
        float:left;
        background: url(assets/last_background.jpg) no-repeat center center/cover;
        }
        #one h1{
            color:white;
            text-align:center;
            margin-top:35%;
            padding: 10px;
        }
        #one img{
            height:100%;
            width:100%;
        }
        #two{
            width:50%;
            height:98%;
            float:left;
            
        }
        #two-in{
margin: auto;
  width: 80%;
  border: 3px solid #800080;
  padding: 10px;
  height:90%;
        }
        #two h1{
            text-align:center;
            font-size:50px;
          
        }
        #two form{
            text-align:center;
        }
        #two input{
            text-align:center;  

        }
        #Login-button {
            border: none;
            background-repeat: no-repeat;
            background-size: 95% 90%;
            background-position: center;
            color: white;
            height: 30px;
            width: 40%;
            margin-top: 10px;
        }
        .input-field1 {
            width: 80%;
            padding: 10px 5px;
            margin-top: 10px;
            border-top: 0;
            border-left: 0;
            border-right: 0;
            border-bottom: 1px solid #999;
            outline: none;
            border-radius: 10px;
            background: transparent;
            background-color: #9a9a9a3b;
            margin-bottom:20px;

        }
        #message{
            height:150px;
        }


        #Login-button {
            border: none;
            background-image: url("assets/bgspacebutton.jpg");
            background-repeat: no-repeat;
            background-size: 95% 90%;
            background-position: center;
            color: white;
            height: 50px;
            width: 40%;
            margin-top: 10px;
        }

    #logoutbutton {
        color: wheat;
        height: 20px;
        width: 180px;
        border-radius: 15px;
        border: 0px;
        font-size: 20px;
        background-color: #ff7878;
        background-image: linear-gradient(315deg, #ff7878 0%, #ff0000 74%);

    }

    
    @media screen and (max-width: 970px) {
        #one{
            width:100%;
        height:700px;
    }
            #two{
            width:100%;
            height:700px;
        margin-top:20px;}
    }

    </style>
</head>
<body>
    <div id="one">
<h1>
If you have questions or just <br> want to get in touch, use the  <br> form below. We look forward to <br> hearing from you.
</h1>
</div>
<div id="two">
    <div id="two-in">
<h1>Contact Us</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <input type="text" class="input-field1" placeholder="Name" name="name" id="name" required><br>
                <input type="number" class="input-field1" placeholder="Phone Number" name="phone" id="phone" required><br>
                <textarea class="input-field1" placeholder="Your Message" name="message" id="message" required>
    </textarea><br>
                <br>
                <input type="submit" class="submit-btn" name="submit" value="Send" style="margin-bottom: 10px;" id="Login-button"></input>
                
            </form>
</div>
    </div>
    <div class="logout">
                        <form method="post">
                            <input type="submit" name="button1" class="button" value="Logout" id="logoutbutton" />
                        </form>
                    </div>
</body>
    </html>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $phone = $message = "";
        if (empty($_POST["name"])) {
            $phoneerr = "phone is required";
        } else {
            $phone = $_POST["phone"];
        }
        if (empty($_POST["message"])) {
            $messageerr = "message is required";
        } else {
            $message = $_POST["message"];
        }
        if ($phone != null && $message != null) {
        if (mysqli_query($connect, "UPDATE users  SET Phone = '$phone',Suggestions='$message' WHERE User_Id = user_id") ){
            $alert="Your response have been recorded";
           
            header("Location:contactus.php");
            echo "<script type='text/javascript'>alert('$alert');</script>";
                }
            } else {
                echo "Error occured in entering username or email.<br> Please Try again.<br><a href='registration.php'>Back</a>";
                header("Location:registration.php");
            }
        }
