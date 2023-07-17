<?php
// Assuming you have retrieved the necessary data from a form
$userID = $_SESSION['user_id'];
$newEmail = $_POST['new_email'];

require 'conn.php';

$sql = "UPDATE users SET email = :newEmail WHERE id = :userID";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':newEmail', $newEmail);
$stmt->bindParam(':userID', $userID);

if ($stmt->execute()) {
    echo "Email updated successfully.";
} else {
    echo "Error updating email.";
}


?>
