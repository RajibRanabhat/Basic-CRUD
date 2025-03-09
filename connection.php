<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "school";

    $conn = mysqli_connect($hostname, $username, $password, $database);
    $query = "insert into student (name,age,gender) values ('Manjib Kumar Batas','20','MALE')";
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





<!--?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "school";

$conn = mysqli_connect($hostname, $username, $password, $database);

if(!$conn){
    echo "Database connection failed";
} 
else 
{
    echo "Database connected successfully";

    // Fetch data from the student table
    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn, $sql);

    // Check if the table has records
    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Student Table Data</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Name</th><th>Age</th><th>Gender</th></tr>"; 

        // Fetch and display rows
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
            echo "<td>" . $row["gender"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No records found in the student table.</p>";
    }
}

// Close connection
mysqli_close($conn);
?-->
