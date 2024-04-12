<?php
include("config.php");

if(isset($_POST["np"]) && isset($_POST["password"])){
    $username = $_POST["np"];
    $password = $_POST["password"];

$result=mysqli_query($conn,"SELECT username FROM users WHERE username='$username' AND password='$password'")
or die("select error");
}
