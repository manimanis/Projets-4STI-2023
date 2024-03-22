<?php
$np=$_POST["cl"];
$lib=$_POST["prod"];
$conn=mysqli_connect("127.0.0.1","root","","loc_proj");
$sql="SELECT * FROM produit WHERE Libelle='$lib';";
$res=mysqli_query($conn,$sql);
$tab=mysqli_fetch_array($res);
$sql1="SELECT * FROM client WHERE NP='$np';";
$res1=mysqli_query($conn,$sql1);
$tab1=mysqli_fetch_array($res1);
$max=$tab["NbreDisp"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="loc">
    <script src="script.js"></script>
    <fieldset>
        <legend>Location</legend>
        <form action="loc2.php" method="post">
        <div class="in">
                <label for="prod">Produit</label>
                <input type="text" name="prod" id="prod" value="<?=$lib?>" readonly>
                <label for="idp">N° du Produit</label>
                <input type="text" name="idp" id="idp" value="<?=$tab["IdProd"]?>" readonly>
            </div>
            <div class="in">
                <label for="cl">N° du Client</label>
                <input type="text" name="cl" id="cl" value="<?=$np?>" readonly>
                <label for="idp">Id Client</label>
                <input type="text" name="idc" id="idc" value="<?=$tab1["IdClient"]?>" readonly>
            </div>
            <div class="in">
                <label for="qte">Quantité</label>
                <input type="number" name="qte" id="qte" min="0" step="1" max="<?=$max?>" onchange="calctot()">
                <label for="duree">Durée</label>
                <input type="number" name="duree" id="duree" min="0" step="0.5" onchange="calctot()">
                <label for="prun">Prix de location par heure</label>
                <input type="number" name="prun" id="prun" value="<?=$tab["PrixUnitHeure"]?>" readonly>
                <label for="prtot">Prix totale de la location </label>
                <input type="number" name="prtot" id="prtot" readonly>
            </div>
                <button type="submit">Affecter</button>
                <button type="reset">Annuler</button>
        </form>
    </fieldset>
    </div>
</body>
</html>