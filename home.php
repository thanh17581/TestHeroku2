
<!DOCTYPE html>
<html>
<head>

	<title>Thanh Store</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
	.head1{
		font-size: 50px;
			color: yellow;
			padding: 20px 200px 800px 450px;
	}
</style>
</head>
<body>
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
            require_once './connect.php';
            
            foreach ($resultSet as $row) {
            ?>
	<tr>
		<th class="Bz"><? = $row['productid']?></th>
		<th class="Bz"><? = $row['image']?></th>
		<th class="Bz"><? = $row['name']?></th>
		<th class="Bz"><? = $row['price']?></th>
		<th class="Bz"><? = $row['detail']?></th>
	</tr>
<?php
}
?>
</table>
</body>
</html>