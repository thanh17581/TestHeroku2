<?php 
require_once './connect.php';  
if(isset($_POST["user"]) && isset($_POST["password"]))
{
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$sql ="SELECT * FROM account WHERE username = '$user' AND pass= '$pass'";
	$rows = pg_query($sql);
	if(pg_num_rows($rows)==1) { ?>
		<script>
            alert("Login successfully!!");
        </script>
    <?php
    } else { 
        ?>
            <script>
                alert("Wrong Username/Password");
                window.location.href = "/login.php";
            </script>
        <?php }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Product</h1>
        <table>
            <tr>
                <th class="tit">ID</th>
                <th class="tit">Image</th>
                <th class="tit">Name</th>
                <th class="tit">Price ($)</th>
                <th class="tit">Detail</th>
            </tr>

            <?php
            require_once './db.php';
            $sql = "SELECT * FROM product";
            $stmt = $pdo->prepare($sql);
            foreach ($pdo->query($sql) as $row) {
            ?>
                <tr>
                    <td class="info"><?php echo $row['productid']?></td> 
                    <td class="info"><?php echo $row['image']?></td> 
                    <td class="info"><?php echo $row['name']?></td> 
                    <td class="info"><<?php echo $row['price']; ?></td>
                    <td class="info"><?php echo $row['detail']?></td> 
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