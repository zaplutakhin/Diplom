<?php
session_start();
include 'connection.php';
$user = $_GET['user'];
$data = $pdo->query("DELETE FROM users WHERE username='$user'");
header("location:index.php");
?>