<?php
    $username=$_POST["username"];
    $id=$_POST["id"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $avatar=$_POST["avatar"];

    $conn=mysqli_connect("127.0.0.1","root","","gstore");
    $sql="UPDATE users set user='$username',password='$password',email='$email' where user_id='$id'";
    $res=mysqli_query($conn,$sql);
    if($res){
        echo"<form name='myform' method='post' action='main.php'>";
        echo"<input type='hidden' name='username' value='$username'>";
        echo"<input type='hidden' name='avatar' value='$avatar'>";
        echo"<input type='hidden' name='user_id' value='$id'>";
        echo"<script>document.myform.submit()</script></form>";
    }
    else{

    }