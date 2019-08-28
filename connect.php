<?php
  if (empty(getenv("DATABASE_URL"))){
      $pdo = new PDO('pgsql:host=ec2-23-21-160-38.compute-1.amazonaws.com;port=5432;dbname=dbjfoa0gfe9evt', 'jzidaowoheuhua', 'fc1db7716f804b61c3182a5ff5bdeb1a34fee534a953a3d3369af51ca2b42d69');
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
