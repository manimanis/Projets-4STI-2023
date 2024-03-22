<?php
$conn=mysqli_connect("127.0.0.1","root","","loc_proj");
$sql="SELECT * FROM produit";
$res=mysqli_query($conn,$sql);
$nbr=mysqli_num_rows($res);
echo "Nombre de produits : $nbr ";
echo "<table border='2px'>";
echo "<th>Id</th>";
echo "<th>Libellé</th>";
echo "<th>Nombre de produits disponibles</th>";
echo "<th>Prix de location par heure</th>";
echo "<th>Description</th>";
while ($tab=mysqli_fetch_array($res)) {
    echo    "<tr>";
    echo        "<td>".$tab["IdProd"]."</td>";
    echo        "<td>".$tab["Libelle"]."</td>";
    echo        "<td>".$tab["NbreDisp"]."</td>";
    echo        "<td>".$tab["PrixUnitHeure"]."</td>";
    echo        "<td>".$tab["Description"]."</td>";
    echo "<td><a href=\"\">Louer</a></td>";
    echo    "</tr>";
}
echo "</table>";