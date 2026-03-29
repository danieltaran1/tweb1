<?php
// 1. Connect to the active session
session_start();

// 2. Remove all session variables (nickname, balance, logged_in status)
session_unset();

// 3. Completely destroy the session on the server
session_destroy();

// 4. Redirect the user back to the main page
header("Location: index.php");
exit();
?>