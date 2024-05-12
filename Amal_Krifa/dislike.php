<?php
    $uid = $_GET["userid"];
    $aid = $_GET["aid"];
    $r = $_GET["r"];
    $conn = mysqli_connect("127.0.0.1", "root", "", "animebook");
    $sql = "UPDATE revs SET dislike = dislike + 1 WHERE rid = $r";
    $res = mysqli_query($conn, $sql);
    header("Location: rev.php?userid=$uid&aid=$aid");
    exit();




?>