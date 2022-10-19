<?php require 'connection.php' ?>

<?php
if (!empty($_COOKIE['User_Id'])) {
    echo ("<script>
    location.href = link+`/gameCardSelector/marketType.php?market=Stock`;    
    </script>");
}

?>
<?php
if (!empty($_COOKIE['DatabaseErrorRegister'])) {
    echo ("<script>alert('System Error');</script>");
    unset($_COOKIE['DatabaseErrorRegister']);
    setcookie("DatabaseErrorRegister", null, -1, '/');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title></title>
    <style type="text/css">
        #wall1 {
            height: 600px;
            width: 50%;
            background: url(assets/bgspace.jpg) no-repeat center center/cover;
            float: left;
            text-align: center;
            overflow: hidden;
        }

        #sign-up-heading {
            width: 100%;
            margin-top: 100px;
            font-size: 60px;
            text-align: center;
            color: white;
        }

        #sign-in-heading2 {
            margin-left: 5%;
            margin-top: 30px;
            font-size: 60px;
        }

        #login {
            opacity: 0;
            height: auto;
            width: 40%;
            margin-top: 20px;
            margin-left: 200px;
            text-align: center;
            background-color: white;
            border-radius: 25px;
            border: 3px solid #171077;
        }

        #sign-up {
            margin-top: 30px;
            width: 100%;
            text-align: center;
        }

        #sign-in h4 {
            font-size: 20px;
            margin-top: -20px;
        }

        #Login-button {
            border: none;
            background-image: url("assets/bgspacebutton.jpg");
            background-repeat: no-repeat;
            background-size: 95% 90%;
            background-position: center;
            color: white;
            height: 30px;
            width: 40%;
            margin-top: 10px;
        }

        @media screen and (max-width: 1000px) {
            #Login-button {
                width: 35%;

            }
        }



        #wall2 {
            height: 600px;
            width: 49.9%;

            float: left;
            overflow: hidden;

        }

        #sign-in-heading {
            width: 100%;
            font-size: 0px;
            text-align: center;
            color: white;
        }

        #sign-up-heading2 {
            margin-top: -55px;
            margin-left: 5%;
            font-size: 0px;
            text-align: center;
        }


        #register {
            height: auto;
            width: 40%;
            margin-top: 50px;
            margin-left: 200px;
            text-align: center;
            background-color: white;
            border-radius: 25px;
            border: 3px solid #171077;
        }

        #Register-button {
            border: none;
            background-image: url("assets/bgspacebutton.jpg");
            background-repeat: no-repeat;
            background-size: 95% 90%;
            background-position: center;
            color: white;
            height: 30px;
            width: 40%;
        }

        @media screen and (max-width: 1000px) {
            #Register-button {
                width: 35%;

            }
        }

        #sign-in {
            opacity: 0;
            width: 100%;
            text-align: center;
            margin-top: 100px;
        }

        #sign-in h4 {
            font-size: 0px;
        }

        #sign-in button {
            border: none;
            background-color: white;
            color: #171077;
            height: 30px;
            width: 20%;
            border-radius: 10px;

        }

        #sign-up h4 {
            font-size: 0px;
        }

        #sign-up button {
            border: none;
            background-color: white;
            color: #171077;
            height: 30px;
            width: 20%;
            border-radius: 10px;
        }

        @media (max-width:1200px) and (min-width:1000px) {
            #register {
                width: 50%;
                margin-left: 135px;
                margin-top: 25px;

            }
        }

        @media screen and (max-width: 1000px) {
            body {
                margin: 0;
                padding: 0;
                background: url(assets/bgspace.jpg) no-repeat center center/cover;
            }

            #wall1 {
                height: 100%;
                width: 0;
                position: absolute;
            }

            #login {
                width: 45%;
                margin-top: 50px;
                margin-left: 28%;
                opacity: 1;
            }

            #sign-in-heading2 {
                margin-top: 30px;
                font-size: 50px;
                text-align: center;
                color: white;
            }

            #sign-in-heading {
                font-size: 0;
            }

            #sign-in {
                opacity: 1;
                width: 100%;
                text-align: center;
                margin-top: 40px;
            }

            #wall2 {
                height: 100%;
                background: url(assets/bgspace.jpg) no-repeat center center/cover;
                width: 100%;
                position: relative;

            }

            #register {
                width: 45%;

                margin-top: 10px;
                margin-left: 27%;
            }

            #sign-up-heading2 {
                text-align: center;
                margin-top: 30px;
                font-size: 50px;

                color: white;
            }

            #sign-up-heading {
                font-size: 0;

                margin-top: 30px;
            }

            #sign-in h4 {
                font-size: 20px;
            }

            #sign-up h4 {
                font-size: 20px;
            }


        }



        @media screen and (max-width: 750px) {

            #wall1 {
                /*height: 630px;*/
                width: 0;
                position: absolute;
            }

            #login {
                width: 50%;
                margin-top: 50px;
                margin-left: 25%;
                opacity: 1;
            }

            #wall2 {
                /*height: 630px;*/
                background: url(assets/bgspace.jpg) no-repeat center center/cover;
                width: 100%;
                position: relative;

            }

            #register {
                width: 50%;

                margin-top: 10px;
                margin-left: 27%;
            }

        }



        @media screen and (max-width: 480px) {
            #wall1 {
                /*height: 630px;*/
                width: 0;
                position: absolute;
            }

            #login {
                width: 70%;
                margin-top: 50px;
                margin-left: 15%;
                opacity: 1;
            }

            #wall2 {
                /*height: 100%;*/
                background: url(assets/bgspace.jpg) no-repeat center center/cover;
                width: 100%;
                position: relative;

            }

            #register {
                width: 70%;

                margin-top: 10px;
                margin-left: 15%;
            }

        }

        .input-field {
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

        }

        .check-box {
            margin: 15px 10px 15px 0;
        }

        .socialsignin {
            display: flex;
        }

        .g-signin2 {
            float: right;
            padding: 30px;
        }

        :root {
            --color-light: white;
            --color-dark: #212121;
            --color-signal: #fab700;
            --color-background: var(--color-light);
            --color-text: var(--color-dark);
            --color-accent: var(--color-signal);
            --size-bezel: .5rem;
            --size-radius: 4px;

        }


        .l-design-widht {
            max-width: 40rem;
            padding: 1rem;
        }

        .input {
            position: relative;
        }

        .input__label {
            position: absolute;
            left: 0;
            top: 0;
            padding: calc(var(--size-bezel) * 0.75) calc(var(--size-bezel) * .5);
            margin: calc(var(--size-bezel) * 0.75 + 3px) calc(var(--size-bezel) * .5);
            background: pink;
            white-space: nowrap;
            transform: translate(0, 0);
            transform-origin: 0 0;
            background: var(--color-background);
            transition: transform 120ms ease-in;
            font-weight: bold;
            line-height: 1.2;
        }

        .input__field {
            box-sizing: border-box;
            display: block;
            width: 100%;
            border: 3px solid currentColor;
            padding: calc(var(--size-bezel) * 1.5) var(--size-bezel);
            color: currentColor;
            background: transparent;
            border-radius: var(--size-radius);
        }

        .input__field:not(:-moz-placeholder-shown)+.input__label {
            transform: translate(0.25rem, -65%) scale(0.8);
            color: var(--color-accent);
        }

        .input__field:not(:-ms-input-placeholder)+.input__label {
            transform: translate(0.25rem, -65%) scale(0.8);
            color: var(--color-accent);
        }

        .input__field:focus+.input__label,
        .input__field:not(:placeholder-shown)+.input__label {
            transform: translate(0.25rem, -65%) scale(0.8);
            color: #050df9;
        }

        .forgetPassword {
            margin-left: 40%;
            cursor: pointer;
            margin-top: 5px;
        }

        .forgetPassword a {
            color: red;
            font-size: 13px;
            text-decoration: none;
        }
    </style>

