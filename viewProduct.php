<?php
    $id = $_GET["id"];
    $conn = mysqli_connect("localhost", "root", "", "store");
    $result = mysqli_query($conn, "select * from product where id=$id");
    $row = mysqli_fetch_array($result);
    echo "<img src=$row[4] height=200/>";
    echo "<h1>$row[1]</h1>";
    echo "<p>$row[2]</p>";
    echo "<h2>$row[3]</h2>";
?>