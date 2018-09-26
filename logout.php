<?php
session_start();
unset($_SESSION['username']);
session_destroy();

header("Location: /exam-partner/login.php");
exit;
?>