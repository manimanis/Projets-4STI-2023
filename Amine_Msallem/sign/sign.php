<?php
session_start();
$con = mysqli_connect("127.0.0.1","root","","sign_project");
$name = $_POST["fn"];
$id = $_POST["id"];
$classe = $_POST["classe"];
$email = $_POST["mail"];
$tel = $_POST["tel"];
$pas = $_POST["pas"];

$sql = "SELECT * FROM information WHERE ID='$id' OR Email='$email'";
$res = mysqli_query($con, $sql);
if(mysqli_num_rows($res)> 0) {
    die("User with this ID or email already exists.");
}
$sql = "INSERT INTO information (Full_name, ID, Classe, Email, Mobile_Number, Password)
               VALUES ('$name','$id','$classe','$email','$tel','$pas')";
$res = mysqli_query($con, $sql);
if(!$res) {
    die("Error inserting data.");
}
$_SESSION['user'] = $id;
header("Location: ../index.php");
exit();
mysqli_close($con);
?>
