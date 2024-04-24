<?php
if (!isset($_POST["op"])) {
  header("location: index.php");
}

$op = $_POST["op"];

include_once 'dbfunc.php';

$conn = mysqli_connect("127.0.0.1", "root", "");
if ($op == "create" || $op == "recreate") {
  $database = $_POST["db"];
  $file = $_POST["file"];

  if ($op == "recreate") {
    drop_database($conn, $database);
  }
  create_database($conn, $database);
  import_sql_file($conn, $database, $file);
} else if ($op == "drop") {
  $database = $_POST["db"];
  drop_database($conn, $database);
}

header("location: index.php");
