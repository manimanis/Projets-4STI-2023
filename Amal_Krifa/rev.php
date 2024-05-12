<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>animebook</title>
    <link rel="stylesheet" href="rev.css">
</head>
<body>
    <?php
    if (!isset($_GET["userid"]) || !isset($_GET["aid"])) {
        die("Error: Missing parameters.");
    }
    $uid = $_GET["userid"];
    $aid = $_GET["aid"];
    $conn = mysqli_connect("127.0.0.1", "root", "", "animebook");
    ?>
    <h1>
        animebook
    </h1>
    <fieldset>
        <legend>new review</legend>
    <form action="review.php" method="post">
        <table id="post">
        <tr><td><label for="title">title</label></td>
        <td><input type="text" placeholder="title" max="32" name="title">
        </td></tr><tr><td><label for="review">review</label></td>
        <td><textarea name="review" rows="5" cols="40"></textarea></td>
        </tr></table>
        <?php
            echo "<input type=\"number\" value=\"$uid\" name=\"userid\" hidden></input>";
            echo "<input type=\"number\" value=\"$aid\" name=\"aid\" hidden></input>";
        ?>
        <button type="submit">post</button>
    </form>
    </fieldset> 
    <div id="grid">
    <?php
        $sql = "SELECT rid, userid, title, descrip, likes, dislike FROM revs WHERE aid=$aid";
        $res = mysqli_query($conn, $sql);
        while ($arr = mysqli_fetch_array($res)){
            $sql = "SELECT uname FROM users WHERE userid= $arr[1]";
            $res1 = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($res1);
            $user = $user[0];
            $title = $arr[2];
            $desc = $arr[3];
            echo "<div class=\"review\"><div class=\"user\">$user:</div><div class=\"title\">$title</div><div class=\"desc\">$desc</div><div class=\"lk\"><table><tr><th><a href=\"like.php?r=$arr[0]&userid=$uid&aid=$aid\"><button>like</button></a>:$arr[4]</th><th><a href=\"dislike.php?r=$arr[0]&userid=$uid&aid=$aid\"><button>dislikes</button></a>:$arr[5]</th></tr></table></div></div>";
            
        }
   ?>
    </div>  
   

</body>
</html>