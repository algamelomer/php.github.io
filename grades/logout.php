<?php 

session_start();

// Clear the session data
session_unset();

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: ../admin.php");
exit();
?>