</head>

<body>

    <div id="wall1">
        <div id="sign-up-heading">Already a member?</div>
        <div id="sign-up-heading2">Welcome back to Karrot</div>
        <div id="login" class="input-group">

            <form action="Login_check.php" method="post">
                <input type="email" class="input-field1" placeholder="Email" name="emailLogin" id="confirm_email"><br>
                <label id="abc" style="font-size:10px ;"></label>
                <input type="password" class="input-field1" placeholder="Password" name="confirm_password" id="qwerty"><br>
                <label id="abc2" style="font-size:10px ;"></label>

                <br>


                <input type="submit" class="submit-btn" name="submit" value="Log-In" style="margin-bottom: 10px;" id="Login-button"></input>
                
            </form>
        </div>
        <div id="sign-up">
            <h4 style="color: white;">Already a member?</h4>
            <button id="sign-in-button" onclick="openSignUp()">Sign-In</button>
        </div>
    </div>
    <div id="wall2">
        <div id="sign-in-heading">New to us?</div>

        <div id="sign-in-heading2">Welcome to Karrot</div>

        <center id="register" class="input-group">
            <form action="registration_check.php" method="post" autocomplete="off">
                <input type="text" class="input-field" placeholder="Name" required name="name">
                <input type="text" class="input-field" placeholder="User Name" required name="username" id="username"><br>
                <label id="msg2" style="font-size:10px ;"></label>
                <input type="email" class="input-field" placeholder="Email" required name="email" id="email-res"><br>
                <label id="msg" style="font-size:10px ;"></label>
                <input type="password" class="input-field" placeholder="Password" required name="password">
                <input type="text" class="input-field" placeholder="City" name="city" required id="city"><br>
                <input type="checkbox" id="terms" class="check-box" name="terms" value="Yes">
                <label for="terms">I agree to Terms & Conditions</label><br>
                <input type="submit" class="submit-btn" name="submit" value="Register" style="margin-bottom: 10px;" id="Register-button"></input>
            </form>
        </center>
        <div id="sign-in">
            <h4 style="color: white;">New to us?</h4>
            <button id="sign-up-button" onclick="openSignIn()">Sign-Up</button>
        </div>
    </div>
