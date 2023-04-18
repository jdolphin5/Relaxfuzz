<?php
// Initialize the session
session_save_path("./db");
session_id('mySessionID');
session_start();

// Unset all of the session variables
$_SESSION = array();
//$_SESSION['loggedin'] = "";
//$_SESSION['id'] = "";
//$_SESSION['username'] = "";
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: ./index.php?page=home");
exit;
?>