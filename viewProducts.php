<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1px">
        <h2><i><u>Brandy in Nepal<u><i></h2>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
        </tr>

        <?php
            $conn = mysqli_connect("localhost", "root", "", "store");
            $result = mysqli_query($conn, "select * from product");
            while($row = mysqli_fetch_array($result)){
                echo "<tr><td><img src = $row[4] height=200/></td>";
                echo "<td><a href='./viewProduct.php?id=$row[0]'>$row[1]</a></td>";
                echo "<td>$row[2]</td>";
                echo "<td>$row[3]</td>";
                echo "<td><a href='./updateProductForm.php?id=$row[0]'>Update</a></td></tr>";
            }
        ?>
    </table>
</body>
</html>