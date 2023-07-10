<?php
// Get the user's input from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Connect to the database
$conn = mysqli_connect('localhost', 'username', 'password', 'dbname');

// Create the SQL query
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if a matching user was found
if (mysqli_num_rows($result) > 0) {
    // User authentication successful
    echo "Login successful!";
} else {
    // Invalid credentials
    echo "Invalid username or password!";
}

// Close the database connection
mysqli_close($conn);
?>
