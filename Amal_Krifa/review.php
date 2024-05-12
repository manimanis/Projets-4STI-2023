<?php
    $title = $_POST["title"];
    $rev = $_POST["review"];
    $aid = $_POST["aid"];
    $uid = $_POST["userid"];

    $conn = mysqli_connect("127.0.0.1", "root", "", "animebook");
    $sql = "INSERT INTO revs (userid, aid, title, descrip, likes, dislike) VALUES ($uid, $aid, \"$title\", \"$rev\", 0, 0)";
    $res = mysqli_query($conn, $sql);
    if ($res){
        header("Location: rev.php?userid=$uid&aid=$aid");
        exit();
    } else {
        die("error");
    }








?>