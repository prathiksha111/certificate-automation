<?php
session_start();

// Reset session variables
$_SESSION["user_id"] = null;
$_SESSION["password"] = null;
$_SESSION["branch"] = null;
// Redirect to index.html
header("Location: ../../index.php");
exit();
?>
