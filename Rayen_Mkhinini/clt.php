<?php
$code = $_POST["code"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$adr = $_POST["adr"];
$tel = $_POST["tel"];
$conn = mysqli_connect("127.0.0.1", "root", "", "tableclt");
$rq = "SELECT * FROM client WHERE codeclt='$code'";
$res = mysqli_query($conn, $rq); 
$nb = mysqli_num_rows($res); 

if ($nb == 1) {
    echo "deja existant dans la base"; 
} else {
    $req = "INSERT INTO client VALUES ('$code','$nom','$prenom','$adr','$tel')"; 
    $res_insert = mysqli_query($conn, $req); 
    $nb=mysqli_affected_rows($conn);
    if($nb==-1){
        echo("ilya un problem");
    }else{
        echo("enregistrement avec succes");
    }
}
?>
