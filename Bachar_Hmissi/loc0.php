<?php
$id=intval($_GET["idl"]);
$conn=mysqli_connect("127.0.0.1","root","","loc_proj");
$sql="SELECT * FROM produit WHERE IdProd=$id;";
$res=mysqli_query($conn,$sql);
$tab=mysqli_fetch_array($res);
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
    <div class="cont">
    <fieldset>
        <legend>Location</legend>
        <form action="loc.php" method="post">
            <div class="in">
                <label for="prod">Produit</label>
                <input type="text" name="prod" id="prod" value="<?=$tab["Libelle"]?>" readonly>
            </div>
            <div class="in">
                <label for="cl">N° de téléphone </label>
                <input type="text" name="tel" id="tel">
            </div>
            <button type="submit">Affecter</button>
            <button type="reset">Annuler</button>
        </form>
    </fieldset>
    </div>
</body>
</html>