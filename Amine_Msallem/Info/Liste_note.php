<?php
$con = mysqli_connect("127.0.0.1", "root", "", "sign_project");

$sti_ctr1 = $_POST["sti_ctr1"];
$sti_ctr2 = $_POST["sti_ctr2"];
$sti_s = $_POST["sti_s"];
$prog_ctr1 = $_POST["prog_ctr1"];
$prog_ctr2 = $_POST["prog_ctr2"];
$prog_s = $_POST["prog_s"];
$math_ctr1 = $_POST["math_ctr1"];
$math_s = $_POST["math_s"];
$phy_ctr1 = $_POST["phy_ctr1"];
$phy_ctr2 = $_POST["phy_ctr2"];
$phy_s = $_POST["phy_s"];
$arb_s = $_POST["arb_s"];
$fr_ctr1 = $_POST["fr_ctr1"];
$fr_ctr2 = $_POST["fr_ctr2"];
$fr_s = $_POST["fr_s"];
$an_ctr1 = $_POST["an_ctr1"];
$an_ctr2 = $_POST["an_ctr2"];
$an_s = $_POST["an_s"];
$phi_ora = $_POST["phi_ora"];
$phi_ctr1 = $_POST["phi_ctr1"];
$phi_s = $_POST["phi_s"];
$op_ctr1 = $_POST["op_ctr1"];
$op_s = $_POST["op_s"];
$s_ctr1 = $_POST["s_ctr1"];
$s_s = $_POST["s_s"];
$id = $_POST["id"]; 


$sti = ($sti_ctr1 + $sti_ctr2 + ($sti_s * 2)) / 4;
$prog = ($prog_ctr1 + $prog_ctr2 + ($prog_s * 2)) / 4;
$math = ($math_ctr1 + ($math_s * 2)) / 3;
$phy = ($phy_ctr1 + $phy_ctr2 + ($phy_s * 2)) / 4;
$fr = ($fr_ctr1 + $fr_ctr2 + ($fr_s * 2)) / 4;
$ang = ($an_ctr1 + $an_ctr2 + ($an_s * 2)) / 4;
$phi = ($phi_ora + $phi_ctr1 + ($phi_s * 2)) / 4;
$option = ($op_ctr1 + ($op_s * 2)) / 3;
$sport = ($s_ctr1 + ($s_s * 2)) / 3;
$moy = (($sti * 3) + ($prog * 3) + ($math * 3) + ($phy * 3) + $fr + $ang + $phi + $option + $sport + $arb_s) / 18;
$sql = "INSERT INTO informatique (sti_ctr1, sti_ctr2, sti_s, prog_ctr1, prog_ctr2, prog_s, math_ctr1, math_s, 
        phy_ctr1, phy_ctr2, arb_s, fr_ctr1, fr_ctr2, fr_s, an_ctr1, an_ctr2, an_s, phi_ora, phi_ctr1, phi_s, 
        op_ctr1, op_s, s_ctr1, s_s, id, moy) VALUES ('$sti_ctr1', '$sti_ctr2', '$sti_s', '$prog_ctr1', '$prog_ctr2', 
        '$prog_s', '$math_ctr1', '$math_s', '$phy_ctr1', '$phy_ctr2', '$arb_s', '$fr_ctr1', '$fr_ctr2', '$fr_s', 
        '$an_ctr1', '$an_ctr2', '$an_s', '$phi_ora', '$phi_ctr1', '$phi_s', '$op_ctr1', '$op_s', '$s_ctr1', '$s_s', '$id','$moy')";

$res = mysqli_query($con, $sql);
if ($res) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>
