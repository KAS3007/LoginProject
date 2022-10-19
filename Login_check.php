<?php
require 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $password = "";
    if (empty($_POST["emailLogin"])) {
        $emailErr = "Email is required";
    } else {
        $confirm_email = $_POST["emailLogin"];
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    if (empty($_POST["confirm_password"])) {
        $passwordErr = "paswword is required";
    } else {
        $confirm_password = $_POST["confirm_password"];
    }
    $ch = mysqli_query($connect, "SELECT User_Id,Password FROM users WHERE Email='$confirm_email'");
    $row = mysqli_fetch_array($ch);
    $usernam = $row['User_Id'];

    $password = $row['Password'];
    if (password_verify($confirm_password, $password)) {
        $count  = mysqli_num_rows($ch);
    }

    if ($count == 0) {
        echo "Login credentials are wrong <a href='registration.php'>Back</a>";
        header("Location:registration.php");
    } else {
        $User_Id = $row['User_Id'];

        setcookie("User_Id", $User_Id, time() + 60 * 24 * 60 * 60, '/');

        header("Location:contactus.php");
    }
}
