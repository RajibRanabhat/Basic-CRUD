<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "school";

    $conn = mysqli_connect($hostname, $username, $password, $database);

    if(!$conn){
        echo "Database connection failed";
    }
    else{
        echo "Database connected successfully";
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $password = mysqli_real_escape_string($conn, $_POST['password']); 
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $age = (int)$_POST['age']; 


        $query = "insert into form (name,password,email,age) values ('$name', '$password', '$email', '$age')";
        $result = mysqli_query($conn, $query);
        if($result){
            echo "Data inserted";
        }
        else{
            echo "Failed";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="" method="post">        <!--Can be get method to hide the data in the url-->
        Name: <input type="text" name="name" placeholder="Enter the name" id=""><br>
        Password: <input type="password" name="password" placeholder="Enter the password" id=""><br>
        Email: <input type="email" name="email" placeholder="Enter the email" id=""><br>
        Age: <input type="number" name="age" placeholder="Enter the age" id=""><br>
        <input type="Submit" value="Submit"><br>
    </form>
</body>
</html>