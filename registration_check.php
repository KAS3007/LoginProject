<?php
// Start the session
session_start();
require 'connection.php';
$nameErr = $emailErr = $usernameErr = $passwordErr = "";
$name = $email = $username = $comment = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email2 = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
            $email = $email2;
    }
    $_SESSION['email'] = $email;
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username2 = test_username($_POST["username"]);
            $username = $username2;
    }
    if (empty($_POST["terms"])) {
        $termsErr = "Terms is required";
    } else {
        $terms = test_input($_POST["terms"]);
    }
    if ($username != null && $email != null) {

 if (mysqli_query($connect, "insert into users (User_Name,Name,Password,Terms,Email) values  ('$username','$name','$hashed_password','$terms','$email')")) {
    $ch = mysqli_query($connect, "SELECT User_Id where Email='$email'");
    $row = mysqli_fetch_array($ch);
    $usernam = $row['User_Id'];
    setcookie("User_Id", $usernam, time() + 60 * 24 * 60 * 60, '/');
    header("Location:contactus.php");
        }
    } else {
        echo "Error occured in entering username or email.<br> Please Try again.<br><a href='registration.php'>Back</a>";
        header("Location:registration.php");
    }
}


function test_username($data)
{
    $data = trim($data);
    if (preg_match('/[\'^£$%&*()}{#~?><>,|=+¬-]/', $data)) {
        return null;
    } else {
        return $data;
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>