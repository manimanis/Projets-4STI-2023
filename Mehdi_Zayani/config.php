<?php
// Database connection
$dbHost = "127.0.0.1";
$dbUsername = "root";
$dbPassword = "";
$dbName = "projetmranis";

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

$base=$_GET["radio"];
$format=$_GET["format"];

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch CPU options
$sql = "SELECT id, reference, prix,socket FROM cpu WHERE marque='$base'"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $options = [];

  while ($row = $result->fetch_assoc()) {
    $optionId = $row["id"];
    $optionName = $row["reference"];
    $optionPrice = $row["prix"];
    $optionSocket=$row["socket"];
    $option = [
      "id" => $optionId,
      "label" => $optionName,
      "price" => $optionPrice,
    ];

    $options[] = $option;
  }
} else {
  echo "No CPU options found in the database";
}

// Fetch GPU options
$sql = "SELECT id, marque, reference, prix FROM gpu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $optionsgpu = [];

  while ($row = $result->fetch_assoc()) {
    $optionIdgpu = $row["id"];
    $optionNamegpu = $row["reference"];
    $optionPricegpu = $row["prix"];
    $optiongpu = [
      "id" => $optionIdgpu,
      "label" => $optionNamegpu,
      "price" => $optionPricegpu,
    ];

    $optionsgpu[] = $optiongpu;
  }
} else {
  echo "No GPU options found in the database";
}
// Fetch Mother options
$sql = "SELECT id, marque, reference, format ,prix FROM mother where format='$format'"; 

if ($result->num_rows > 0) {
  $optionsmother = [];

  while ($row = $result->fetch_assoc()) {
    $optionIdmother = $row["id"];
    $optionNamemother = $row["reference"];
    $optionPricemother = $row["prix"];
    $optionTypemother = $row["format"];
    $optionmother = [
      "id" => $optionIdmother,
      "label" => $optionNamemother,
      "price" => $optionPricemother,
    ];

    $optionsmother[] = $optionmother;
  }
} else {
  echo "No Mother options found in the database";
}
// Fetch Boitier options
$sql = "SELECT id, reference, prix,photo, format FROM boitier where format='$format'"; 

