<?php
$model=$_GET["modele"];
$reference=$_GET["reference"];
$marque=$_GET["marque"];
$prix=$_GET["prix"];
$cache=$_GET["cache"];
$generation=$_GET["generation"];
$frequence=$_GET["frequence"];
$rammax=$_GET["rammax"];
$coeur=$_GET["coeur"];
$thread=$_GET["thread"];
$socket=$_GET["socket"];

$conn=mysqli_connect("127.0.0.1","root","","projetmranis");
$sql = "INSERT INTO cpu (marque, modele, reference, generation, frequence, coeurs, thread, rammax, socket, cache, prix) VALUES ('$marque','$model','$reference','$generation','$frequence','$coeur','$thread','$rammax','$socket','$cache','$prix')";
$res=mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn)==1){
    echo "inserée avec succes";
}
else{
    echo "probléme d'insertion";

};
echo "<a href=\" index.html\">Back to hub</a>";

?>