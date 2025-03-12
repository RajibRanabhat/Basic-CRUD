<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <h2>Register</h2>
    <form action="Register.php" method="post">        <!--Can be get method to hide the data in the url-->
        <label for="name">Name:</label><br>
        <input type="text" id= "name" name="name" required><br><br>

        <label for="username">Username:</label><br>
        <input type="text" id= "username" name="username" required><br><br>

        <label for="gender">Gender:</label><br>
        <input type="radio" id= "male" name="gender" value="male" required>
        <label for="male">Male</label><br>
        <input type="radio" id= "female" name="gender" value="female" required>
        <label for="female">Female</label><br><br>

        <label for = "password">Password:</label><br>
        <input type= "password" id="password" name="password" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"]  == "POST")
    {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];

        $conn = mysqli_cOnnect("localhost", "root", "", "store");
        $sql = "INSERT INTO user(name, username, password, gender) VALUES('$name', '$username', '$password', '$gender')";
        $result = mysqli_query($conn, $sql);
        if($result>0){
            header('Location: Login.php');
        }
        else{
            echo "Registration Failed";
        }
    }
?>