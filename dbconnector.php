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
    include "connect.php";
        if(isset($_POST["username"]) && isset($_POST["pass"]))
{
	$user = $_POST["username"];
	$pass = $_POST["pass"];
	$sql ="SELECT * FROM account WHERE username = '$user' AND pass= '$pass'";
	$rows = pg_query($sql); 
	if(pg_num_rows($rows)==1) { ?>
		<script>
            alert("Login successfully!!");
            window.location.href = "/home.php"; 
        </script>
    <?php
    } else { 
        ?> 
            <script>
                alert("Wrong Username/Password");
                window.location.href = "/index.php"; 
            </script>
        <?php }
}

    ?>

    "Your product has been added successfully"; <button><a href="index.php">Back</a></button>
    
</body>
</html>