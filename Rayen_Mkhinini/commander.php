<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "tableclt");

$idClient = $_POST["id"];
$selectedCar = $_POST["cars"];
$selectedVersion = $_POST["versions"];
$selectedCarPart = $_POST["carParts"];
$quantity = $_POST["piece"];

$rq = "SELECT * FROM client WHERE codeclt='$idClient'";
$res = mysqli_query($conn, $rq); 
$nb = mysqli_num_rows($res); 

if ($nb == 0) {
    echo "Vous n'êtes pas inscrit dans la société"; 
    
} else {
    echo "Vous êtes inscrit dans la société";
    echo "<h2>Détails de la commande :</h2>";
    echo "<p>Voiture sélectionnée : $selectedCar $selectedVersion</p>";
    echo "<p>Pièce sélectionnée : $selectedCarPart</p>";
    $rqPiece = "SELECT * FROM piece WHERE libpiece='$selectedCarPart'";
    $resPiece = mysqli_query($conn, $rqPiece);
    if ($resPiece && mysqli_num_rows($resPiece) > 0) {
        $rowPiece = mysqli_fetch_assoc($resPiece);
        $prixPiece = $rowPiece["prixA"];
        $prixTotal = $prixPiece * $quantity * 1.20; 

        echo "<p>Prix unitaire de la pièce : $prixPiece</p>";
        echo "<p>Quantité commandée : $quantity</p>";
        echo "<p>Prix total de la commande : $prixTotal</p>";

    
        $nouvelleQuantite = $rowPiece["qtstock"] - $quantity;
        $rqUpdatePiece = "UPDATE piece SET qtstock=$nouvelleQuantite WHERE libpiece='$selectedCarPart'";
        mysqli_query($conn, $rqUpdatePiece);
        $dateCommande = date("Y-m-d");

        $insertCommande = "INSERT INTO commande (codeclt, datecom, PUPiece, numpiece) 
                           VALUES ('$idClient', '$dateCommande', '$prixTotal', '{$rowPiece['numpiece']}')";
        mysqli_query($conn, $insertCommande);
        $numCommande = mysqli_insert_id($conn);

        echo "<p>Numéro de commande : $numCommande</p>";
    } else {
        echo "La pièce sélectionnée n'existe pas dans la base de données.";
    }
}

mysqli_close($conn);
?>
