<?php
function get_databases($conn)
{
  $sql = "SHOW DATABASES";
  $res = mysqli_query($conn, $sql);
  $dbs = mysqli_fetch_all($res);
  $databases = [];
  foreach ($dbs as $db) {
    $databases[] = $db[0];
  }
  return $databases;
}

function create_database($conn, $database) {
  $sql = "CREATE DATABASE $database";
  return mysqli_query($conn, $sql);
}

function drop_database($conn, $database) {
  $sql = "DROP DATABASE $database";
  return mysqli_query($conn, $sql);
}

function import_sql_file($conn, $database, $sqlfile) {
  mysqli_select_db($conn, $database);
  return mysqli_multi_query($conn, file_get_contents($sqlfile));
}