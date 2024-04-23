<?php
session_start();
$con = mysqli_connect("127.0.0.1","root","","sign_project");
$email = $_POST["mail"];
$pas = $_POST["pas"];
$sql = "SELECT ID FROM information WHERE Email='$email' AND Password='$pas'";
$res = mysqli_query($con, $sql);
if(mysqli_num_rows($res)==0) {
    die("Wrong email or password.");
} else {
    $row = mysqli_fetch_assoc($res);
    $_SESSION['user'] = $row['ID'];
    header("Location: ../index.php");
    exit();
}
mysqli_close($con);
?>