<?php
$lib=$_POST["lib"];
$nbr=$_POST["nbr"];
$prix=$_POST["prix"];
$desc=$_POST["desc"];
$conn=mysqli_connect("127.0.0.1","root","","loc_proj");
$sql="SELECT * FROM produit WHERE libelle='$lib';";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res)!=0) {
    $sql="UPDATE produit SET NbreDisp=NbreDisp+$nbr WHERE libelle='$lib' ;";
    $res=mysqli_query($conn,$sql);
}
else{
    $sql="INSERT INTO produit(Libelle,NbreDisp,PrixUnitHeure,Description) VALUES('$lib',$nbr,$prix,'$desc');";
    $res=mysqli_query($conn,$sql);
}
if ($res) {
    echo "Insertion avec succès";
}
mysqli_close($conn);