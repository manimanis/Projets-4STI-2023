<?php
$idp=intval($_POST["idp"]);
$idc=intval($_POST["idc"]);
$date=date("Y-m-d");
$qte=intval($_POST["qte"]);
$dur=floatval($_POST["duree"]);
$conn=mysqli_connect("127.0.0.1","root","","loc_proj");
$sql="SELECT * FROM location WHERE IdClient=$idc AND IdProduit=$idp AND DateLoc='$date' ;";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res)!=0) {
    die("La location est déjà effectuée");
}
$sql="INSERT INTO location VALUES($idc,$idp,'$date',$dur,$qte);";
$res=mysqli_query($conn,$sql);
if ($res) {
    echo "Insertion avec succès";
}
$sql="UPDATE produit SET NbreDisp=NbreDisp-$qte WHERE IdProd=$idp;";
$res=mysqli_query($conn,$sql);
if ($res) {
    echo "Succession de mise à jour";
}