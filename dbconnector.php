<!-- <?php
$conn = pg_connect("host=ec2-23-21-160-38.compute-1.amazonaws.com port = 5432 dbname= dbjfoa0gfe9evt user= jzidaowoheuhua password= fc1db7716f804b61c3182a5ff5bdeb1a34fee534a953a3d3369af51ca2b42d69") or die("unstable connection")
  ?> -->








  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    include "database.php";
        $id = $_POST["txtId"];
        $name = $_POST["txtName"];
        $price = $_POST["txtPrice"];
        $content = $_POST["txtContent"];

        $sql = "INSERT INTO product (id, name, price, content) VALUES (?,?,?,?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$id, $name, $price, $content])

    ?>

    "Your product has been added successfully"; <button><a href="index.php">Back</a></button>
    
</body>
</html>