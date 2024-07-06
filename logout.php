<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the index or login page after logout
header("Location: index.php"); // Replace index.php with your desired redirect page
exit;
?>
