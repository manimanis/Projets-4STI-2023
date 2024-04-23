<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<?php
if(isset($_SESSION['user'])) {
    echo '<a href="sign/logout.php" id="Sign">Sign Out</a>';
} else {
    echo '<a href="sign/sign.html" id="Sign">Sign Up</a>';
    echo '<a href="sign/sign_in.html" id="in">Sign In</a>';
}
?>

<h1>Chniya section mta3ek?</h1>
<div class="container">
    <a href="Info/Informatique.html" class="link" id="si">Science Informatique</a>
    <a href="Science/Science.html" class="link" id="Science">Sciences Expérimentales</a>
    <a href="math/Math.html" class="link" id="Math">Math</a>
    <a href="technique/technique.html" class="link" id="Techniques">Sciences Techniques</a>
    <a href="lettre/Lettre.html" class="link" id="Lettre">Lettres</a>
    <a href="eco/eco.html" class="link" id="eco">Economie et Gestion</a>
</div>
</body>
</html>
