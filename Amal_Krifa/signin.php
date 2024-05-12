<?php


function hashPassword($password) {
    $hashedPassword = md5($password);
    
    return $hashedPassword;
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"]) && isset($_POST["passwd"])) {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    
    $password = $_POST["passwd"];
    $hashedPassword = hashPassword($password);

    $conn = mysqli_connect("127.0.0.1", "root", "", "animebook");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT userid FROM users WHERE email = \"$email\" AND passwd = \"$hashedPassword\"";
    $res = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($res);

    if ($num > 0) {
        $arr = mysqli_fetch_array($res);
        header("Location: s8jpk92djcvsssadxc.php?userid=".$arr[0]);
        exit();
    } else {
        header("Location: signin.html");
        exit();
    }
    
    mysqli_close($conn);
}


?>
