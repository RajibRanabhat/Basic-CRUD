<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="form-submit.php" method="post">        <!--Can be get method to hide the data in the url-->
        Name: <input type="text" name="name" placeholder="Enter the name" id=""><br>
        Age: <input type="number" name="age" placeholder="Enter the age" id=""><br>
        Gender: <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female<br>
            
        <input type="Submit" value="Submit"><br>
    </form>
</body>
</html>