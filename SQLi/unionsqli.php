<?php

$category = $_GET['category'];


$conn = mysqli_connect('localhost', 'username', 'password', 'dbname');

// Create the SQL query with vulnerability
$query = "SELECT name, price FROM products WHERE category = '$category' ";

$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Product: " . $row['name'] . " | Price: " . $row['price'] . "<br>";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
