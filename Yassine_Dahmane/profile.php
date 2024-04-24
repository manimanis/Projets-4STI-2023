<?php
    $id=$_GET["user_id"];
    $conn=mysqli_connect("127.0.0.1","root","","gstore");
    $sql="SELECT user,avatar from users where user_id=$id";
    $res=mysqli_query($conn,$sql);
    $info=mysqli_fetch_array($res);
    $avatar=$info["avatar"];
    $username=$info["user"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documenttt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="init()">
    <header>
        <div id='pages'>
        <img src="g logo.png" id="logo" alt="g store">
        <span><a href="">Store</a></span>
        <?php
            if (!isset($username)) {
                echo"<span id='user_cont'><a href='login.html' value='null' id='username'>Login</a></span>";
            }
        ?>
        </div>
        <?php
            if (isset($username)) {
                echo"<div id='information'>";
                echo"<form method='post' action=''>";
                echo"<div class='dropdown'>";
                echo"<img id='avatar' width='20px' height='20px' src='".$avatar."'>"."<span>".$username."</span>";
                echo"<div class='dropdown-content'>";
                echo"<input type='hidden'  name='username' value='".$username."'>";
                echo"<button type='submit' formaction='settings.php' style='width:100%'>settings</button>";
                echo"<button type='submit' formaction='redirect.php' style='width:100%'>Logout</button>";
                echo"</div>";
                echo"</div>";
                echo"</form>";
                echo"</div>";
            }
        ?>
    </header>
    <main>
        <div id="main">
            <img src="" alt="" id="profile_avatar">
            <h3></h3>
            
        </div>
    </main>
</body>
<?php

