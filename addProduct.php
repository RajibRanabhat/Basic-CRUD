<?php
    $conn = mysqli_connect("localhost", "root", "", "store");

    $formUsername = $_POST['name'];
    $formDescription = $_POST['description'];
    $formPrice = $_POST['price'];
    $formImage = $_POST['image'];

    $query = "insert into product (name,description,price,image) values ('$formUsername', '$formDescription', '$formPrice', '$formImage')";
    $result = mysqli_query($conn, $query);
    header('Location: '.'viewProducts.php');
?>