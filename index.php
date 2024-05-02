<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projets Elèves</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <h1>Projets élèves</h1>
  <?php
  include_once 'dbfunc.php';

  $conn = mysqli_connect("127.0.0.1", "root", "");

  $databases = get_databases($conn);

  $op = "";
  if (isset($_GET["op"])) {
    $op = $_GET["op"];
  }

  if ($op == "") {
    echo "<div class=\"eleves\">";
    $curr_dir = dirname(__FILE__);
    $files = scandir($curr_dir);
    foreach ($files as $file) {
      if ($file == '.' || $file == '..' || $file[0] == '.') {
        continue;
      }
      $filepath = $curr_dir . DIRECTORY_SEPARATOR . $file;
      if (is_dir($filepath)) {
        $userfiles = scandir($filepath);
        $sqlfile = "";
        $database = "";
        foreach ($userfiles as $userfile) {
          if (substr($userfile, -4) == '.sql') {
            $database = substr($userfile, 0, -4);
            $sqlfile = $filepath . DIRECTORY_SEPARATOR . $userfile;
          }
        }
        $created = in_array($database, $databases);
        $eleve = str_replace("_", " ", $file);
        echo "<div class=\"eleve\">";
        echo "<h2>$eleve</h2>";
        echo "<div><strong>Site : </strong> <a href=\"$file\" target=\"_blank\">" . $file . "</a></div>";
        if ($database) {
          echo "<div>";
          echo "<strong>Base de données : </strong> $database (";
          if (!$created) {
            $link = "op=create&db=$database&file=$sqlfile";
            echo "<a href=\"index.php?$link\">Créer</a>";
          } else {
            $link = "op=recreate&db=$database&file=$sqlfile";
            echo "<a href=\"index.php?$link\">Recréer</a>";
            echo " - <a href=\"index.php?op=drop&db=$database\">Supprimer</a>";
          }
          echo ")</div>";
        } else {
          echo "<div><strong>Base de données : </strong> Aucune</div>";
        }
        echo "</div>";
      }
    }
    echo "</div>";
  } else if ($op == "create" || $op == "recreate") {
  ?>
    <div>
      <h2>Création de la base de données '<?= $_GET["db"] ?>'</h2>
      <form action="createdb.php" method="post">
        <input type="hidden" name="op" value="<?= $op ?>">
        <div>
          <label for="db">Base de données</label>
          <input type="text" id="db" name="db" value="<?= $_GET["db"] ?>">
        </div>
        <div>
          <label for="file">Fichier SQL</label>
          <input type="text" id="file" name="file" value="<?= $_GET["file"] ?>">
        </div>
        <div>
          <button>Créer</button>
          <a href="index.php">Annuler</a>
        </div>
      </form>
    </div>
  <?php
  } else if ($op == "drop") {
  ?>
    <div>
      <h2>Suppression de la base de données '<?= $_GET["db"] ?>'</h2>
      <form action="createdb.php" method="post">
        <input type="hidden" name="op" value="<?= $op ?>">
        <div>
          <label for="db">Base de données</label>
          <input type="text" id="db" name="db" value="<?= $_GET["db"] ?>">
        </div>
        <div>
          <button>Supprimer</button>
          <a href="index.php">Annuler</a>
        </div>
      </form>
    </div>
  <?php
  }
  ?>
</body>

</html>