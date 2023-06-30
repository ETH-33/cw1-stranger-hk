<?php
session_start();
session_destroy();
header('Location: http://localhost/cw1-stranger-hk/html/Login.php'); // Redirect to login page after logout
exit;
?>
