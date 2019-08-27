<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
</body>
</html>