<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
<?php
    $id = $_GET["id"];
    $conn = mysqli_connect("localhost", "root", "", "store");
    $result = mysqli_query($conn, "select * from product where id=$id");
    $row = mysqli_fetch_array($result);
?>
    <form action="updateProduct.php" method="post">
        <input name='id' value=<?php echo $row[0]?> hidden>
        Name: <input type="text" name="name" placeholder="Enter the name" id="" value=<?php echo $row[1]?>><br>
        Description: <input type="text" name="description" placeholder="Description!!" id="" value=<?php echo $row[2]?>><br>
        Price: <input type="text" name="price" placeholder="Enter the price" id="" value=<?php echo $row[3]?>><br>
        Image: <input type="text" name="image" placeholder="Attach the image" id=""><br>
            
        <input type="Submit" value="Submit"><br>
    </form>
</body>
</html>