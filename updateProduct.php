<?php
    $conn = mysqli_connect("localhost", "root", "", "store");

    $formUsername = $_POST['name'];
    $formDescription = $_POST['description'];
    $formPrice = $_POST['price'];
    $formImage = $_POST['image'];
    $id=$_POST['id'];

    $query = "update product set name='$formUsername',description='$formDescription',price='$formPrice' where id=$id ";
    $result = mysqli_query($conn, $query);
    header('Location: '.'viewProducts.php');
?>