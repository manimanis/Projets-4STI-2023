<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "gstore");
mysqli_report(MYSQLI_REPORT_ERROR);
$email = $_POST["email"];
$password = $_POST["password"];
$username = $_POST["username"];
$sql = "SELECT * from users where email='$email' or user='$username'";
$res = mysqli_query($conn, $sql);
$avatar = "users/user" . strval(rand(1, 2)) . ".jpg";
if (mysqli_num_rows($res) == 0) {
    // $sql = "SELECT max(user_id) as id from users";
    // $res = mysqli_query($conn, $sql);
    // $t = mysqli_fetch_array($res);
    // $newid = $t["id"] + 1;
    $sql = "INSERT INTO users(user,password,avatar,email) values('$username','$password','$avatar','$email')";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        die("<p>".mysqli_error($conn)."</p>");
    }
    if ($res) {
        $newid = mysqli_insert_id($conn);
        echo "<form name='myform' method='post' action='main.php'>";
        echo "<input type='hidden' name='username' value='$user'>";
        echo "<input type='hidden' name='avatar' value='$avatar'>";
        echo "<input type='hidden' name='user_id' value='$newid'>";
        echo "<script>document.myform.submit()</script></form>";
    } else {
        echo "<script>alert('Error" . mysqli_error($conn) . "')</script>";
        echo "<script>location.assign('main.php');</script>";
    }
} else {
    echo "<script>alert('User Exists');location.assign('main.php');</script>";
}
