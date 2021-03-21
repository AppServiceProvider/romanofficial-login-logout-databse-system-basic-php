<?php
session_start();
$name=$_SESSION['name'];
//unset($name);
session_destroy();
header('location:index.php');
?>