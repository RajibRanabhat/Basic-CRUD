<?php
    $servername = "localhost";
    $dbname = "store";
    $username_db = "root";      //Change this to your database username
    $password_db = "";          //Change this to your database password

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        //Create connection
        $conn = new mysqli($servername, $username_db, $password_db, $dbname);

        //Check connection
        if($conn->connect_error){
            die("Connection failed:" . $conn->connect_error);
        }

        $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            setcookie('user', $username, time() + 3600, '/');
            header('Location: viewProducts.php');
        }
        else{
            echo 'Invalid username or password';
        }

        $conn->close();
    }
?>