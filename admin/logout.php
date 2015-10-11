<?php
session_start();
$_SESSION['adminlogin'] = null;
header("Location: index.php");
?>