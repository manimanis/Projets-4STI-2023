<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>animebook</title>
    <link rel="stylesheet" href="sec.css">
</head>
<body>
    <h1>
        choose an anime
    </h1>

    <div id="main">
        <main>
            <table>
                <?php 
                    $id = $_GET["userid"];
                    $conn = mysqli_connect("127.0.0.1", "root", "", "animebook");
                    $c = 5;
                    $erg = array(
                        "aid" => 0,
                        "aname" => "",
                        "adesc" => ""
                    );
                    $t = [$erg,$erg,$erg,$erg,$erg];
                    $sql = "SELECT aid, aname, adesc FROM anime";
                    $res = mysqli_query($conn, $sql);
                    for ($i=0; $i < $c; $i++) { 
                        $arr = mysqli_fetch_array($res);
                        $erg["aid"] = $arr[0];
                        $erg["aname"] = $arr[1];
                        $erg["adesc"] = $arr[2];
                        $t[$i] = $erg;
                    }
                    echo "<tr>";
                    foreach ($t as $row) {
                        echo "<th><a href=\"rev.php?userid=".$id."&aid=".$row["aid"]."\">".$row["aname"]."</a></a>\n";
                    }
                    echo "</tr>";
                    echo "<tr>";
                    foreach ($t as $row) {
                        echo "<td><img src=\"images/".$row["aid"].".jpg\"></td>\n";
                    }
                    echo "</tr>";
                    echo "<tr>";
                    foreach ($t as $row) {
                        echo "<td>".$row["adesc"]."</td>\n";
                    }
                    echo "</tr>";
                ?>
            </table>
            
            
        </main>
    </div>

    
</body>
</html>