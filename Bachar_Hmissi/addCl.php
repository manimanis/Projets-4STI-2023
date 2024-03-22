<?php
$np=$_POST["np"];
$g=$_POST["g"];
$dob=$_POST["dob"];
$tel=$_POST["tel"];
$adr=$_POST["adr"];
$conn=mysqli_connect("127.0.0.1","root","","loc_proj");
$sql="SELECT * FROM client WHERE NP='$np' AND DOB='$dob'";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res)!=0) {
    die("Client déjà existant");
}
$sql="INSERT INTO client(NP,Genre,DOB,Tel,Adresse) VALUES('$np','$g','$dob','$tel','$adr');";
$res=mysqli_query($conn,$sql);
if ($res) {
    echo "Insertion avec succès";
}
mysqli_close($conn);