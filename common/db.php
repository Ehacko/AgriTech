<?php
  #$db = new PDO('mysql:host=localhost; dbname=agritech', 'root', '');
  #$db -> exec("SET CHARACTER SET utf8");
  $dbi = parse_url(getenv("DATABASE_URL"));
  $db = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $dbi["host"],
    $dbi["port"],
    $dbi["user"],
    $dbi["pass"],
    ltrim($dbi["path"], "/")
));
?>
