<?php
$conn=mysqli_connect("127.0.0.1","root","","loc_proj");
$sql="SELECT c.IdClient,NP,Genre,Tel,DOB,SUM(Qte*Duree*PrixUnitHeure) AS sm FROM Location AS l,produit AS p,client AS c 
WHERE IdProd=IdProduit AND c.IdClient=l.IdClient GROUP BY IdClient HAVING sm>20 ORDER BY sm DESC ;";
$res=mysqli_query($conn,$sql);
$nbr=mysqli_num_rows($res);
echo"<link rel=\"stylesheet\" href=\"style.css\">";
echo "<fieldset>";
echo "<legend>Nombre de clients affectant des locations : $nbr</legend>";
echo "<table border='2px'>";
echo "<th>Id</th>";
echo "<th>Nom & Prénom</th>";
echo "<th>Genre</th>";
echo "<th>Tel</th>";
echo "<th>Date of Birth</th>";
echo "<th>Somme totale des achats</th>";
while ($tab=mysqli_fetch_array($res)) {
    if ($tab["Genre"]=="M") {
        $g="Homme";
    }
    else{
        $g="Femme";
    }
    echo    "<tr>";
    echo        "<td>".$tab["IdClient"]."</td>";
    echo        "<td>".$tab["NP"]."</td>";
    echo        "<td>".$g."</td>";
    echo        "<td>".$tab["Tel"]."</td>";
    echo        "<td>".$tab["DOB"]."</td>";
    echo        "<td>".$tab["sm"]."</td>";
    echo    "</tr>";
}
echo "</table>";
echo "</fieldset>";