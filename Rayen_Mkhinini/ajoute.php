<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="projet.css">
</head>
<body>
    <table>
        <tr>
            <th>numeropiece</th>
            <th>lib piece</th>
            <th>code voiture</th>
            <th>quantite</th>
            <th>prix unitaire</th>
        </tr>
        <?php
      
        $conn = mysqli_connect("127.0.0.1", "root", "", "tableclt");
        $sql = "SELECT numpiece, libpiece, codevoiture, qtstock, prixA FROM piece";
        $result = mysqli_query($conn, $sql);
        
        while($row = mysqli_fetch_array($result)) {
            echo "<tr>
            <td>".$row[0]."</td>
            <td>".$row[1]."</td>
            <td>".$row[2]."</td>
            <td>".$row[3]."</td>
            <td>".$row[4]."</td>
            </tr>";
        }

        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
