<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="addProduct.php" method="post">        <!--Can be get method to hide the data in the url-->
        Name: <input type="text" name="name" placeholder="Enter the name" id=""><br>
        Description: <input type="text" name="description" placeholder="Description!!" id=""><br>
        Price: <input type="text" name="price" placeholder="Enter the price" id=""><br>
        Image: <input type="text" name="image" placeholder="Attach the image" id=""><br>
            
        <input type="Submit" value="Submit"><br>
    </form>
</body>
</html>