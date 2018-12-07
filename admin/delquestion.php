<?php
session_start();
include 'connection.php';
$questionid = $_GET['questionid'];
$data = $pdo->query("DELETE FROM faq WHERE id='$questionid'");
header("location:index.php");
?>