<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS-ME</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f2f2f2;
        }

        h1 {
            margin-bottom: 20px;
            color: #333333;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #333333;
        }

        input[type="text"] {
            padding: 5px;
            margin: 5px 0;
            width: 200px;
        }

        input[type="submit"] {
            padding: 5px 10px;
            background-color: #333333;
            color: #ffffff;
            border: none;
            cursor: pointer;
        }

        .success {
            color: #008000;
            margin-top: 10px;
        }

        .error {
            color: #ff0000;
            margin-top: 10px;
        }
    </style>
</head>
<body>


    <form method="post">
        <label for="input">Enter your name:</label>
        <input type="text" id="input" name="xss" value="">
        <input type="submit" value="Submit">
    </form>

    <?php
    

    session_start();

    if (!isset($_SESSION['inputs'])) {
        $_SESSION['inputs'] = [];
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['xss'])) {
            $xss = $_POST['xss'];

            $_SESSION['inputs'][] = $xss;
        }
    }
    ?>

    <h2>Stored User Inputs:</h2>
    <?php
    foreach ($_SESSION['inputs'] as $input) {
        echo "<h3>$input</h3>";
    }
    ?>
</body>
</html>
