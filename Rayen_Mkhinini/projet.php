<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "tableclt");

if (!$conn) {
    die("Échec de la connexion à la base de données: " . mysqli_connect_error());
}

if (!isset($_POST["quana"])) {
    die("Tous les champs du formulaire doivent être remplis.");
}

$selectedCar = $_POST["cars"];
$Version = $_POST["versions"];
$CarPart = $_POST["carParts"];
$quantity = $_POST["quana"];

$req = "SELECT codevoitue FROM voiture WHERE modelvoiture='$selectedCar' AND marquevoiture='$Version'";

$res = mysqli_query($conn, $req);

$row = mysqli_fetch_array($res);

if (!$row) {
    die("Aucun résultat trouvé pour la voiture sélectionnée.");
}

$codevoiture = $row['codevoitue'];

$reqe = "UPDATE piece SET qtstock = qtstock + $quantity WHERE codevoiture='$codevoiture' AND libpiece='$CarPart'";
$res1 = mysqli_query($conn, $reqe);

if (!$res1) {
    die("Erreur lors de la mise à jour du stock: ");
}

$nb = mysqli_affected_rows($conn);

if ($nb == -1) {
    echo ("Il y a eu un problème lors de la mise à jour.");
} else {
    echo ("Enregistrement effectué avec succès");
}

mysqli_close($conn);
?>
