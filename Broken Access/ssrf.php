<?php
if (isset($_POST['url'])) {
    $url = $_POST['url'];

    // Open the URL for reading
    $file = fopen($url, "r");

    // Check if the URL was opened successfully
    if ($file) {
        // Read and output the contents of the URL
        while (($line = fgets($file)) !== false) {
            echo $line;
        }

        // Close the file
        fclose($file);
    } else {
        // Failed to open the URL
        echo "Unable to open the URL.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Read URL Contents</title>
</head>
<body>
    <h1>Read URL Contents</h1>

    <form method="POST" action="">
        <label for="url">Enter a URL:</label>
        <input type="text" id="url" name="url">
        <input type="submit" value="Read">
    </form>
</body>
</html>
