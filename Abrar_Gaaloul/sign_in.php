<?php
$name=$_POST["username"];
$password =$_POST["pw"];

$conn = mysqli_connect("127.0.0.1","root","","client");

$req = "SELECT username FROM client WHERE username='$name'";
$res = mysqli_query($conn,$req);

if (mysqli_num_rows($res)!=0){
  die("another user have the same name!");
}

else{
  $req = "INSERT INTO client VALUES('$name','$password')";
  $res = mysqli_query($conn,$req);
  echo "done";
}

 ?>
