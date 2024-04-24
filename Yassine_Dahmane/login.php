<?php
$user=$_POST["username"];
$password=$_POST["password"];
$conn=mysqli_connect("127.0.0.1","root","","gstore");
$sql="SELECT * from users where user='$user' and password='$password'";
$res=mysqli_query($conn,$sql);
$tab=mysqli_fetch_array($res);
$avatar=$tab['avatar'];
$id=$tab["user_id"];
if(mysqli_num_rows($res)==0){
    echo"<script>location.assign('logerror.html');</script>";
}
else{
    echo"<form name='myform' method='post' action='main.php'>";
    echo"<input type='hidden' name='username' value='$user'>";
    echo"<input type='hidden' name='avatar' value='$avatar'>";
    echo"<input type='hidden' name='user_id' value='$id'>";
    echo"<script>document.myform.submit()</script></form>";

    //echo"<script>location.assign('main.php');</script>";
}