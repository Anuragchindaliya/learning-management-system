<?php 
session_start();
// unset($_SESSION['is_login']);
session_destroy();

echo "<script>location.href='index.php';</script>";
// header("location: /index.php");
?>
