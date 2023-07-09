<?php
// index.php

// Check if the "page" parameter exists in the query string
if (isset($_GET['page'])) {
    // Get the value of the "page" parameter
    $page = $_GET['page'];

    // Include the requested page if the filename is not empty
    if (!empty($page)) {
        include($page . ".php");
    } else {
        // Display an error message if the filename is empty
        echo 'Please enter a filename.';
    }
}
?>

<!-- index.html -->
<!DOCTYPE html>
<html>
<head>
    <title>File Inclusion CTF</title>
</head>
<body>
    <h1>File Inclusion CTF</h1>
    <form action="" method="GET">
        <label for="page">Enter a filename:</label>
        <input type="text" id="page" name="page">
        <input type="submit" value="Include">
    </form>
    <?php
    if (isset($_POST['flag'])) {
        $enteredFlag = $_POST['flag'];
        if ($enteredFlag === 'FLAG{CONGRATS_LFI}') {
            echo '<b>SOLVED</b>';
        }
    }
    ?>
    <form action="" method="post">
        <label for="flag">Submit the flag:</label>
        <input type="text" id="flag" name="flag">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
