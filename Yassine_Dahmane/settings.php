<?php
    $id=$_POST["id"];
    $conn=mysqli_connect("127.0.0.1","root","","gstore");
    $sql="SELECT user,avatar,email from users where user_id=$id";
    $res=mysqli_query($conn,$sql);
    $info=mysqli_fetch_array($res);
    $email=$info["email"];
    $avatar=$info["avatar"];
    $username=$info["user"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body onload="init()">
    <header>
        <div id='pages'>
        <img src="g logo.png" id="logo" alt="g store">
        <span><a href="main.php">Store</a></span>
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
    <div id="head">
        <?php
            echo"<img src='".$avatar."' style='height:80px; width:80px'> <h1>".$username."</h1>";
        ?>
    </div>
    <div id="main">
    <div id="options">
            <h1>About</h1>
            <p>Set your profile name and details. Providing additional information like your real name can help friends find you on the GStore Community.</p>
            <p>Your profile name and avatar represent you throughout GStore, and must be appropriate for all audiences.</p>
    </div>
    <div>
        <h1>General</h1>
        <form action="submit_changes.php" method="post" onsubmit="return verifoptions()">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <label for="username">Profile Name</label><br>
            <input type="text" name="username" id="username" value="<?php echo $username;?>"><br>
            <label for="email">E-Mail</label><br>
            <input type="email" name="email" id="email" value="<?php echo $email;?>"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"><br>
            <label for="confirm_password">Confirm Password</label><br>
            <input type="password" name="confirm_password" id="confirm_password"><br>
            <button type="submit" id="lg_btn" onclick="return confirm()">Save</button>
            <button type="reset">Cancel</button>
        </form>
    </div>
    </div>
</body>
</html>
<style>
    #main{
        background-color: #0E141B;
        justify-content: center;
        display: block;
        margin-left:20%
    }
    label{
        margin: 5px;
        color: #969696;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    input{
        height:40px;
        color:white;
        margin: 5px;
        background-color: rgba(0,0,0,.25);
        width: 70%;
        border-radius: 5px;
        border: none;
        box-shadow: inset 1px 1px 0px #000a;
    }
    #lg_btn{
        margin-left: 5px;
        border: none;
        color: white;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        letter-spacing: 0.5px;
        line-height: 22px;
        width: 200px;
        background-size: 330% 100%;
        background-position: 25%;
        background: linear-gradient(to right, #47bfff 0%, #1a44c2 60%);
    }
    button[type="reset"]{
        border: none;
        color: white;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        letter-spacing: 0.5px;
        line-height: 22px;
        width: 200px;
        background-size: 330% 100%;
        background-position: 25%;
        background-color:#3d4450;
        margin-left: 5px;
    }
</style>
<script src="javascript.js"></script>