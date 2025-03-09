<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "school";

    $formUsername = $_POST['name'];
    $formAge = $_POST['age'];
    $formGender = $_POST['gender'];

    $conn = mysqli_connect($hostname, $username, $password, $database);
    $query = "insert into teacher (name,age,gender) values ('$formUsername', '$formAge', '$formGender')";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "Data inserted";
    }
    else{
        echo "Failed";
    }

    if(!$conn){
        echo "Database connection failed";
    }
    else{
        echo "Database connected successfully";
    }
?>