</body>

<script type="text/javascript">
    if (navigator.userAgent.match(/Mobile/)) {
        document.getElementById('sign-up-button').innerHTML = 'Sign In';
        document.getElementById('sign-in-button').innerHTML = 'Sign Up';
    }
</script>




<script type="text/javascript">
    function openSignUp() {
        if (window.innerWidth > 1000) {
            document.getElementById("register").style.opacity = "1";
            document.getElementById("register").style.height = "50px";
            document.getElementById("register").style.marginLeft = "100%";

            document.getElementById("sign-in-heading2").style.fontSize = "0";
            document.getElementById("sign-in-heading").style.fontSize = "60px";
            document.getElementById("sign-in-heading").style.marginTop = "100px";
            document.getElementById("sign-in").style.opacity = "1";
            document.getElementById("login").style.opacity = "1";
            document.getElementById("login").style.marginLeft = "31%";
            document.getElementById("sign-up-heading").style.fontSize = "0px";
            document.getElementById("sign-up-heading2").style.fontSize = "60px";
            document.getElementById("sign-up").style.opacity = "0";
            document.getElementById("wall2").style.backgroundImage = "url('assets/bgspace.jpg')";
            document.getElementById("wall2").style.backgroundPosition = "center";

            document.getElementById("wall2").style.transition = "1s";
            document.getElementById("wall1").style.backgroundColor = "white";
            document.getElementById("wall1").style.background = "none";

            document.getElementById("wall1").style.transition = "1s";
        } else {
            document.getElementById("wall2").style.width = "100%";
            document.getElementById("wall2").style.position = "relative";
            document.getElementById("wall1").style.width = "0";
            document.getElementById("wall1").style.position = "absolute";
        }
    }

    function openSignIn() {
        if (window.innerWidth > 1000) {
            document.getElementById("register").style.marginLeft = "200px";
            document.getElementById("register").style.opacity = "1";
            document.getElementById("register").style.height = "350px";
            document.getElementById("register").style.marginTop = "50px";

            document.getElementById("sign-in-heading2").style.fontSize = "60px";
            document.getElementById("sign-in-heading").style.fontSize = "0px";
            document.getElementById("sign-in-heading").style.marginTop = "0px";
            document.getElementById("sign-in").style.opacity = "0";
            document.getElementById("login").style.opacity = "0";
            document.getElementById("login").style.marginLeft = "100%";
            document.getElementById("sign-up-heading").style.fontSize = "60px";
            document.getElementById("sign-up-heading2").style.fontSize = "0";
            document.getElementById("sign-up").style.opacity = "1";
            document.getElementById("wall2").style.backgroundColor = "white";
            document.getElementById("wall2").style.background = "none";
            document.getElementById("wall2").style.transition = "1s";
            document.getElementById("wall1").style.backgroundImage = "url('assets/bgspace.jpg')";
            document.getElementById("wall1").style.backgroundPosition = "center";

            document.getElementById("wall1").style.transition = "1s";
        } else {
            document.getElementById("wall1").style.width = "100%";
            document.getElementById("wall1").style.position = "relative";
            document.getElementById("wall2").style.width = "0";
            document.getElementById("wall2").style.position = "absolute";
        }
    }
</script>

</html>