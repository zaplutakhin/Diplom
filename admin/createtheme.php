<?php
session_start();
include 'connection.php';
$new = $_POST['newtheme'];
$newtheme = $pdo->query("INSERT INTO themes (`theme`) VALUES ('$new')");
header("location:index.php");  
?>