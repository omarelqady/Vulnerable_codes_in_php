<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome to the Home Page</h1>

    <?php
    if (isset($_SESSION['id'])) {
        $userId = $_SESSION['id'];        
        echo "<a href='home.php?id=$_SESSION['id']'>Go to Home</a>";
    } else {
        header("Location: login.php");
        exit();
    }
    ?>
</body>
</html>
