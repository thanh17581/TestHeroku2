<?php
  if (empty(getenv("DATABASE_URL"))){
      $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=postgres', 'postgres', 'Candice');
  }  else {
    $db = parse_url(getenv("DATABASE_URL"));
    $pdo = new PDO("pgsql:" . sprintf(
        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
    ));
  }
?>
