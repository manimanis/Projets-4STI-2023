<?php
session_start();
$conn = mysqli_connect("127.0.0.1","root","","client");
$user = $_SESSION["user"];
$req = "INSERT INTO client VALUES('$user','')"
 ?>
