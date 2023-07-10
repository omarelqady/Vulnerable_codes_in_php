<?php
if (isset($_POST['target'])) {
    $target = $_POST['target'];


    $output = shell_exec("ping -n 4 " . $target);

   
    echo "<pre>$output</pre>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ping Test</title>
</head>
<body>
    <h1>Ping Test</h1>

    <form method="POST" action="">
        <label for="target">Enter an IP address or hostname:</label>
        <input type="text" id="target" name="target">
        <input type="submit" value="Ping">
    </form>
</body>
</html>