if ($result->num_rows > 0) {
  $optionsBoitier = [];

  while ($row = $result->fetch_assoc()) {
    $optionIdBoitier = $row["id"];
    $optionNameBoitier = $row["reference"];
    $optionPriceBoitier = $row["prix"];
    $optionPhotoBoitier = $row["photo"];

    $optionBoitier = [
      "id" => $optionIdBoitier,
      "label" => $optionNameBoitier,
      "price" => $optionPriceBoitier,
      "photo" => $optionPhotoBoitier,
    ];

    $optionsBoitier[] = $optionBoitier;
  }
} else {
  echo "No Boitier options found in the database";
}
// Fetch Ram options
$sql = "SELECT id, marque, reference, prix FROM ram"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $optionsram = [];

  while ($row = $result->fetch_assoc()) {
    $optionIdram = $row["id"];
    $optionNameram = $row["reference"];
    $optionPriceram = $row["prix"];
    $optionram = [
      "id" => $optionIdram,
      "label" => $optionNameram,
      "price" => $optionPriceram,
    ];

    $optionsram[] = $optionram;
  }
} else {
  echo "No ram options found in the database";
}
// Fetch Ram options
$sql = "SELECT id, marque, reference, prix FROM stockage"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $optionsstockage = [];

  while ($row = $result->fetch_assoc()) {
    $optionIdstockage = $row["id"];
    $optionNamestockage = $row["reference"];
    $optionPricestockage = $row["prix"];
    $optionstockage= [
      "id" => $optionIdstockage,
      "label" => $optionNamestockage,
      "price" => $optionPricestockage,
    ];

    $optionsstockage[] = $optionstockage;
  }
} else {
  echo "No stockage options found in the database";
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Options Dynamiques</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <script src="script.js"></script>
 <a href="index.html"><h1>Click To back to hub</h1></a>
  <div class="form">
    <style>
    .form{
      display: flex;
      flex-direction: column;
      flex-wrap: wrap;
      width:700px
      margin-left:auto;
      margin-right:auto;

    }

    :root{
  --background-gradient: linear-gradient(178deg, #ffff33 10%, #3333ff);
  --gray: #34495e;
  --darkgray: #2c3e50;
}

select {
  appearance: none;
  outline: 10px red;
  border: 0;
  box-shadow: none;
  flex: 1;
  padding: 0 1em;
  color: #fff;
  background-color: var(--darkgray);
  background-image: none;
  cursor: pointer;
}
select::-ms-expand {
  display: none;
}
.select {
  position: relative;
  display: flex;
  width: 25em;
  height: 4em;
  border-radius: .25em;
  overflow: hidden;
  margin-top:20px;
  border: solid 1px black;
}
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 1em;
  background-color: #34495e;
  transition: .25s all ease;
  pointer-events: none;
}
/* Transition */
.select:hover::after {
  color: #f39c12;
}

/* Other styles*/
body {
  color: #fff;
}
h1,label,p{
  color:black;
}
img{
  width:200px;
}
.div{
  display:flex;
}

</style>
    <div class=select>
      <label for="cpu">choisissez votre cpu</label>
        <select name="cpu" id="cpu" onchange="handleOptionChange()"> <?php foreach ($options as $option): ?>
            <option>
            <option value="<?= $option['id'] ?>" data-price="<?= $option['price'] ?>"><?= $option['label']." ".$option['price']."DT"?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class=select>
        <label for="gpu">choisissez votre gpu</label>
        <select name="gpu" id="gpu" onchange="handleOptionChange()"> <?php foreach ($optionsgpu as $optiongpu): ?>
          <option>
            <option value="<?= $optiongpu['id'] ?>" data-price="<?= $optiongpu['price'] ?>"><?= $optiongpu['label']." ".$optiongpu['price']."DT"?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class=select>
        <label for="mother">choisissez votre Mother</label>
        <select name="mother" id="mother" onchange="handleOptionChange()">
          <option>
          <?php foreach ($optionsmother as $optionmother): ?>
            <option value="<?= $optionmother['id'] ?>" data-price="<?= $optionmother['price'] ?>"><?= $optionmother['label']." ".$optionmother['price']."DT"?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="div">
        <div class=select>
          <label for="boitier">choisissez votre Boitier</label>
          <select name="boitier" id="boitier" onchange="handleOptionChange()">
          <option>
          <?php foreach ($optionsBoitier as $optionBoitier): ?>
              <option value="<?= $optionBoitier['id'] ?>" data-price="<?= $optionBoitier['price'] ?>"><?= $optionBoitier['label']." ".$optionBoitier['price']."DT"?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="image">
            <img src=<?= $optionBoitier['photo'] ?>/>
        </div>
      </div>
      <div class=select>
        <label for="ram">choisissez votre Ram</label>
        <select name="ram" id="ram" onchange="handleOptionChange()">
        <option>
        <?php foreach ($optionsram as $optionram): ?>
            <option value="<?= $optionram['id'] ?>" data-price="<?= $optionram['price'] ?>"><?= $optionram['label']." ".$optionram['price']."DT"?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class=select>
        <label for="stockage">choisissez votre stockage</label>
        <select name="stockage" id="stockage" onchange="handleOptionChange()">
        <option>
        <?php foreach ($optionsstockage as $optionstockage): ?>
            <option value="<?= $optionstockage['id'] ?>" data-price="<?= $optionstockage['price'] ?>"><?= $optionstockage['label']." ".$optionstockage['price']."DT"?></option>
          <?php endforeach; ?>
        </select>
      </div>
  </div>
  <p id="totalPrice">Total : 0.00 DT</p> 
</body>
</html>
