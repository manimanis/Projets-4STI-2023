<?php

include("config.php");

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $password = $_POST["password"];
}
$verify_query=mysqli_query($conn,"SELECT email FROM users WHERE email='$email' ");
if(mysqli_num_rows($verify_query)!=0){
    echo "<p> this email is used,try another one Please!</p>";
}
else{
    mysqli_query($conn,"INSERT INTO users(username,Email,Age,password)VALUES('$username','$email','$age','$password',)")
    or die("erreur");
    echo "<p> Registration successfuly!</p>";
}