<!DOCTYPE html>
<html>
<head>

	<title>Thanh Store</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<style>
	.head1{
		font-size: 50px;
			color: yellow;
			padding: 20px 200px 800px 450px;
	}
</style>
</head>
<body>
	<?php 
require_once './connect.php';  
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
<div class="head1">Product</div>
<table>
	<tr>
		<th class="Bz">ID</th> 
		<th class="Bz">Image</th>
		<th class="Bz">Name</th>
		<th class="Bz">Price($)</th>
		<th class="Bz">Detail</th>
	</tr>
	<?php
            require_once 'connect.php';
            $sql = "SELECT * FROM product"; 
        $stmt = $pdo->prepare($sql); 
        $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        $stmt->execute();
        $resultSet = $stmt->fetchAll();
            foreach ($resultSet as $row) {
            ?>
	<tr>
		<th class="Bz"><?= $row['productid']?></th> 
		<th class="Bz"><?= $row['image']?></th> 
		<th class="Bz"><?= $row['name']?></th>
		<th class="Bz"><?= $row['price']?></th>
		<th class="Bz"><?= $row['detail']?></th>
		<form action='/delete.php' method="POST">
                            <input type='hidden' name='productid' value='<?php echo $row['productid']?>'>
                            <input class="edit-btn" type='submit' value='Delete'>
                        </form> <br>
	</tr>
	<tr>
		
	</tr>
<?php
}
?>
</table>
<button><a href="/add.php">Add</a></button>
</body>
</html>