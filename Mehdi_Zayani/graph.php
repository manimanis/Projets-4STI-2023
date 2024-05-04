<?php
$memoire=$_GET["memoire"];
$reference=$_GET["reference"];
$marque=$_GET["marque"];
$prix=$_GET["prix"];


$conn=mysqli_connect("127.0.0.1","root","","projetmranis");
$sql = "INSERT INTO gpu (marque, reference, memoire, prix) VALUES ('$marque','$reference','$memoire','$prix')";
$res=mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn)==1){
    echo "inserée avec succes";
}
else{
    echo "probléme d'insertion";

};
echo "<a href=\" index.html\">Back to hub</a>";

?>