<?php 
require_once './dbconnector.php';  
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
<<div>
        <h1>Managing Product</h1>
        <table>
            <tr>
                <th class="tit">ID</th>
                <th class="tit">Name</th>
                <th class="tit">Price ($)</th>
                <th class="tit">Description</th>
                <th class="tit">Editing</th>
            </tr>

            <?php
            require_once './database.php';
            $sql = "SELECT * FROM product";
            $stmt = $pdo->prepare($sql);
            foreach ($pdo->query($sql) as $row) {
            ?>
                <tr>
                    <td class="info"><?php echo $row['productid']?></td> 
                    <td class="info"><?php echo $row['proname']?></td> 
                    <td class="info"><?php echo $row['price']?></td> 
                    <td class="info"><?php echo $row['descrip']?></td> 
                    <td class="info">
                        <form action='/delete.php' method="POST">
                            <input type='hidden' name='productid' value='<?php echo $row['productid']?>'>
                            <input class="edit-btn" type='submit' value='Delete'>
                        </form> <br>

                        <form action="/update.php" method="POST">
                            <input type='hidden' name='productid' value='<?php echo $row['productid']?>'>
                            <input type='hidden' name='name' value='<?php echo $row['proname']?>'>
                            <input type='hidden' name='price' value='<?php echo $row['price']?>'>
                            <input type='hidden' name='descrip' value='<?php echo $row['descrip']?>'>
                            <input class="edit-btn" type='submit' value='Update'>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?> 
        </table>
        <button><a href="/add.php">Add More</a></button>
        <br><br>
    </div>
</body>
</html>