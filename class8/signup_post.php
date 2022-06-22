<?php

session_start();

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password= $_POST["confirm_password"];



if($name){
    echo "Name : ".$name;
    echo "<br>";
    $_SESSION["name_old"]=$name;
}

else{
    $_SESSION["name_error"] = "Name is required. Please Enter the Name";
    header("location:signup.php");
}


if ($email) {
    echo "Email : " . $email;
    echo "<br>";
    $_SESSION["email_old"] = $email;
} else {
    $_SESSION["email_error"] = "Email is required. Please Enter the Email";
    header("location:signup.php");
}


if ($password) {
    
    
    
    echo "Password : " . $password;
    echo "<br>";
    $_SESSION["password_old"] = $password;
} else {
    $_SESSION["password_error"] = "Password is required. Please Enter the Password";
    header("location:signup.php");
}


if ($confirm_password && $password == $confirm_password) {
    echo "Confirm_password : " . $confirm_password;
    echo "<br>";
    $_SESSION["confirm_password_old"] = $confirm_password;
} else {
    $_SESSION["confirm_password_error"] = "Confirm password is required or password is not match. Please Enter the Confirm password";
    header("location:signup.php");
}




























?>