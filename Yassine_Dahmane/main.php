<?php
    error_reporting(0);
    $id=$_POST["user_id"];
    $conn=mysqli_connect("127.0.0.1","root","","gstore");
    $sql="SELECT avatar,user from users where user_id='$id'";
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
                echo"<input type='hidden' name='username' value='".$username."'>";
                echo"<input type='hidden' name='id' value='".$id."'>";
                echo"<input type='hidden' name='avatar' value='".$avatar."'>";
                echo"<button type='submit' formaction='settings.php' style='width:100%'>settings</button>";
                echo"<button type='submit' formaction='redirect.php' style='width:100%'>Logout</button>";
                echo"</div>";
                echo"</div>";
                echo"</form>";
                echo"</div>";
            }
        ?>
    </header>
    <main style="display:flex;flex-direction: column;justify-content: flex-start;align-items: flex-start;">
        <div id='browse' style="width:100%; height:40px;border-bottom:1px solid gray;text-align:center;margin-top:20px">
            <span id="br_span"><a href="games.php" target="Frame" >Games</a></span>
            <span id="br_span"><a href="discorver.php" target="Frame">Discover</a></span>
        </div>
        <iframe name='Frame' src="games.php" style="width:99.5%;height:700px"></iframe>
    </main>
</body>
<script>
    function init(){
        
    }
</script>
</html>