<?php
session_start();

$name=$_POST["username"];
$password=$_POST["password"];

$conn = mysqli_connect("127.0.0.1","root","","client");


$sql = "SELECT password FROM client WHERE username='$name' AND password='$password'";
$res = mysqli_query($conn,$sql);


if(mysqli_num_rows($res)==0){
  die("undefined inputs");
}

else{
  $_SESSION["user"]=mysqli_fetch_array($res);
  ?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>SAKURA TREE_items</title>
      <link rel="icon" href="img/logo.png" width="210px" height="200px">
      <link rel="stylesheet" href="proj.css">
    </head>
    <body>
      <h1>SAKURA TREE</h1>
      <div id="logo"><img src="img/logo.png"></div>
      <h2>TODAY'S ITEMS BY:</h2>
      <div id="shark_logo">
        <img src="img/white_shark.png" alt="white_shark">
      </div>
      <form action="buy.php" method="post">
        <div id="cont">
          <h2>CASQUE GAMING WHITE SHARK GH-2040 SERVAL</h2>
          <div id="item">
            <img src="img/casque.jpg" alt="casque" width="200px" height="200px">
          </div>
            <div id="text">
              <p>Casque Gaming White Shark GH-2040 Serval:</p>
              <lu>
                <li>Référence : GH-2040</li>
                <li>Interface Jack 2x 3.5mm</li>
                <li>Sensibilité -62dB +/- 3dB (Micro), 103dB +/- 3dB (Casque)</li>
                <li>Fréquence 20Hz - 20kHz</li>
                <li>Impédance 2.2 kOhma (Micro), 32 Ohma (Casque)</li>
                <li>Dimensions Micro 6 x 5 mm</li>
                <li>Garanite 1 an</li>
              </lu>
            </div>
            <div id="prix">42,900 DT</div>
            <button type="submit" id="btn">buy</button>
          </div>

          <div id="cont">
            <h2>TAPIS SOURIS WHITE SHARK SKY WALKER XL 800X350MM</h2>
            <div id="item">
              <img src="img/tapis.jpg" alt="tapis" width="200px" height="200px">
            </div>
            <div id="text">
              <p>Tapis Souris Gaming White Shark Sky Walker XL:</p>
                  <lu>
                    <li>Référence : GMP-1899</li>
                    <li>Dimensions: 800 x 350 mm</li>
                    <li>Construction de microfibres à haute densité</li>
                    <li>Base anti-glisse</li>
                    <li>Couleur : Noir & Rouge</li>
                  </lu>
            </div>
            <div id="prix">39,000 DT</div>
            <button type="submit" id="btn">buy</button>
          </div>
          <div id="cont">
            <h2>SOURIS GAMER WHITE SHARK GARETH GM-5009 / ROSE / RGB</h2>
            <div id="item">
              <img src="img/souris.jpg" alt="souris" width="200px" height="200px">
            </div>
            <div id="text">
              <p>Souris Gamer White Shark GARETH GM-5009:</p>
                <lu>
                  <li>Référence : GM-5009P</li>
                  <li>Interface USB 2.0</li>
                  <li>Type de capteur Optique</li>
                  <li>Résolution 6400 Dpi</li>
                  <li>Type de souris Gaming 7D 7 boutons</li>
                  <li>Éclairage RGB 16.8 millions de couleurs</li>
                  <li>Matériel : Plastique</li>
                  <li>Longueur du câble 1.8 m tressé</li>
                  <li>Dimensions 123 x 81.5 x 41.6 mm</li>
                  <li>Compatibilité Win 7 / 8 / 10 & Mac OS</li>
                  <li>Couleur : Rose</li>
                  <li>Garantie 1 an</li>
                </lu>
          </div>
          <div id="prix">29,000 DT</div>
          <button type="submit" id="btn"></button>

        </div>
        <div id="cont">
          <h2>VENTILATEUR WHITE SHARK NEBULA / LED ARGB</h2>
          <div id="item">
            <img src="img/ventilateur.jpg" alt="ventilateur" width="200px" height="200px">
          </div>
            <div id="text">
              <p>Ventilateur White Shark Nebula:</p>
              <lu>
              <li>Référence : 1262-04-V/PULSAR</li>
              <li>LED ARGB - Palier de ventilateur Hydraulique</li>
              <li>Courant nominal (mA) 150 +/- 10% - Vitesse du ventilateur 1100 +/- 10%</li>
              <li>Tension de fonctionnement (V) 5 - 13.2 - Courant stationnaire (mA) 270 - 720 +/- 10%</li>
              <li>Température de stockage (°C): -30 - 85 - Dimensions 120 x 120 x 25 mm</li>
              <li>Tension (V) 12 - Puissance d'entrée nominale (mW): 1800 +/- 10%</li>
              <li>Bruit (dB): 25 Max - Courant de démarrage (V): 5 (ON/OFF)</li>
              <li>Débit d'air (CFM): 25 Max</li>
              <li>Compatibilité : contrôleurs Aura Sync/Mystic light/RGB Fusion/ARGB</li>
              <li>Garantie 1 an</li>
            </lu>
            </div>
            <div id="prix">39,000 DT</div>
            <button type="submit" id="btn">buy</button>
        </div>
        <div id="cont">
          <h2>HAUT PARLEUR WHITE SHARK RHYTHMUS 2.0</h2>
          <div id="item">
            <img src="img/haut_parleur.jpg" alt="haut_parleur" width="200px" height="200px">
          </div>
            <div id="text">
              <p>Haut Parleur White Shark Rhythmus 2.0:</p>
              <lu>
                <li>Référence : GSP-602</li>
                <li>Puissance 6W (2x 3W)</li>
                <li>Fréquence 90Hz - 20kHz</li>
                <li>Alimentation USB 5V</li>
                <li>Interface Jack 3.5mm</li>
                <li>Régulateur de volume sur le câble</li>
                <li>Matériel: Bois</li>
                <li>Couleur : Noir</li>
                <li>Dimensions 2x 98 x 78 x 140 mm</li>
                <li>Garantie 1 an</li>
              </lu>
            </div>
            <div id="prix">42,900 DT</div>
            <button type="submit" id="btn">buy</button>
        </div>
        <div id="cont">
          <h2>MANETTE SANS FIL WHITE SHARK PHANTEON POUR PC</h2>
          <div id="item">
            <img src="img/manette.jpg" alt="manette" width="200px" height="200px">
          </div>
            <div id="text">
              <p>Manette Sans fil White Shark PHANTEON avec Double Vibration:</p>
              <lu>
                <li>Référence : GPW-2021</li>
                <li>Compatible avec: PC / PS2 / PS3 / TV Android / Android Box</li>
                <li>Fréquence sans fil 2.4 Ghz</li>
                <li>17x Boutons + 2x Analogues</li>
                <li>Fonctions: Turbo & Clear</li>
                <li>Batterie: 3x Piles AAA (non inclus)</li>
                <li>Dimensions 165 x 120 x 60 mm - Garantie 1 an</li>
              </lu>
            </div>
            <div id="prix">47,500 DT</div>
            <button type="submit" id="btn">buy</button>
        </div>
      </form>
    </body>
  </html>
  <?php
}
?>
