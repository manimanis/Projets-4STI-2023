<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    $CIN=$_POST["cin"];
    $GSM=$_POST["GSM"];
    $email=$_POST["email"] ;
    $id1=substr($gsm,0,2);
    $id2=substr($cim,4,4);
    $p=strpos($email,"@")-2;
    $p1=substr($email,$p,2);
    $conn=mysqli_connect("127.0.0.1","root","","tunisia");
    $sql="SELECT*FROM mobile_id where cin='$cin'or gsm='$gsm'or email='$email'";
    $res=mysqli_query($conn,$sql);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
 
    $sql = "SELECT * FROM utilisateurs WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: index.html");
        exit;
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
    $conn->close();
}
?>
