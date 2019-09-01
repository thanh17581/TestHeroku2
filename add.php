<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>Add</title>
</head>
<body>
    <div>
        <h1>Adding Product Form</h1>
        <?php 
        require("dbconnector.php");   
        if(isset($_POST["submit"]))
            {   
                $productid = $_POST["productid"];
                $image = $_POST["image"];
                $name = $_POST["name"];
                $price = $_POST["price"];
                $detail = $_POST["detail"];
                if ($name == ""||$price == ""|| $detail == ""||$image==""||$productid=="") 
                    {
                        ?>
                        <script>
                            alert("Product information should not be blank!!");
                        </script>
                        <?php
                    }
                else
                    {
                        $sql = "select * from product where proname='$name'";
                        $query = pg_query($conn, $sql);
                        if(pg_num_rows($query)>0)
                        {
                        ?> 
                            <script>
                                alert("The product is available!!");
                            </script>
                        <?php
                        }
                        else
                        {
                            $sql = "INSERT INTO product(productid, image,name, price, detail) VALUES ('$productid','$image','$name','$price','$detail')";
                            pg_query($conn,$sql);
                            ?> 
                                <script>
                                    alert("Added successful!");
                                    window.location.href = "/home.php";
                                </script>
                            <?php
                        }
                    }
            }
			?>
        <form action="add.php" method="POST">
            <input type="text" name="productid" placeholder="ID"> <br>
            <input type="text" name="image" placeholder="Link Image"> <br>
            <input type="text" name="name" placeholder="Name"> <br>
            <input type="text" name="price" placeholder="Price"> <br>
            <input type="text" name="detail" placeholder="Detail"> <br>
            <button type="submit" value="Add" name="submit">Add</button>
        </form>
        
        <button><a href="/home.php">Back</a></button>
    </div>
</body>

</html>